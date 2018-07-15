<?php

class magasinsSimilarsEditAction extends waViewAction
{

    public function execute()
    {
        $id = waRequest::get('id', null, waRequest::TYPE_INT);

        $model = new magasinsSimilarsModel();

        if ($id) { // edit post
            $similar = $model->getById($id);
            $title = 'Редактируем настройку симиляра';

        } else { // add magasin
            $similar = array(
                'id'              => '',
                'name'            => ''
            );
            $title = 'Добавляем настройку симиляра';
        }

        $this->view->assign('title', $title);
        $this->view->assign('similar', $similar);

        $this->setLayout(new magasinsDefaultLayout());
        $this->getResponse()->setTitle($title);
    }

}
