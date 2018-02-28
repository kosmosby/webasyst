<?php

class magasinsProviderSaveController extends waController
{

    public function execute()
    {
        $model = new magasinsProviderModel();

        if (waRequest::method() == 'post') {
            $id = waRequest::post('id');
            $name = waRequest::post('name');
            $url = waRequest::post('url');
            $xml_url = waRequest::post('xml_url');

            if($id) {
                $model->updateById($id,array(
                    'name' => $name,
                    'url' => $url,
                    'xml_url' => $xml_url
                ));
            }
            else {
                $model->insert(array(
                    'name' => $name,
                    'url' => $url,
                    'xml_url' => $xml_url
                ));
            }
        }
        $this->redirect(waSystem::getInstance()->getUrl().'?module=provider');
    }
}
