<?php

class magasinsProviderSaveController extends waController
{

    public function execute()
    {
        $model = new magasinsProviderModel();
        $provider_groups_model = new magasinsProvidergroupsModel();

//        if (waRequest::method() == 'post') {
            $id = waRequest::request('id');

            $group_id = waRequest::request('group_id');
            $name = waRequest::request('name');
            $url = waRequest::request('url');
            $xml_url = waRequest::request('xml_url');
            $is_modal = waRequest::request('is_modal');

            if($id) {
                $result =  $model->updateById($id,array(
                    'name' => $name,
                    'url' => $url,
                    'xml_url' => $xml_url
                ));
            }
            else {
                $result =  $model->insert(array(
                    'name' => $name,
                    'url' => $url,
                    'xml_url' => $xml_url
                ));
            }
//        }

        if(!$is_modal) {
            $this->redirect(waSystem::getInstance()->getUrl() . '?module=provider');
        }
        else {

            $provider_groups_model->insert(array(
                'provider_id' => $result,
                'group_id' => $group_id
            ));

            return $result;
        }
    }
}
