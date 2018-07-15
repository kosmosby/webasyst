<?php

class magasinsSimilarsSaveController extends waController
{

    public function execute()
    {
        $model = new magasinsSimilarsModel();

        if (waRequest::method() == 'post') {
            $id = waRequest::post('id');
            $name = waRequest::post('name');


            if($id) {
                $model->updateById($id,array(
                    'name' => $name
                ));
            }
            else {
                $model->insert(array(
                    'name' => $name
                ));
            }
        }
        $this->redirect(waSystem::getInstance()->getUrl().'?module=similars');
    }
}
