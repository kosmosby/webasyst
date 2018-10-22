<?php

class magasinsSetupmagasinSavesettingsController extends waController
{
    public function execute()
    {
        $model = new magasinsSettingsModel();
        $magasin_id = waRequest::request('magasin_id');
        $rel = waRequest::request('rel');
        $model->query("DELETE FROM magasins_magasin_settings WHERE magasin_id=".$magasin_id);
        $model->query("INSERT INTO magasins_magasin_settings (magasin_id,rel) VALUES (".$magasin_id.", ".$rel.")");
        exit();
    }
}
