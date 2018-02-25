<?php

class magasinsBackendAction extends waViewAction
{
    public function execute()
    {
        $model = new magasinsMagasinModel();

        $this->setLayout( new magasinsDefaultLayout());

        $records = $model->order('name DESC')->fetchAll();

//        echo "<pre>";
//        print_r($records); die;

        $this->view->assign('records', $records);

    }

}
//EOF