<?php

class magasinsMatchsValuesController extends waController
{

    public function execute()
    {
        $magasin_id = waRequest::request('magasin_id');
        $provider_id = waRequest::request('provider_id');

        $model = new magasinsProviderModel();

        $json = array();

        $array = array();
        if(isset($magasin_id) && isset($provider_id) && $magasin_id && $provider_id) {


            $result = $model->query("SELECT db_field,path,multiply,has_a_key FROM magasins_fields_provider WHERE magasin_id = ".$magasin_id." AND provider_id = ".$provider_id);
            $data = $result->fetchAll();

            for($i=0;$i<count($data);$i++) {
                $array[$data[$i]['db_field']]['path']  = $data[$i]['path'];
                $array[$data[$i]['db_field']]['multiply']  = $data[$i]['multiply'];
                $array[$data[$i]['db_field']]['has_a_key']  = $data[$i]['has_a_key'];
            }

            $json = json_encode($array);
        }

        echo $json;
    }

}
