<?php

class magasinsProvidergroupsReadjsonController extends waController
{
    public function execute()
    {
        $Providergroupsmagasin = new magasinsProvidergroupsmagasinModel();
        $result = $Providergroupsmagasin->query("SELECT id, name FROM  magasins_groups_magasin");
        $nodes_magasin = $result->fetchAll();

        if(count($nodes_magasin)) {
           $db_groups = 'magasins_groups_magasin';
           $db_provider_groups = 'magasins_provider_groups_magasin';
        }
        else {
            $db_groups = 'magasins_groups';
            $db_provider_groups = 'magasins_provider_groups';
        }

        $model = new magasinsProvidergroupsModel();
        $result = $model->query("SELECT id, name FROM  ".$db_groups." ORDER BY id");
        $nodes = $result->fetchAll();

        for($i=0;$i<count($nodes);$i++) {
            $result = $model->query("SELECT b.id, b.name FROM  ".$db_provider_groups." as a, magasins_provider as b WHERE a.group_id = ".$nodes[$i]['id']." AND a.provider_id = b.id ORDER BY a.id");
            $childs = $result->fetchAll();
            $nodes[$i]['children'] = $childs;
        }
        $json = json_encode($nodes);

        echo $json;

    }
}
