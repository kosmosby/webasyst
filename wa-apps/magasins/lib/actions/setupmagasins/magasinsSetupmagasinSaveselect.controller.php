<?php

class magasinsSetupmagasinSaveselectController extends waController
{

    public function execute()
    {
        $model = new magasinsSetupmagasinModel();


//        echo "<pre>";
//        print_r($_REQUEST); die;


        if (waRequest::method() == 'post') {
            $magasin_id = waRequest::request('magasin_id');

            $model->query("DELETE FROM `magasins_setupmagasin` WHERE magasin_id = ".$magasin_id);

            $providersgroups = waRequest::request('providersgroups');
            //$provider_id = $_REQUEST;

//            echo "<pre>";
//            print_r($provider_id); die;

            for($i=0;$i<count($providersgroups);$i++) {
                $model->insert(array(
                    'magasin_id' => $magasin_id,
                    'provider_id' => $providersgroups[$i]
                ));
            }
        }

        $this->redirect(waSystem::getInstance()->getUrl().'?module=setupmagasin&magasin_id='.$magasin_id);
    }
}
