<?php

class magasinsSetupmagasinSaveController extends waController
{

    public function execute()
    {
        $model = new magasinsSetupmagasinModel();

        if (waRequest::method() == 'post') {
            $id = waRequest::request('id');
            $magasin_id = waRequest::request('magasin_id');
            $provider_id = waRequest::request('provider_id');



            if($id) {
                $model->updateById($id,array(
                    'magasin_id' => $magasin_id,
                    'provider_id' => $provider_id
                ));
            }
            else {
                $model->insert(array(
                    'magasin_id' => $magasin_id,
                    'provider_id' => $provider_id
                ));
            }
        }
        $this->redirect(waSystem::getInstance()->getUrl().'?module=setupmagasin&magasin_id='.$magasin_id);
    }
}
