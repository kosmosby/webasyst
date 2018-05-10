<?php

class magasinsProviderDeleteController extends waController
{

    public function execute()
    {
        $model = new magasinsProviderModel();
        $ids = waRequest::post('ids');

        if (isset($ids) && $ids) {
            $model->deleteById(explode(',',$ids));
        }
    }
}
