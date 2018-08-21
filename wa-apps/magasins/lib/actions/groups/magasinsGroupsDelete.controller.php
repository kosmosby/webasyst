<?php

class magasinsGroupsDeleteController extends waController
{

    public function execute()
    {
        $model = new magasinsGroupsModel();
        $ids = waRequest::post('ids');

        if (isset($ids) && $ids) {
            $model->deleteById(explode(',',$ids));
        }
    }
}
