<?php

class magasinsProvidergroupsDeleteController extends waController
{

    public function execute()
    {
        $model = new magasinsProvidergroupsModel();
        $ids = waRequest::request('ids');


            $model->deleteById($ids);

        $this->redirect(waSystem::getInstance()->getUrl().'?module=providergroups');
    }
}
