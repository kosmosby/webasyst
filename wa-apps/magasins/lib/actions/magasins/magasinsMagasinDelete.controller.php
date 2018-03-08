<?php

class magasinsMagasinDeleteController extends waController
{

    public function execute()
    {
        $model = new magasinsMagasinModel();
        $ids = waRequest::post('ids');

        if (isset($ids) && $ids) {
                $model->deleteById(explode(',',$ids));
        }
        //$this->redirect(waSystem::getInstance()->getUrl());
    }
}
