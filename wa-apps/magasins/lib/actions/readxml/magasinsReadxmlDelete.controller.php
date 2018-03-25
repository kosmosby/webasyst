<?php

class magasinsFieldsDeleteController extends waController
{

    public function execute()
    {
        $model = new magasinsFieldsModel();
        $ids = waRequest::post('ids');

        if (isset($ids) && $ids) {
            $model->deleteById(explode(',',$ids));
        }
    }
}
