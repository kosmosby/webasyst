<?php

class magasinsProviderDeleteController extends waController
{

    public function execute()
    {
        $model = new magasinsProviderModel();
        $ids = waRequest::post('ids');

        $id = waRequest::request('id');
        $is_modal = waRequest::request('is_modal');

        if($is_modal && $id) {
            $model->deleteById($id);
        }
        else {
            if (isset($ids) && $ids) {
                $model->deleteById(explode(',', $ids));
            }
        }
    }
}
