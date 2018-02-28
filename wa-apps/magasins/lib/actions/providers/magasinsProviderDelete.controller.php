<?php

class magasinsProviderDeleteController extends waController
{

    public function execute()
    {
        $model = new magasinsProviderModel();
        $id = waRequest::get('id');

        if (isset($id) && $id) {
                $model->deleteById($id);
        }
        $this->redirect(waSystem::getInstance()->getUrl());
    }
}
