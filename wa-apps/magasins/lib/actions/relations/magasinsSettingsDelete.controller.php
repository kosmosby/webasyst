<?php

class magasinsSettingsDeleteController extends waController
{

    public function execute()
    {
        $model = new magasinsSettingsModel();
        $ids = waRequest::post('ids');

        if (isset($ids) && $ids) {
            $model->deleteById(explode(',',$ids));
        }
    }
}
