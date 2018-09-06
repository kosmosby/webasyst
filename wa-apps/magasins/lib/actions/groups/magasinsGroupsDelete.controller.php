<?php

class magasinsGroupsDeleteController extends waController
{

    public function execute()
    {
        $model = new magasinsGroupsModel();
        $ids = waRequest::post('ids');

        $id = waRequest::request('id');
        $is_modal = waRequest::request('is_modal');

        if($is_modal && $id) {
            $GroupsmagasinModel = new magasinsGroupsmagasinModel();
            $GroupsmagasinModel->deleteById($id);
        }
        else {
            if (isset($ids) && $ids) {
                $model->deleteById(explode(',', $ids));
            }
        }
    }
}
