<?php

class magasinsProductAction extends waViewAction
{
    public function execute()
    {


        $search =  waRequest::post('search');

        $model = new magasinsProductModel();

        $this->setLayout( new magasinsDefaultLayout());

        if($search) {
//            $records = $model->select('*')
//                ->where('name LIKE \'%'.$search.'%\' OR url LIKE \'%'.$search.'%\'')
//
//                ->order('id DESC')
//                ->fetchAll();

            $sql = $model->query("SELECT a.*,b.name as category_name FROM magasins_products as a, magasins_categories as b WHERE (a.name LIKE '%".$search."%' OR a.description LIKE '%".$search."%') AND a.categoryId = b.category_id ORDER BY a.id ASC");
            $records = $sql->fetchAll();


        }
        else {
//            $records = $model->order('id DESC')->fetchAll();

            $sql = $model->query("SELECT a.*,b.name as category_name FROM magasins_products as a, magasins_categories as b where a.categoryId = b.category_id GROUP BY a.id ORDER BY a.id ASC");
            $records = $sql->fetchAll();
        }

//        echo "<pre>";
//        print_r($records); die;

        $this->view->assign('records', $records);
        $this->view->assign('search', $search);
    }
}