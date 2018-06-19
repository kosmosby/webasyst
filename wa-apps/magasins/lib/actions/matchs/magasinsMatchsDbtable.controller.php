<?php

class magasinsMatchsDbtableController extends waController
{

    public function execute()
    {
        $magasin_id = waRequest::request('magasin_id');
        $provider_id = waRequest::request('provider_id');

        $model = new magasinsProviderModel();

        $json = array();

        $array = array();
        if(isset($magasin_id) && isset($provider_id) && $magasin_id && $provider_id) {

            $result = $model->query("SELECT db_table,path FROM magasins_fields_provider WHERE magasin_id = ".$magasin_id." AND provider_id = ".$provider_id." AND db_table !=''");
            $data = $result->fetchAll();

            for($i=0;$i<count($data);$i++) {
                if($data[$i]['db_table'] == 'magasins_products') {
                    $array[$i]['magasins_products']  = $data[$i]['path'];
                }
                else {
                    $array[$i]['magasins_categories']  = $data[$i]['path'];
                }
            }

            $json = json_encode($array);
        }
        echo $json;
    }

}
