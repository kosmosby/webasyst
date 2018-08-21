<?php

class magasinsGroupsEditAction extends waViewAction
{

    public function execute()
    {
        $id = waRequest::get('id', null, waRequest::TYPE_INT);

        $model = new magasinsGroupsModel();

        if ($id) { // edit post
            $group = $model->getById($id);
            $title = 'Редактируем группу поставщиков';

        } else { // add magasin
            $group = array(
                'id'              => '',
                'name'            => ''
            );
            $title = 'Добавляем группу поставщиков';
        }

        $this->view->assign('title', $title);
        $this->view->assign('group', $group);

        $this->setLayout(new magasinsDefaultLayout());
        $this->getResponse()->setTitle($title);
    }

}
