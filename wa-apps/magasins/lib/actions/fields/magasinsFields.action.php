<?php

class magasinsFieldsAction extends waViewAction
{
    public function execute()
    {

        $search =  waRequest::post('search');
        $magasin_id = waRequest::request('magasin_id');
        $provider_id = waRequest::request('provider_id');

        $model = new magasinsFieldsModel();

        $model_magasin = new magasinsMagasinModel();
        $model_provider = new magasinsProviderModel();


        $magasin_info = $model_magasin->getById($magasin_id);
        $provider_info = $model_provider->getById($provider_id);



        $this->setLayout( new magasinsDefaultLayout());

        if($search) {
//            $records = $model->select('*')
//                ->where('name LIKE \'%'.$search.'%\' OR url LIKE \'%'.$search.'%\'')
//
//                ->order('id DESC')
//                ->fetchAll();

            $sql = $model->query("SELECT id, name FROM magasins_fields WHERE magasin_id = ".$magasin_info['id']." and provider_id = ".$provider_info['id']." AND (name LIKE '%".$search."%' ) ORDER BY id DESC");
            $records = $sql->fetchAll();


        }
        else {
//            $records = $model->order('id DESC')->fetchAll();

            $sql = $model->query("SELECT id, name FROM magasins_fields WHERE magasin_id = ".$magasin_info['id']." and provider_id = ".$provider_info['id']." ORDER BY id DESC");
            $records = $sql->fetchAll();
        }

//        echo "<pre>";
//        print_r($records); die;

        $this->view->assign('magasin_info', $magasin_info);
        $this->view->assign('provider_info', $provider_info);

        $this->view->assign('records', $records);
        $this->view->assign('search', $search);
    }
}