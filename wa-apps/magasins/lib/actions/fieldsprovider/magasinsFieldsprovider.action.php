<?php

class magasinsFieldsproviderAction extends waViewAction
{
    public $records_array = array();

    public function execute()
    {

        $search =  waRequest::post('search');
        $magasin_id = waRequest::request('magasin_id');
        $provider_id = waRequest::request('provider_id');

        $model = new magasinsFieldsModel();

        $model_magasin = new magasinsMagasinModel();
        $model_provider = new magasinsProviderModel();

        $magasin_info = $model_magasin->getById($magasin_id);
        $provider_info = $model_provider->getById($provider_id);

        $this->setLayout( new magasinsDefaultLayout());

        if($search) {
            $sql = $model->query("SELECT id, name, parent_id FROM magasins_fields_provider WHERE magasin_id = ".$magasin_info['id']." and provider_id = ".$provider_info['id']." AND (name LIKE '%".$search."%' ) ORDER BY id DESC");
            $records = $sql->fetchAll();
        }
        else {
            $sql = $model->query("SELECT id, name, parent_id FROM magasins_fields_provider WHERE magasin_id = ".$magasin_info['id']." and provider_id = ".$provider_info['id']." ORDER BY id DESC");
            $records = $sql->fetchAll();
        }

        if(!$search) {
            $this->get_array($records, 0, 0);
            $records = $this->records_array;
        }

        $this->view->assign('magasin_info', $magasin_info);
        $this->view->assign('provider_info', $provider_info);

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