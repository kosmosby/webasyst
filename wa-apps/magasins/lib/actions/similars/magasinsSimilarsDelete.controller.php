<?php

class magasinsSimilarsDeleteController extends waController
{

    public function execute()
    {
        $model = new magasinsSimilarsModel();
        $ids = waRequest::post('ids');

        if (isset($ids) && $ids) {
            $model->deleteById(explode(',',$ids));
        }
    }
}
