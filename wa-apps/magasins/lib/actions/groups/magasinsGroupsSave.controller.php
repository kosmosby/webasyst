<?php

class magasinsGroupsSaveController extends waController
{
    public function execute()
    {
        $model = new magasinsGroupsModel();

        $id = waRequest::request('id');
        $name = waRequest::request('name');
        $is_modal = waRequest::request('is_modal');

        if($id) {
            $result =  $model->updateById($id,array(
                'name' => $name
            ));
        }
        else {
            $result = $model->insert(array(
                'name' => $name
            ));
        }

        if(!$is_modal) {
            $this->redirect(waSystem::getInstance()->getUrl() . '?module=groups');
        }
        else {
            return $result;
        }
    }
}
