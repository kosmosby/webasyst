<?php

class magasinsSetupmagasinSavesettingsController extends waController
{
    public function execute()
    {
        $model = new magasinsSetupmagasinModel();
        if (waRequest::method() == 'post') {
            $magasin_id = waRequest::request('magasin_id');
            $rel = waRequest::request('rel');

            $model->deleteByField('magasin_id',$magasin_id);
            $model->insert(array('rel'=>$rel,'magasin_id'=>$magasin_id));
        }
        exit();
    }
}
