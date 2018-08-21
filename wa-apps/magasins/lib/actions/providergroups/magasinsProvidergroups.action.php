<?php

class magasinsProvidergroupsAction extends waViewAction
{

    public function execute()
    {
        $search =  waRequest::post('search');

        $model = new magasinsProvidergroupsModel();
        $this->setLayout( new magasinsDefaultLayout());

        if($search) {
            $sql = $model->query("SELECT * FROM magasins_provider_groups WHERE name LIKE '%".$search."%' ORDER BY name ASC");
            $records = $sql->fetchAll();
        }

        $result = $model->query("SELECT a.*,b.name as provider_name, c.name as group_name FROM magasins_provider_groups as a, magasins_provider as b, magasins_groups as c WHERE b.id = a.provider_id AND c.id = a.group_id");
        $records = $result->fetchAll();

        $data = $this->getArray($records);


        $this->view->assign('data', $data);
        $this->view->assign('records', $records);
        $this->view->assign('search', $search);
    }


    public function getArray($records) {

        $group_model = new magasinsGroupsModel();
        $groups = $group_model->order('name ASC')->fetchAll();

        for($j=0;$j<count($groups);$j++) {
            $groups[$j]['url'] = "?module=providergroups&action=edit&id=";
            //$groups[$j]['delete'] = "?module=groups&action=delete&ids=".$groups[$j]['id'];
        }

        for($i=0;$i<count($groups);$i++) {
            $result = $group_model->query("SELECT b.id, b.name,a.id as provider_groups_id FROM magasins_provider_groups as a, magasins_provider as b WHERE a.provider_id = b.id AND a.group_id =  ".$groups[$i]['id']." ORDER BY priority");
            $records = $result->fetchAll();

            for($j=0;$j<count($records);$j++) {
                $records[$j]['url'] = "?module=providergroups&action=edit&id=".$records[$j]['provider_groups_id'];
                $records[$j]['delete'] = "?module=providergroups&action=delete&ids=".$records[$j]['provider_groups_id'];
            }

            $groups[$i]['childs'] = $records;
        }

//        for($i=0;$i<count($groups);$i++) {
//
//
//        }


//        echo "<pre>";
//        print_r($groups); die;

        return $groups;

    }

}