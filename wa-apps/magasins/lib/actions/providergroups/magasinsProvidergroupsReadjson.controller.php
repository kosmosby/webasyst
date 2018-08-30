<?php

class magasinsProvidergroupsReadjsonController extends waController
{
    public function execute()
    {
        $model = new magasinsProvidergroupsModel();
        $result = $model->query("SELECT id, name FROM  magasins_groups");
        $nodes = $result->fetchAll();

        for($i=0;$i<count($nodes);$i++) {
            $result = $model->query("SELECT b.id, b.name FROM  magasins_provider_groups as a, magasins_provider as b WHERE a.group_id = ".$nodes[$i]['id']." AND a.provider_id = b.id ORDER BY a.priority");
            $childs = $result->fetchAll();
            $nodes[$i]['children'] = $childs;
        }
        $json = json_encode($nodes);

        echo $json;
    }
}
