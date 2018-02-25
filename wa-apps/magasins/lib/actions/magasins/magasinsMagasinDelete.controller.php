<?php

class magasinsMagasinDeleteController extends waController
{

    public function execute()
    {
        $model = new magasinsMagasinModel();
        $id = waRequest::get('id');

        if (isset($id) && $id) {
                $model->deleteById($id);
        }
        $this->redirect(waSystem::getInstance()->getUrl());
    }
}
