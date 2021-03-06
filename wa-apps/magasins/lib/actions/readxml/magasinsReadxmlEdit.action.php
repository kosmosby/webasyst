<?php

class magasinsReadxmlEditAction extends waViewAction
{

    public function execute()
    {
        $id = waRequest::get('id', null, waRequest::TYPE_INT);

        $magasin_id = waRequest::request('magasin_id');
        $provider_id = waRequest::request('provider_id');

        $model = new magasinsFieldsModel();

        $model_magasin = new magasinsMagasinModel();
        $model_provider = new magasinsProviderModel();

        $magasin_info = $model_magasin->getById($magasin_id);
        $provider_info = $model_provider->getById($provider_id);


        $fields_select = $model->getAll();

        if ($id) { // edit post
            $fields = $model->getById($id);
            $title = 'Редактируем поля поставщика';

        } else { // add magasin
            $fields = array(
                'id'              => '',
                'name'            => '',
                'magasin_id'             => '',
                'parent_id'         => '',
                'is_property'       => ''
            );
            $title = 'Добавляем поля поставщика';
        }

        $this->view->assign('title', $title);
        $this->view->assign('fields', $fields);
        $this->view->assign('fields_select', $fields_select);

        $this->view->assign('magasin_info', $magasin_info);
        $this->view->assign('provider_info', $provider_info);

        $this->setLayout(new magasinsDefaultLayout());
        $this->getResponse()->setTitle($title);
    }

}
