<?php

class magasinsProvidergroupsEditAction extends waViewAction
{

    public function execute()
    {
        $id = waRequest::get('id', null, waRequest::TYPE_INT);


        $model = new magasinsProvidergroupsModel();

        $provider_model = new magasinsProviderModel();
        $providers_select = $provider_model->getAll();

        $group_model = new magasinsGroupsModel();
        $groups_select = $group_model->getAll();

        if ($id) { // edit post
            $providergroups = $model->getById($id);
            $title = 'Редактируем провайдеров в группе';

        } else { // add magasin
            $providergroups = array(
                'id'              => '',
                'provider_id'            => '',
                'group_id'            => '',
                'priority'              => ''
            );
            $title = 'Добавляем провайдеров в группу';
        }

        $this->view->assign('title', $title);
        $this->view->assign('provider_groups', $providergroups);
        $this->view->assign('providers_select', $providers_select);
        $this->view->assign('groups_select', $groups_select);

        $this->setLayout(new magasinsDefaultLayout());
        $this->getResponse()->setTitle($title);
    }

}
