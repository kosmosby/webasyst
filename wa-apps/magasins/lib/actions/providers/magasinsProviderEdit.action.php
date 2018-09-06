<?php

class magasinsProviderEditAction extends waViewAction
{

    public function execute()
    {
        $id = waRequest::request('id', null, waRequest::TYPE_INT);
        $is_modal = waRequest::request('is_modal');

        $model = new magasinsProviderModel();



        $magasins = array();
        if ($id) { // edit post
            $provider = $model->getById($id);
            $title = 'Редактируем провайдера';

            $result = $model->query("SELECT a.*,b.* FROM magasins_setupmagasin as a, magasins_magasin as b WHERE a.provider_id = ".$id." AND a.magasin_id = b.id");
            $magasins = $result->fetchAll();

        } else { // add magasin
            $provider = array(
                'id'              => '',
                'name'            => '',
                'url'             => '',
                'xml_url'         => ''
            );
            $title = 'Добавляем провайдера';
        }

        if($is_modal) {
            echo json_encode($provider); exit();
        }
        else {
            $this->view->assign('title', $title);
            $this->view->assign('provider', $provider);

            $this->view->assign('magasins', $magasins);

            $this->setLayout(new magasinsDefaultLayout());
            $this->getResponse()->setTitle($title);
        }
    }

}
