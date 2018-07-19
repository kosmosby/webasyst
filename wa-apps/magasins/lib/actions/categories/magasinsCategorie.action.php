<?php

class magasinsCategorieAction extends waViewAction
{
    public function execute()
    {


        $search =  waRequest::post('search');
        $page =  waRequest::request('page',1);

        $model = new magasinsCategorieModel();

        $this->setLayout( new magasinsDefaultLayout());

        $offset = $page*10-11;
        if($offset < 0) $offset=0;

        $sql_header_count = " SELECT count(*) as total_records";

        $sql_header = " SELECT a.* ";

        $sql_body = " FROM magasins_categories as a";

        if($search) {
            $sql_body .= " WHERE (a.name LIKE '%".$search."%')";
        }

        $sql_body .= " ORDER BY a.id ASC";
        $sql_footer = " LIMIT 10 OFFSET ".$offset;

        $sql_string = $sql_header.$sql_body.$sql_footer;
        $sql = $model->query($sql_string);
        $records = $sql->fetchAll();

        $sql_string_count = $sql_header_count.$sql_body;
        $sql = $model->query($sql_string_count);
        $row  = $sql->fetch();


        $this->view->assign('records', $records);
        $this->view->assign('search', $search);

        $this->view->assign('total', ceil($row['total_records']/10));
        $this->view->assign('page', $page);
    }
}