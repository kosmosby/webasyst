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


            $result = $model->query("SELECT category_id,name,parentId FROM magasins_categories WHERE provider_id = ".$provider_id." LIMIT 10");
            $categories = $result->fetchAll();


            $result = $model->query("SELECT * FROM magasins_products WHERE provider_id = ".$provider_id." LIMIT 10");
            $products = $result->fetchAll();

            $array['categories'] = $categories;
            $array['products'] = $products;


//
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





}
