<?php

class magasinsProductDeleteController extends waController
{

    public function execute()
    {
        $model = new magasinsProductModel();
        $ids = waRequest::post('ids');

        if (isset($ids) && $ids) {
            $model->deleteById(explode(',',$ids));
        }
    }
}
