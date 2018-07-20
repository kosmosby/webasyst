<?php

class magasinsMatchsAction extends waViewAction
{
    public $records_array = array();

    public function execute()
    {

        $search =  waRequest::post('search');
        $provider_id = waRequest::request('provider_id');

        $model = new magasinsMatchsModel();

        $model_magasin = new magasinsMagasinModel();
        $model_provider = new magasinsProviderModel();

        $provider_info = $model_provider->getById($provider_id);

        $this->setLayout( new magasinsDefaultLayout());

        if($search) {
            $sql = $model->query("SELECT * FROM magasins_fields_provider WHERE provider_id = ".$provider_info['id']." AND (name LIKE '%".$search."%' ) ORDER BY id DESC");
            $records = $sql->fetchAll();
        }
        else {
            $sql = $model->query("SELECT * FROM magasins_fields_provider WHERE provider_id = ".$provider_info['id']." ORDER BY id DESC");
            $records = $sql->fetchAll();
        }

        $sql = $model->query('SELECT CONCAT(TABLE_NAME ,".",COLUMN_NAME ) as fields_categories'
            .' FROM INFORMATION_SCHEMA.COLUMNS'
            .' WHERE TABLE_NAME in (\'magasins_categories\') AND COLUMN_NAME NOT IN (\'id\',\'provider_id\',\'update_date\',\'hash\')'
        );
        $categories_select = $sql->fetchAll();


        $sql = $model->query('SELECT CONCAT(TABLE_NAME ,".",COLUMN_NAME ) as fields_products'
            .' FROM INFORMATION_SCHEMA.COLUMNS'
            .' WHERE TABLE_NAME in (\'magasins_products\') AND COLUMN_NAME NOT IN (\'id\',\'provider_id\',\'update_date\',\'hash\')'
        );
        $products_select = $sql->fetchAll();


  //      $xml_url = $provider_info['xml_url'];

        //echo $xml; die;

//        $xml = new XMLReader();
//        $xml->open($xml_url);
//        $array = $this->xml2assoc($xml);

//        echo "<pre>";
//        print_r($products_select);
//        echo "</pre>"; die;


//        $xml->close();






//        if(!$search) {
//            $this->get_array($records, 0, 0);
//            $records = $this->records_array;
//        }
//        echo "<pre>";
//        print_r($records); die;
//        echo "</pre>";

        $this->view->assign('provider_info', $provider_info);

        $this->view->assign('records', $records);
        $this->view->assign('search', $search);


        $this->view->assign('categories_select', $categories_select);
        $this->view->assign('products_select', $products_select);
    }



//    public function get_array($my_array,$parent,$level)
//    {
//        $level++;
//        foreach ($my_array as $k => $v) {
//            if ($v['parent_id'] == $parent) {
//                $v['level'] = $level;
//                $this->records_array[] = $v;
//                $this->get_array($my_array,$v['id'],$level);
//            }
//        }
//    }


//    public function xml2assoc($xml) {
//        $assoc = null;
//        while($xml->read()){
//            switch ($xml->nodeType) {
//                case XMLReader::END_ELEMENT: return $assoc;
//                case XMLReader::ELEMENT:
//                    $assoc[$xml->name][] = array('value' => $xml->isEmptyElement ? '' : $this->xml2assoc($xml));
//                    if($xml->hasAttributes){
//                        $el =& $assoc[$xml->name][count($assoc[$xml->name]) - 1];
//                        while($xml->moveToNextAttribute()) $el['attributes'][$xml->name] = $xml->value;
//                    }
//                    break;
//                case XMLReader::TEXT:
//                case XMLReader::CDATA: $assoc .= $xml->value;
//            }
//        }
//        return $assoc;
//    }


}