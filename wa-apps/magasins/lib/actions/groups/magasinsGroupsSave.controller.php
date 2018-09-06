<?php

class magasinsGroupsSaveController extends waController
{
    public function execute()
    {
        $model = new magasinsGroupsModel();

        $id = waRequest::request('id');
        $name = waRequest::request('name');
        $is_modal = waRequest::request('is_modal');
        $magasin_id = waRequest::request('magasin_id');

        $result =$model->query("SELECT id, name FROM  magasins_groups_magasin WHERE magasin_id=".$magasin_id);
        $records = $result->fetchAll();

        if(count($records)) {
            $model = new magasinsGroupsmagasinModel();
            if($id) {
                $result =  $model->updateById($id,array(
                    'name' => $name,
                    'magasin_id'=>$magasin_id
                ));
            }
            else {
                $result = $model->insert(array(
                    'name' => $name,
                    'magasin_id'=>$magasin_id
                ));
            }
        }
        else {
            if($id) {
                $result =  $model->updateById($id,array(
                    'name' => $name
                ));
            }
            else {
                $result = $model->insert(array(
                    'name' => $name
                ));
            }
        }



        if(!$is_modal) {
            $this->redirect(waSystem::getInstance()->getUrl() . '?module=groups');
        }
        else {
            return $result;
        }
    }
}
