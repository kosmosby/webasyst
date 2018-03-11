<?php

class magasinsProviderAction extends waViewAction
{
    public function execute()
    {

        $search =  waRequest::post('search');

        $model = new magasinsProviderModel();

        $this->setLayout( new magasinsDefaultLayout());

        if($search) {
//            $records = $model->select('*')
//                ->where('name LIKE \'%'.$search.'%\' OR url LIKE \'%'.$search.'%\'')
//
//                ->order('id DESC')
//                ->fetchAll();

            $sql = $model->query("SELECT a.*, (select count(*) from magasins_setupmagasin where provider_id = a.id) as count_magasins FROM magasins_provider as a WHERE (a.name LIKE '%".$search."%' OR a.url LIKE '%".$search."%') ORDER BY a.id DESC");
            $records = $sql->fetchAll();


        }
        else {
//            $records = $model->order('id DESC')->fetchAll();

            $sql = $model->query("SELECT a.*, (select count(*) from magasins_setupmagasin where provider_id = a.id) as count_magasins FROM magasins_provider as a ORDER BY a.id DESC");
            $records = $sql->fetchAll();
        }

//        echo "<pre>";
//        print_r($records); die;

        $this->view->assign('records', $records);
        $this->view->assign('search', $search);
    }
}