<?php

class magasinsSelectfieldsReadController extends waController
{

    public $array = array();
    public $records_array = array();
    public $select = '';

    public function execute()
    {
        $provider_id = waRequest::request('provider_id');
        $magasin_id = waRequest::request('magasin_id');

        $model = new magasinsProviderModel();

        $json = '';
        $array = array();
        if(isset($provider_id) && $provider_id && isset($magasin_id) && $magasin_id) {

            $result = $model->query("SELECT name FROM magasins_fields_magasin WHERE provider_id = ".$provider_id." AND magasin_id=".$magasin_id);
            $rows = $result->fetchAll();


            $array['values'] = $rows;

            $json = json_encode($array);

        }

        echo $json;


    }





}
