<?php

class magasinsMagasinXmlexportController extends waController
{

    public function execute()
    {
        $magasin_id = waRequest::request('magasin_id');
        $model = new magasinsMagasinModel();
        $magasin = $model->getById($magasin_id);

        $model_prov = new magasinsSetupmagasinModel();
        $providers = $model_prov->getByField(array('magasin_id' => $magasin_id),true);

        $prov_ids = array();
        for($i=0;$i<count($providers);$i++) {
            $prov_ids[] = $providers[$i]['provider_id'];
        }
        $prov_string = implode(',',$prov_ids);


        $query = "SELECT * FROM `magasins_products` WHERE provider_id IN (".$prov_string.") AND id NOT IN (SELECT product_id FROM magasins_similars_submitted WHERE checked = 0)";
        $sql = $model->query($query);
        $products = $sql->fetchAll();

        $query = "SELECT b.* FROM `magasins_categories` as b  WHERE b.provider_id IN (".$prov_string.") GROUP BY b.id ORDER BY b.parentId";
        $sql = $model->query($query);
        $categories = $sql->fetchAll();

//        echo "<pre>";
//        print_r($products); die;


        // Send the headers
        $xml =  '<?xml version="1.0" encoding="utf-8"?>'."\n";
        $xml .= '<!DOCTYPE yml_catalog SYSTEM "shops.dtd">'."\n";

        $xml .= '<yml_catalog date="'.date("Y-m-d H:s").'">'."\n";
        $xml .= "  ".'<shop>'."\n";

        $xml .= "    ".'<name>'.$magasin['name'].'</name>'."\n";
        $xml .= "    ".'<company>Название компании</company>'."\n";
        $xml .= "    ".'<url>'.$magasin['url'].'</url>'."\n";
        $xml .= "    ".'<phone>Телефон</phone>'."\n";
        $xml .= "    ".'<platform>Имя платформы</platform>'."\n";
        $xml .= "    ".'<version>1.0</version>'."\n";
        $xml .= "    ".'<currencies>'."\n";
        $xml .= "      ".'<currency id="RUB" rate="1"/>'."\n";
        $xml .= "      ".'<currency id="USD" rate="67"/>'."\n";
        $xml .= "      ".'<currency id="EUR" rate="77"/>'."\n";
        $xml .= "    ".'</currencies>'."\n";


        $xml .= "    ".'<categories>'."\n";
        for($i=0;$i<count($categories);$i++) {
            if(isset($categories[$i]['parentId']) && $categories[$i]['parentId']) {
                $parent_id = 'parentId="'.$categories[$i]['parentId'].'"';
            }
            else {
                $parent_id = '';
            }
            $xml .= "      ".'<category id="'.$categories[$i]['category_id'].'" '.$parent_id.'>'.htmlspecialchars($categories[$i]['name']).'</category>'."\n";
        }
        $xml .= "    ".'</categories>'."\n";


        $xml .= "    ".'<delivery-options>'."\n";
        $xml .= "      ".'<option cost="250" days="2" order-before="10"/>'."\n";
        $xml .= "    ".'</delivery-options>'."\n";
        $xml .= "    ".'<store>false</store>'."\n";
        $xml .= "    ".'<pickup>true</pickup>'."\n";
        $xml .= "    ".'<delivery>true</delivery>'."\n";


        $xml .= "    ".'<offers>'."\n";
        for($i=0;$i<count($products);$i++) {
            $xml .= "      ".'<offer available="'.$products[$i]['available'].'" id="'.$products[$i]['id'].'" fee="'.$products[$i]['fee'].'" >'."\n";
            $xml .= "        ".'<url>'.$products[$i]['url'].'</url>'."\n";
            $xml .= "        ".'<price>'.$products[$i]['price'].'</price>'."\n";
            $xml .= "        ".'<currencyId>'.$products[$i]['currencyId'].'</currencyId>'."\n";
            $xml .= "        ".'<categoryId>'.$products[$i]['categoryId'].'</categoryId>'."\n";

            $pictures_array = explode('|',$products[$i]['picture']);
            for($j=0;$j<count($pictures_array);$j++) {
                $xml .= "        ".'<picture>'.$pictures_array[$j].'</picture>'."\n";
            }

            $xml .= "        ".'<pickup>'.$products[$i]['pickup'].'</pickup>'."\n";
            $xml .= "        ".'<delivery>'.$products[$i]['delivery'].'</delivery>'."\n";
            $xml .= "        ".'<name>'.htmlspecialchars($products[$i]['name']).'</name>'."\n";

            $xml .= "        ".'<description><![CDATA['.$products[$i]['description'].']]></description>'."\n";
            $xml .= "        ".'<cpa></cpa>'."\n";

            $xml .= "      ".'</offer>'."\n";
        }
        $xml .= "    ".'</offers>'."\n";


        $xml .= "  ".'</shop>'."\n";
        $xml .= '</yml_catalog>'."\n";


        header('Content-type: text/xml');
        header('Content-Disposition: attachment; filename="file.xml"');
        echo $xml; exit();

    }
}
