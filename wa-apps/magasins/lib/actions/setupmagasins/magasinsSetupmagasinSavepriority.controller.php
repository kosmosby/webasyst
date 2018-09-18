<?php

class magasinsSetupmagasinSavepriorityController extends waController
{

    public function execute()
    {
        $model = new magasinsSetupmagasinModel();
        if (waRequest::method() == 'post') {
            $cids = waRequest::request('cid');
            $priorities = waRequest::request('priority');
            for($i=0;$i<count($cids);$i++) {

                $model->updateById($cids[$i], array('priority' => $priorities[$i]));
            }
        }
        exit();
    }
}
