<?php

class magasinsSimilarsAction extends waViewAction
{

    public function execute()
    {
        $search =  waRequest::post('search');

        $model = new magasinsSimilarsModel();

        $this->setLayout( new magasinsDefaultLayout());

        if($search) {
            $sql = $model->query("SELECT id, name FROM magasins_similars WHERE name LIKE '%".$search."%' ORDER BY name ASC");
            $records = $sql->fetchAll();
        }
        else {
            $records = $model->order('name ASC')->fetchAll();
        }

        $this->view->assign('records', $records);
        $this->view->assign('search', $search);
    }


}