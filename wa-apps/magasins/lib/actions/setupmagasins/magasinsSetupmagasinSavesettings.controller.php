<?php

class magasinsSetupmagasinSavesettingsController extends waController
{
    public function execute()
    {
        $model = new magasinsSettingsModel();
        $magasin_id = waRequest::request('magasin_id');
        $rel = waRequest::request('rel');
        $byarticle = waRequest::request('byarticle');
        $byname = waRequest::request('byname');

        if(isset($byarticle) && $byarticle == 'on') {
            $byarticle = 1;
        }
        else {
            $byarticle = 0;
        }

        if(isset($byname) && $byname == 'on') {
            $byname = 1;
        }
        else {
            $byname = 0;
        }

        $model->query("DELETE FROM magasins_magasin_settings WHERE magasin_id=".$magasin_id);
        $model->query("INSERT INTO magasins_magasin_settings (magasin_id,rel,byarticle,byname) VALUES (".$magasin_id.", ".$rel.", ".$byarticle.",".$byname.")");
        exit();
    }
}
