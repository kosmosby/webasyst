<?php

class magasinsBackendAction extends waViewAction
{
    public function execute()
    {

//        echo "<pre>";
//        print_r($_REQUEST); die;

        $search =  waRequest::post('search');

        $model = new magasinsMagasinModel();

        $this->setLayout( new magasinsDefaultLayout());

        if($search) {

            $sql = $model->query("SELECT a.*, (select count(*) from magasins_setupmagasin where magasin_id = a.id) as count_providers FROM magasins_magasin as a WHERE (a.name LIKE '%".$search."%' OR a.url LIKE '%".$search."%') ORDER BY a.id DESC");
            $records = $sql->fetchAll();


        }
        else {
            $sql = $model->query("SELECT a.*, (select count(*) from magasins_setupmagasin where magasin_id = a.id) as count_providers FROM magasins_magasin as a ORDER BY a.id DESC");
            $records = $sql->fetchAll();

        }
//        echo "<pre>";
//        print_r($records); die;

        $this->view->assign('records', $records);
        $this->view->assign('search', $search);

    }
}
//EOF