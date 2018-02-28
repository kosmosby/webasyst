<?php

class magasinsBackendSidebarAction extends waViewAction
{
    public function execute()
    {

        $request = waRequest::get();
        $action = waRequest::get('action');

        if (!$action) {
            $action = waRequest::get('module');
        }

        $view_all_magasins = waRequest::get('all', null) !== null || empty($request);
        $view_all_providers = waRequest::get('module', null) == 'provider';


        $magasins_model = new magasinsMagasinModel();
        $providers_model = new magasinsProviderModel();

        $magasins_count = $magasins_model->countAll();
        $providers_count = $providers_model->countAll();

        $event_params = array();
        $this->view->assign('backend_sidebar', wa()->event('backend_sidebar', $event_params, array('top_li')));

        $this->view->assign('view_all_magasins', $view_all_magasins);
        $this->view->assign('view_all_providers', $view_all_providers);

        $this->view->assign('new_magasin', waRequest::get('action') == 'edit' && waRequest::get('id') == '');

        $this->view->assign('magasins_count', $magasins_count);
        $this->view->assign('providers_count', $providers_count);
    }
}

// EOF
