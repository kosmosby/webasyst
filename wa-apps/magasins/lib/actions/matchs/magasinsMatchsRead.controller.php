<?php

class magasinsMatchsReadController extends waController
{

    public $array = array();
    public $records_array = array();
    public $select = '';

    public function execute()
    {
        $provider_id = waRequest::request('provider_id');

        $model = new magasinsProviderModel();

        $json = '';

        $array = array();
        if(isset($provider_id) && $provider_id) {

            $result = $model->query("SELECT * FROM magasins_fields_provider WHERE provider_id = ".$provider_id);
            $rows = $result->fetchAll();

            if(!count($rows)) {
                $array['error'] = 'Не сделаны настройки сопоставления полей xml файла в настройках поставщика';
                $json = json_encode($array);
                echo $json;
                exit();
            }
            else {

                $model_provider = new magasinsProviderModel();
                $provider_info = $model_provider->getById($provider_id);

                $xml_url = $provider_info['xml_url'];

                $readxml_obj = new magasinsReadxmlAction();

                $readxml_obj->array = $readxml_obj->read_array($provider_id);
                $readxml_obj->arr_db = $readxml_obj->compose_array_db($provider_id);

                $readxml_obj->clean_array();

                //create tmp tables
                $readxml_obj->sql = $this->create_tmp_products();
                $readxml_obj->sql .= $this->create_tmp_categories();
                $readxml_obj->insert_sql();

                $xml = new XMLReader();
                $xml->open(trim($xml_url));
                $readxml_obj->xml2assoc($xml);

                $readxml_obj->insert_sql();

                //$this->compose_array_db();
                $readxml_obj->compare_arrays();

                $readxml_obj->clean_tables();

//                echo "<pre>";
//                print_r($readxml_obj); die;

            }

            //$reader = new
            //echo 'zzz'; die;

//            $result = $model->query("SELECT category_id,name,parentId FROM magasins_categories_tmp WHERE provider_id = ".$provider_id." LIMIT 10");
//            $categories = $result->fetchAll();
//
//            $result = $model->query("SELECT * FROM magasins_products_tmp WHERE provider_id = ".$provider_id." LIMIT 10");
//            $products = $result->fetchAll();

            $array['categories'] = $readxml_obj->select_tmp_categories();
            $array['products'] = $readxml_obj->select_tmp_products();

//            for($i=0;$i<count($categories);$i++) {
//                $array['categories']=$categories;
//                $array[$data[$i]['db_field']]['multiply']  = $data[$i]['multiply'];
//                $array[$data[$i]['db_field']]['has_a_key']  = $data[$i]['has_a_key'];
//            }

            $json = json_encode($array);

//            echo "<pre>";
//            print_r($json); die;
        }

        echo $json;


    }

    public function create_tmp_products ()
    {
        $products = 'CREATE TEMPORARY TABLE `magasins_products_tmp` (
                    `id` int(11) NOT NULL AUTO_INCREMENT,
                    `product_id` int(11) NOT NULL,
                    `provider_id` int(11) NOT NULL,
                    `name` varchar(255) NOT NULL,
                    `available` varchar(10) NOT NULL,
                    `fee` varchar(255) NOT NULL,
                    `url` text NOT NULL,
                    `price` varchar(255) NOT NULL,
                    `currencyId` varchar(255) NOT NULL,
                    `categoryId` int(11) NOT NULL,
                    `pickup` varchar(10) NOT NULL,
                    `delivery` varchar(10) NOT NULL,
                    `description` text NOT NULL,
                    `picture` text NOT NULL,
                    `update_date` datetime NOT NULL,
                    `hash` varchar(255) NOT NULL,
                    PRIMARY KEY (`id`),
                    KEY `magasins_key` (`product_id`)
                    ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=951 ;';
        return $products;
    }

    public function create_tmp_categories ()
    {
    $categories = 'CREATE TEMPORARY TABLE `magasins_categories_tmp` (
                  `id` int(11) NOT NULL AUTO_INCREMENT,
                  `category_id` int(11) NOT NULL,
                  `name` varchar(255) NOT NULL,
                  `parentId` int(11) NOT NULL,
                  `provider_id` int(11) NOT NULL,
                  `update_date` datetime NOT NULL,
                  `hash` varchar(255) NOT NULL,
                  PRIMARY KEY (`id`),
                  KEY `magasins_key` (`category_id`)
                ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1074 ;';
        return $categories;
    }





}
