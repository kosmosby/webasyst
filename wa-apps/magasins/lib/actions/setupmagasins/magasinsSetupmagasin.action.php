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
                     . " AND c.name LIKE '%".$search."%' ORDER BY priority");

            $records = $sql->fetchAll();
        }
        else {
            $sql = $model->query(
                "SELECT a.*, c.name as provider_name, c.url as provider_url "
                . "FROM magasins_setupmagasin as a, magasins_magasin as b, magasins_provider as c "
                . "WHERE a.magasin_id = b.id AND a.provider_id = c.id "
                . " AND a.magasin_id = ".$magasin_id." ORDER BY priority");

            $records = $sql->fetchAll();
        }

        $model = new magasinsProvidergroupsModel();
        $result = $model->query("SELECT a.*,b.name as provider_name, c.name as group_name FROM magasins_provider_groups as a, magasins_provider as b, magasins_groups as c WHERE b.id = a.provider_id AND c.id = a.group_id");
        $rows = $result->fetchAll();


        $class = new magasinsProvidergroupsAction();
        $select = $class->getArray($rows);

        $saved_ids = array();
        for($i=0;$i<count($records);$i++) {
            array_push($saved_ids,$records[$i]['provider_id']);
        }

        for($i=0;$i<count($select);$i++) {
            for($j=0;$j<count($select[$i]['childs']);$j++) {

                if(in_array($select[$i]['childs'][$j]['id'],$saved_ids)) {
                    $select[$i]['childs'][$j]['selected'] = 1;
                }
            }
        }

//        echo "<pre>";
//        print_r($select); die;

//        echo "<pre>";
//        print_r(array_unique($select)); die;


        $this->view->assign('select', $select);
        $this->view->assign('magasin', $magasin);
        $this->view->assign('magasin_id', $magasin_id);
        $this->view->assign('records', $records);
        $this->view->assign('search', $search);

    }
}