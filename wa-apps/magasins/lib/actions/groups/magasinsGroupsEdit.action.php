<?php

class magasinsGroupsEditAction extends waViewAction
{

    public function execute()
    {
        $id = waRequest::request('id', null, waRequest::TYPE_INT);
        $is_modal = waRequest::request('is_modal');

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

        if($is_modal) {
            echo json_encode($group); exit();
        }
        else {
            $this->view->assign('title', $title);
            $this->view->assign('group', $group);

            $this->setLayout(new magasinsDefaultLayout());
            $this->getResponse()->setTitle($title);
        }
    }

}
