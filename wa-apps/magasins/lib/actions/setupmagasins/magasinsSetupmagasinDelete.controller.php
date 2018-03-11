<?php

class magasinsSetupmagasinDeleteController extends waController
{

    public function execute()
    {
        $model = new magasinsSetupmagasinModel();
        $ids = waRequest::post('ids');

        if (isset($ids) && $ids) {
            $model->deleteById(explode(',',$ids));
        }
    }
}
