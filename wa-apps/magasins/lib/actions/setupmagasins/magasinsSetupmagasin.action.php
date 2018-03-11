<?php

class magasinsSetupmagasinAction extends waViewAction
{
    public function execute()
    {

        $magasin_id = waRequest::request('magasin_id');

        $search = waRequest::post('search');

        $model = new magasinsSetupmagasinModel();

        $this->setLayout( new magasinsDefaultLayout());

        $magasin_model = new magasinsMagasinModel();

        $magasin = $magasin_model->getById($magasin_id);

        if($search) {
            $sql = $model->query(
                "SELECT a.*, c.name as provider_name, c.url as provider_url "
                     . "FROM magasins_setupmagasin as a, magasins_magasin as b, magasins_provider as c "
                     . "WHERE a.magasin_id = b.id AND a.provider_id = c.id "
                     . " AND a.magasin_id = ".$magasin_id." "
                     . " AND c.name LIKE '%".$search."%'");

            $records = $sql->fetchAll();
        }
        else {
            $sql = $model->query(
                "SELECT a.*, c.name as provider_name, c.url as provider_url "
                . "FROM magasins_setupmagasin as a, magasins_magasin as b, magasins_provider as c "
                . "WHERE a.magasin_id = b.id AND a.provider_id = c.id "
                . " AND a.magasin_id = ".$magasin_id." ");

            $records = $sql->fetchAll();
        }

//        echo "<pre>";
//        print_r($magasin); die;

        $this->view->assign('magasin', $magasin);
        $this->view->assign('magasin_id', $magasin_id);
        $this->view->assign('records', $records);
        $this->view->assign('search', $search);

    }
}