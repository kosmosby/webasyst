<?php

class magasinsBackendSidebarAction extends waViewAction
{
    public function execute()
    {
        $event_params = array();
        $this->view->assign('backend_sidebar', wa()->event('backend_sidebar', $event_params, array('top_li')));
    }
}

// EOF
