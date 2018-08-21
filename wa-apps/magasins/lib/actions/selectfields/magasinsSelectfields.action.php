<?php

class magasinsSelectfieldsAction extends waViewAction
{
    public $records_array = array();

    public function execute()
    {

        $provider_id = waRequest::request('provider_id');
        $magasin_id = waRequest::request('magasin_id');

        $model = new magasinsMatchsModel();

        $model_magasin = new magasinsMagasinModel();
        $model_provider = new magasinsProviderModel();

        $provider_info = $model_provider->getById($provider_id);
        $magasin_info = $model_magasin->getById($magasin_id);

        $this->setLayout( new magasinsDefaultLayout());

        $sql = $model->query("SELECT * FROM magasins_fields_provider WHERE provider_id = ".$provider_info['id']." ORDER BY id DESC");
        $records = $sql->fetchAll();


        $sql = $model->query('SELECT CONCAT(TABLE_NAME ,".",COLUMN_NAME ) as fields_categories'
            .' FROM INFORMATION_SCHEMA.COLUMNS'
            .' WHERE TABLE_NAME in (\'magasins_categories\') AND COLUMN_NAME NOT IN (\'id\',\'provider_id\',\'update_date\',\'hash\')'
        );
        $categories_select = $sql->fetchAll();


        $sql = $model->query('SELECT CONCAT(TABLE_NAME ,".",COLUMN_NAME ) as fields_products'
            .' FROM INFORMATION_SCHEMA.COLUMNS'
            .' WHERE TABLE_NAME in (\'magasins_products\') AND COLUMN_NAME NOT IN (\'id\',\'provider_id\',\'update_date\',\'hash\')'
        );
        $products_select = $sql->fetchAll();

//        echo "<pre>";
//        print_r($provider_info); die;
//        echo "</pre>";

        $this->view->assign('magasin_id', $magasin_id);
        $this->view->assign('provider_info', $provider_info);
        $this->view->assign('magasin_info', $magasin_info);
        $this->view->assign('provider_id', $provider_id);

        $this->view->assign('records', $records);

        $this->view->assign('categories_select', $categories_select);
        $this->view->assign('products_select', $products_select);
    }


}