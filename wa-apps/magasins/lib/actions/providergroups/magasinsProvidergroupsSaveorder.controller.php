<?php

class magasinsProvidergroupsSaveorderController extends waController
{
    public function execute()
    {

        $ProvidergroupsmagasinModel = new magasinsProvidergroupsmagasinModel();
        $GroupsmagasinModel = new magasinsGroupsmagasinModel();

        $tree = waRequest::request('tree');
        $magasin_id = waRequest::request('magasin_id');

        $GroupsmagasinModel->query("DELETE FROM `magasins_groups_magasin` WHERE magasin_id = ".$magasin_id);
        $GroupsmagasinModel->query("DELETE FROM `magasins_provider_groups_magasin` WHERE magasin_id = ".$magasin_id);

        $array = json_decode($tree);

//        echo "<pre>";
//        print_r($array); die;

        for($i=0;$i<count($array);$i++) {
            $inserted_id = $GroupsmagasinModel->insert(array(
                'name' => $array[$i]->name,
                'magasin_id' => $magasin_id,
                'ordering' => $i+1
            ));

            if(isset($array[$i]->children) && count($array[$i]->children)) {
                for($j=0;$j<count($array[$i]->children);$j++) {
                    $ProvidergroupsmagasinModel->insert(array(
                        'group_id' => $inserted_id,
                        'provider_id' => $array[$i]->children[$j]->id,
                        'magasin_id' => $magasin_id,
                        'ordering' => $j+1
                    ));
                }
            }
        }
    }
}
