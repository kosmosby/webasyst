<?php

class magasinsDefaultLayout extends waLayout
{
    public function execute()
    {

        $this->executeAction('sidebar', new magasinsBackendSidebarAction());
    }

}

// EOF