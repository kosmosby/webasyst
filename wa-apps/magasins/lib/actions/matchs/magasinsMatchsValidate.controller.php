<?php

class magasinsMatchsValidateController extends waController
{

    public $array = array();
    public $records_array = array();
    public $select = '';

    public function execute()
    {
        $provider_id = waRequest::request('provider_id');

        $model = new magasinsFieldsModel();

        $array_for_json = array();
        if(isset($provider_id) && $provider_id) {

            $array = $model->getByField('provider_id', $provider_id, true);

//            $result = $model->query("SELECT * FROM magasins_fi WHERE provider_id = ".$provider_id." LIMIT 10");
//            $categories = $result->fetchAll();
//
//
//            $result = $model->query("SELECT * FROM magasins_products WHERE provider_id = ".$provider_id." LIMIT 10");
//            $products = $result->fetchAll();
//
//            $array['categories'] = $categories;
//            $array['products'] = $products;


//
//            for($i=0;$i<count($categories);$i++) {
//                $array['categories']=$categories;
//                $array[$data[$i]['db_field']]['multiply']  = $data[$i]['multiply'];
//                $array[$data[$i]['db_field']]['has_a_key']  = $data[$i]['has_a_key'];
//            }

            $array_for_json['count_elements']= count($array);
            $json = json_encode($array_for_json);

//            echo "<pre>";
//            print_r($json); die;
        }

        echo $json;

    }





}
