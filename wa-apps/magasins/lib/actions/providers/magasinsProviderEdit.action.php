<?php

class magasinsProviderEditAction extends waViewAction
{

    public function execute()
    {

        $id = waRequest::get('id', null, waRequest::TYPE_INT);
        $model = new magasinsProviderModel();

        $magasins = array();
        if ($id) { // edit post
            $provider = $model->getById($id);
            $title = 'Редактируем провайдера';

            $result = $model->query("SELECT a.*,b.* FROM magasins_setupmagasin as a, magasins_magasin as b WHERE a.provider_id = ".$id." AND a.magasin_id = b.id");
            $magasins = $result->fetchAll();

//            echo "<pre>";
//            print_r($magasins); die;


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

        $this->view->assign('magasins', $magasins);

        $this->setLayout(new magasinsDefaultLayout());
        $this->getResponse()->setTitle($title);
    }

}
