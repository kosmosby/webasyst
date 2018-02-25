<?php

class magasinsMagasinSaveController extends waController
{

    public function execute()
    {
        $model = new magasinsMagasinModel();

        if (waRequest::method() == 'post') {
            $id = waRequest::post('id');
            $name = waRequest::post('name');
            $url = waRequest::post('url');

            if($id) {
                $model->updateById($id,array(
                    'name' => $name,
                    'url' => $url
                ));
            }
            else {
                $model->insert(array(
                    'name' => $name,
                    'url' => $url
                ));
            }
        }
        $this->redirect(waSystem::getInstance()->getUrl());
    }
}
