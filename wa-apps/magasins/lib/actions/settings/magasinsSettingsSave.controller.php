<?php

class magasinsSettingsSaveController extends waController
{

    public function execute()
    {
        $model = new magasinsSettingsModel();

        if (waRequest::method() == 'post') {
            $id = waRequest::post('id');
            $name = waRequest::post('name');
            $parent_id = waRequest::request('parent_id');

            if($id) {
                $model->updateById($id,array(
                    'name' => $name,
                    'parent_id' => $parent_id
                ));
            }
            else {
                $model->insert(array(
                    'name' => $name,
                    'parent_id' => $parent_id
                ));
            }
        }
        $this->redirect(waSystem::getInstance()->getUrl().'?module=settings');
    }
}
