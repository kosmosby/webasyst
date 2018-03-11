<?php

class magasinsSetupmagasinEditAction extends waViewAction
{

    public function execute()
    {
        $id = waRequest::get('id', null, waRequest::TYPE_INT);
        $magasin_id = waRequest::get('magasin_id', null, waRequest::TYPE_INT);

        $provider_model = new magasinsProviderModel();

        $providers = $provider_model->select('*')
            ->where('published > 0')
            ->where('id NOT IN (SELECT provider_id FROM magasins_setupmagasin WHERE magasin_id = '.$magasin_id.')')
            ->order('name ASC')
            ->fetchAll();

        $model = new magasinsSetupmagasinModel();

        if ($id) { // edit post
            $setupmagasin = $model->getById($id);
            $title = 'Настраиваем провайдера для магазина';

        } else { // add magasin
            $setupmagasin = array(
                'id'              => '',
                'magasin_id'            => '',
                'provider_id'             => ''
            );
            $title = 'Добавляем провайдера для магазина';
        }

        $this->view->assign('title', $title);
        $this->view->assign('setupmagasin', $setupmagasin);

        $this->view->assign('magasin_id', $magasin_id);
        $this->view->assign('providers', $providers);


        $this->setLayout(new magasinsDefaultLayout());
        $this->getResponse()->setTitle($title);
    }

}
