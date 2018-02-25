<?php

class magasinsMagasinEditAction extends waViewAction
{

    public function execute()
    {
        $id = waRequest::get('id', null, waRequest::TYPE_INT);

        $model = new magasinsMagasinModel();

        if ($id) { // edit post
            $magasin = $model->getById($id);
            $title = 'Редактируем магазин';

        } else { // add magasin
            $magasin = array(
                'id'              => '',
                'name'            => '',
                'url'             => '',
            );
            $title = 'Добавляем магазин';
        }

        $this->view->assign('title', $title);
        $this->view->assign('magasin', $magasin);

        $this->setLayout(new magasinsDefaultLayout());
        $this->getResponse()->setTitle($title);
    }

}
