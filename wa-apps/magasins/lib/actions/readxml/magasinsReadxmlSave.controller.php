<?php

class magasinsReadxmlSaveController extends waController
{

    public function execute()
    {
        $model = new magasinsFieldsModel();

        if (waRequest::method() == 'post') {
            $id = waRequest::post('id');
            $name = waRequest::post('name');
            $magasin_id = waRequest::post('magasin_id');
            $provider_id = waRequest::post('provider_id');
            $parent_id = waRequest::request('parent_id');
            $is_property = waRequest::request('is_property');

            if($id) {
                $model->updateById($id,array(
                    'name' => $name,
                    'magasin_id' => $magasin_id,
                    'provider_id' => $provider_id,
                    'parent_id' => $parent_id,
                    'is_property' => $is_property
                ));
            }
            else {
                $model->insert(array(
                    'name' => $name,
                    'magasin_id' => $magasin_id,
                    'provider_id' => $provider_id,
                    'parent_id' => $parent_id,
                    'is_property' => $is_property
                ));
            }
        }
        $this->redirect(waSystem::getInstance()->getUrl().'?module=fields&magasin_id='.$magasin_id.'&provider_id='.$provider_id);
    }
}
