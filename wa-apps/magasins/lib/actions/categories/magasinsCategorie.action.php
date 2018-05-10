<?php

class magasinsCategorieAction extends waViewAction
{
    public function execute()
    {


        $search =  waRequest::post('search');

        $model = new magasinsCategorieModel();

        $this->setLayout( new magasinsDefaultLayout());

        if($search) {
//            $records = $model->select('*')
//                ->where('name LIKE \'%'.$search.'%\' OR url LIKE \'%'.$search.'%\'')
//
//                ->order('id DESC')
//                ->fetchAll();

            $sql = $model->query("SELECT a.* FROM  magasins_categories as a WHERE (a.name LIKE '%".$search."%') ORDER BY a.id ASC");
            $records = $sql->fetchAll();


        }
        else {
//            $records = $model->order('id DESC')->fetchAll();

            $sql = $model->query("SELECT a.* FROM  magasins_categories as a  ORDER BY a.id ASC");
            $records = $sql->fetchAll();
        }

//        echo "<pre>";
//        print_r($records); die;

        $this->view->assign('records', $records);
        $this->view->assign('search', $search);
    }
}