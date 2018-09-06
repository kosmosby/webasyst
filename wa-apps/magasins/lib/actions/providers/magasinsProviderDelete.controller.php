<?php

class magasinsProviderDeleteController extends waController
{

    public function execute()
    {
        $model = new magasinsProviderModel();
        $ids = waRequest::post('ids');

        $id = waRequest::request('id');
        $magasin_id = waRequest::request('magasin_id');
        $is_modal = waRequest::request('is_modal');

        if($is_modal && $id) {
            $ProvidergroupsmagasinModel = new magasinsProvidergroupsmagasinModel();
            $ProvidergroupsmagasinModel->query("DELETE FROM `magasins_provider_groups_magasin` WHERE magasin_id = ".$magasin_id." AND provider_id = ".$id);

        }
        else {
            if (isset($ids) && $ids) {
                $model->deleteById(explode(',', $ids));
            }
        }
    }
}
