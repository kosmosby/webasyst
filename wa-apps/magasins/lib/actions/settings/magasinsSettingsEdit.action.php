<?php

class magasinsSettingsEditAction extends waViewAction
{

    public function execute()
    {
        $id = waRequest::get('id', null, waRequest::TYPE_INT);

        $model = new magasinsSettingsModel();

        $fields_select = $model->getAll();

        if ($id) { // edit post
            $settings = $model->getById($id);
            $title = 'Редактируем настройки полей xml';

        } else { // add magasin
            $settings = array(
                'id'              => '',
                'name'            => '',
                'parent_id'         => ''
            );
            $title = 'Добавляем настройки полей xml';
        }

        $this->view->assign('title', $title);
        $this->view->assign('settings', $settings);
        $this->view->assign('fields_select', $fields_select);


        $this->setLayout(new magasinsDefaultLayout());
        $this->getResponse()->setTitle($title);
    }

}
