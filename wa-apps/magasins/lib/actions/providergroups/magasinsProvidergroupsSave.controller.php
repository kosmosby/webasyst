<?php

class magasinsProvidergroupsSaveController extends waController
{

    public function execute()
    {
        $model = new magasinsProvidergroupsModel();

        if (waRequest::method() == 'post') {
            $id = waRequest::post('id');
            $provider_id = waRequest::post('provider_id');
            $group_id = waRequest::post('group_id');
            $priority = waRequest::post('priority');



            if($id) {
                $model->updateById($id,array(
                    'provider_id' => $provider_id,
                    'group_id' => $group_id,
                    'priority' => $priority
                ));
            }
            else {
                $model->insert(array(
                    'provider_id' => $provider_id,
                    'group_id' => $group_id,
                    'priority' => $priority
                ));
            }
        }
        $this->redirect(waSystem::getInstance()->getUrl().'?module=providergroups');
    }
}
