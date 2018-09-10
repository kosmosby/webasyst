<?php

class magasinsProductCsvController extends waController
{

    public $array = array();
    public $records_array = array();
    public $select = '';

    public function execute()
    {

        $provider_id = waRequest::request('provider_id');
        $magasin_id = waRequest::request('magasin_id');
        $model = new magasinsProviderModel();

        $products = array();
        if(isset($provider_id) && $provider_id) {
            $result = $model->query("SELECT a.*,b.name as category FROM magasins_products as a LEFT JOIN magasins_categories as b ON a.categoryId = b.category_id WHERE a.provider_id = ".$provider_id);
            $products = $result->fetchAll();
        }

        $selected_fields_model = new magasinsFieldsmagasinModel();

        $headers = $selected_fields_model->getByField(array('provider_id' => $provider_id, 'magasin_id' => $magasin_id), true);

        $data1='';
        $data2=array();
        for($i=0;$i<count($headers);$i++) {
            $data1 .= $headers[$i]['name'];
            $data2[] = $headers[$i]['name'];
            if(($i+1)!=count($headers))   $data1 .= ';';
        }

        $products = array();
        if(isset($provider_id) && $provider_id) {
            $sql = $model->query("SELECT " . implode(',', $data2) . " FROM `magasins_products` LEFT JOIN `magasins_categories` ON `magasins_products`.`categoryId` = `magasins_categories`.`id` WHERE `magasins_products`.`provider_id` = " . $provider_id . " GROUP BY `magasins_products`.`id`");
            $products = $sql->fetchAll();
        }

        //$data1 = "Наименование;Наименование артикула;Код артикула;Валюта;Цена;Доступен для заказа;Зачеркнутая цена;Закупочная цена;В наличии;Краткое описание;Описание;Наклейка;Статус;Тип товаров;Теги;Облагается налогом;Заголовок;META Keywords;META Description;Ссылка на витрину;Адрес видео на YouTube или Vimeo;Дополнительные параметры;Изображения;Изображения;Изображения;Изображения;Изображения;Изображения;Изображения;Изображения;Изображения;Изображения;Изображения;Изображения;Изображения";
        $data1 = '"' . str_replace(";", '";"', $data1) . '"';
        $data1 = $data1."\n";

//        echo "<pre>";
//        print_r($data1);
//        print_r($products); die;


        $data3 = '';
        for($i=0;$i<count($products);$i++) {
            $array = array();
            foreach ($products[$i] as $k=>$v) {

//                if($v=='picture') {
//                    $v = str_replace('|', ';', $products[$i]['picture']);
//                }
                if($k=='name') {
                    $name_ = str_replace('"', '""', $products[$i]['name']);
                    $v = '{name}';
                }

                if($k=='description') {
                    $description_ = str_replace('"', '""', $products[$i]['description']);
                    $v = '{description}';
                }
//
//               $data2 = $name . ";;" . $products[$i]['product_id'] . ";" . $products[$i]['currencyId'] . ";" . $products[$i]['price'] . ";" . $products[$i]['available'] . ";;;;;" . $description . ";;;" . $products[$i]['category'] . ";;;" . $name . ";;;" . $products[$i]['url'] . ";;;" . $pictures . "";
//               $data2 = '"' . str_replace(";", '";"', $data2) . '"';

                $array[] = str_replace('"','""',$v);
            }
            $my_string_value = implode(";",$array);
            $my_string_value_with_quotes = '"' . str_replace(";", '";"', $my_string_value) . '"'."\n";

            $my_string_value_with_quotes = str_replace('{name}', $name_, $my_string_value_with_quotes);
            $my_string_value_with_quotes = str_replace('{description}', $description_, $my_string_value_with_quotes);

            $data3 .= $my_string_value_with_quotes;
        }

        $data = $data1.$data3;

//        echo "<pre>";
//        print_r($data); die;


        header('Content-Type: application/csv');
        header('Content-Disposition: attachment; filename="filename.csv"');
        echo $data; exit();

    }





}
