<?php

class magasinsBackendSidebarAction extends waViewAction
{
    public function execute()
    {

//        $test = new shopCategories();
//
//        echo "<pre>";
//        print_r($test); die;

        $this->view->assign('categories', new magasinsCategories());

        $request = waRequest::get();
        $action = waRequest::get('action');

        if (!$action) {
            $action = waRequest::get('module');
        }

        $view_all_magasins = waRequest::get('all', null) !== null || empty($request);
        $view_setupmagasin = waRequest::get('module', null) == 'setupmagasin';
        $view_selectfields = waRequest::get('module', null) == 'selectfields';
        $view_all_providers = waRequest::get('module', null) == 'provider';
        $view_matchs = waRequest::get('module', null) == 'matchs';

        $view_settings = waRequest::get('module', null) == 'settings';
        $view_products = waRequest::get('module', null) == 'product';
        $view_categories = waRequest::get('module', null) == 'categorie';
        $view_similars = waRequest::get('module', null) == 'similars';
        $view_groups = waRequest::get('module', null) == 'groups';
        $view_providergroups = waRequest::get('module', null) == 'providergroups';

        $view_archives = waRequest::get('module', null) == 'archive';



        $magasins_model = new magasinsMagasinModel();
        $providers_model = new magasinsProviderModel();

        $magasins_count = $magasins_model->countAll();
        $providers_count = $providers_model->countAll();

        $event_params = array();
        $this->view->assign('backend_sidebar', wa()->event('backend_sidebar', $event_params, array('top_li')));

        $this->view->assign('view_all_magasins', $view_all_magasins);
        $this->view->assign('view_setupmagasin', $view_setupmagasin);
        $this->view->assign('view_selectfields', $view_selectfields);
        $this->view->assign('view_all_providers', $view_all_providers);
        $this->view->assign('view_matchs', $view_matchs);
        $this->view->assign('view_settings', $view_settings);

        $this->view->assign('view_products', $view_products);
        $this->view->assign('view_archives', $view_archives);
        $this->view->assign('view_categories', $view_categories);
        $this->view->assign('view_similars', $view_similars);
        $this->view->assign('view_groups', $view_groups);
        $this->view->assign('view_providergroups', $view_providergroups);

        $this->view->assign('new_magasin', waRequest::get('action') == 'edit' && waRequest::get('id') == '');

        $this->view->assign('magasins_count', $magasins_count);
        $this->view->assign('providers_count', $providers_count);
    }
}

// EOF
