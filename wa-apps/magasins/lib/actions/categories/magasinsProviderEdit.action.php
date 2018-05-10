<?php

class magasinsProviderEditAction extends waViewAction
{

    public function execute()
    {
        $id = waRequest::get('id', null, waRequest::TYPE_INT);

        $model = new magasinsProviderModel();

        if ($id) { // edit post
            $provider = $model->getById($id);
            $title = 'Редактируем провайдера';

        } else { // add magasin
            $provider = array(
                'id'              => '',
                'name'            => '',
                'url'             => '',
                'xml_url'         => ''
            );
            $title = 'Добавляем провайдера';
        }

        $this->view->assign('title', $title);
        $this->view->assign('provider', $provider);

        $this->setLayout(new magasinsDefaultLayout());
        $this->getResponse()->setTitle($title);
    }

}
