<?php

class magasinsArchiveAction extends waViewAction
{
    public function execute()
    {

        $search =  waRequest::post('search');
        $page =  waRequest::request('page',1);

        $model = new magasinsProductModel();

        $this->setLayout( new magasinsDefaultLayout());


        $magasin_model = new magasinsMagasinModel();

        $magasins = $magasin_model->select('*')
            ->where('published > 0')
            //->where('id NOT IN (SELECT provider_id FROM magasins_setupmagasin WHERE magasin_id = '.$magasin_id.')')
            ->order('name ASC')
            ->fetchAll();


        if(isset($magasins) && count($magasins)) {
            $default_magasin_id =$magasins[0]['id'];
        }

        $filter_magasin =  waRequest::request('filter_magasin',$default_magasin_id);

        $offset = $page*10-11;
        if($offset < 0) $offset=0;

        //get similars
        $object = new magasinsSetupmagasinSimilarsController();

        $object->get_similars($filter_magasin,$search);

        /*
        $model_setMagasin = new magasinsSetupmagasinModel();
        $providers = $model_setMagasin->getByField(array('magasin_id' => $filter_magasin),true);

        $prov_ids = array();
        for($i=0;$i<count($providers);$i++) {
            $prov_ids[] = $providers[$i]['provider_id'];
        }
        */

        $records = $object->prepare_for_json();

        $row['total_records'] = count($records);
        $records = array_slice($records,$offset,10);

//        echo "<pre>";
//        print_r($records); die;


/*
        $sql_header_count = "SELECT count(*) as total_records";

        $sql_header = " SELECT a.*,b.name as category_name, c.name as provider";
        $sql_body = " FROM magasins_products as a, magasins_categories as b, magasins_provider as c  ";
        $sql_body .= " WHERE a.categoryId = b.category_id AND c.id = a.provider_id ";
        if($search) {
            $sql_body .= " AND (a.name LIKE '%" . $search . "%' OR a.description LIKE '%" . $search . "%') ";
        }
        if($filter_magasin) {
            $sql_body .= " AND c.id = ".$filter_magasin." ";
        }

        $sql_body .= " ORDER BY a.id ASC";

        $sql_footer = " LIMIT 10 OFFSET ".$offset;

        $sql_string = $sql_header.$sql_body.$sql_footer;
        $sql = $model->query($sql_string);
        $records = $sql->fetchAll();

        $sql_string_count = $sql_header_count.$sql_body;
        $sql = $model->query($sql_string_count);
        $row  = $sql->fetch();
*/



        $this->view->assign('filter_magasin', $filter_magasin);
        $this->view->assign('magasins', $magasins);
        $this->view->assign('records', $records);
        $this->view->assign('search', $search);

        $this->view->assign('total', ceil($row['total_records']/10));
        $this->view->assign('page', $page);
    }
}