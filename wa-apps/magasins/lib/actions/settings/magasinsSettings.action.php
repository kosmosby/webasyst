<?php

class magasinsSettingsAction extends waViewAction
{
    public $records_array = array();

    public function execute()
    {

        $search =  waRequest::post('search');

        $model = new magasinsSettingsModel();

        $this->setLayout( new magasinsDefaultLayout());

        if($search) {
            $sql = $model->query("SELECT id, name, parent_id FROM magasins_fields_settings WHERE name LIKE '%".$search."%' ORDER BY name DESC");
            $records = $sql->fetchAll();
        }
        else {
            $records = $model->order('name DESC')->fetchAll();
        }

        if(!$search) {
            $this->get_array($records, 0, 0);
            $records = $this->records_array;
        }

        $this->view->assign('records', $records);
        $this->view->assign('search', $search);
    }

    public function get_array($my_array,$parent,$level)
    {
        $level++;
        foreach ($my_array as $k => $v) {
            if ($v['parent_id'] == $parent) {
                $v['level'] = $level;
                $this->records_array[] = $v;
                $this->get_array($my_array,$v['id'],$level);
            }
        }
    }

}