<?php

class magasinsProductAction extends waViewAction
{
    public function execute()
    {


        $search =  waRequest::post('search');
        $filter_provider =  waRequest::request('filter_provider');


        $model = new magasinsProductModel();

        $this->setLayout( new magasinsDefaultLayout());

        $provider_model = new magasinsProviderModel();

        $providers = $provider_model->select('*')
            ->where('published > 0')
            //->where('id NOT IN (SELECT provider_id FROM magasins_setupmagasin WHERE magasin_id = '.$magasin_id.')')
            ->order('name ASC')
            ->fetchAll();


        $sql_string = "SELECT a.*,b.name as category_name, c.name as provider FROM magasins_products as a, magasins_categories as b, magasins_provider as c  ";
        $sql_string .= "WHERE a.categoryId = b.category_id AND c.id = a.provider_id ";
        if($search) {
            $sql_string .= " AND (a.name LIKE '%" . $search . "%' OR a.description LIKE '%" . $search . "%') ";
        }
        if($filter_provider) {
            $sql_string .= " AND c.id = ".$filter_provider." ";
        }
        $sql_string .= " GROUP BY a.id ORDER BY a.id ASC";
        $sql = $model->query($sql_string);
        $records = $sql->fetchAll();

//        if($search) {
////            $records = $model->select('*')
////                ->where('name LIKE \'%'.$search.'%\' OR url LIKE \'%'.$search.'%\'')
////
////                ->order('id DESC')
////                ->fetchAll();
//
//            $sql = $model->query("SELECT a.*,b.name as category_name, c.name as provider FROM magasins_products as a, magasins_categories as b, magasins_provider as c WHERE (a.name LIKE '%".$search."%' OR a.description LIKE '%".$search."%') AND a.categoryId = b.category_id AND c.id = a.provider_id ORDER BY a.id ASC");
//            $records = $sql->fetchAll();
//
//
//        }
//
//        else {
////            $records = $model->order('id DESC')->fetchAll();
//
//            $sql = $model->query("SELECT a.*,b.name as category_name, c.name as provider FROM magasins_products as a, magasins_categories as b, magasins_provider as c where a.categoryId = b.category_id AND c.id = a.provider_id GROUP BY a.id ORDER BY a.id ASC");
//            $records = $sql->fetchAll();
//        }

//        echo "<pre>";
//        print_r($records); die;

        $this->view->assign('filter_provider', $filter_provider);
        $this->view->assign('providers', $providers);
        $this->view->assign('records', $records);
        $this->view->assign('search', $search);
    }
}