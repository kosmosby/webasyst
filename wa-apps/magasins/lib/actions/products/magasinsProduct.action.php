<?php

class magasinsProductAction extends waViewAction
{
    public function execute()
    {


        $search =  waRequest::post('search');
        $page =  waRequest::request('page',1);

        $filter_provider =  waRequest::request('filter_provider');


        $model = new magasinsProductModel();

        $this->setLayout( new magasinsDefaultLayout());

        $provider_model = new magasinsProviderModel();

        $providers = $provider_model->select('*')
            ->where('published > 0')
            //->where('id NOT IN (SELECT provider_id FROM magasins_setupmagasin WHERE magasin_id = '.$magasin_id.')')
            ->order('name ASC')
            ->fetchAll();


        $offset = $page*10-11;
        if($offset < 0) $offset=0;

        $sql_header_count = "SELECT count(*) as total_records";

        $sql_header = " SELECT a.*,b.name as category_name, c.name as provider";
        $sql_body = " FROM magasins_products as a, magasins_categories as b, magasins_provider as c  ";
        $sql_body .= " WHERE a.categoryId = b.category_id AND c.id = a.provider_id ";
        if($search) {
            $sql_body .= " AND (a.name LIKE '%" . $search . "%' OR a.description LIKE '%" . $search . "%') ";
        }
        if($filter_provider) {
            $sql_body .= " AND c.id = ".$filter_provider." ";
        }

        $sql_body .= " ORDER BY a.id ASC";

        $sql_footer = " LIMIT 10 OFFSET ".$offset;

        $sql_string = $sql_header.$sql_body.$sql_footer;
        $sql = $model->query($sql_string);
        $records = $sql->fetchAll();

        $sql_string_count = $sql_header_count.$sql_body;
        $sql = $model->query($sql_string_count);
        $row  = $sql->fetch();

        //echo $sql_string_count; die;

//        echo "<pre>";
//        print_r($count); die;
        //echo $count; die;




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

        $this->view->assign('total', ceil($row['total_records']/10));
        $this->view->assign('page', $page);
    }
}