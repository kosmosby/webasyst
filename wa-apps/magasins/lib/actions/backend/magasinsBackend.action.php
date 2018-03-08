<?php

class magasinsBackendAction extends waViewAction
{
    public function execute()
    {

//        echo "<pre>";
//        print_r($_REQUEST); die;

        $search =  waRequest::post('search');

        $model = new magasinsMagasinModel();

        $this->setLayout( new magasinsDefaultLayout());

        if($search) {
            $records = $model->select('*')
                ->where('name LIKE \'%'.$search.'%\' OR url LIKE \'%'.$search.'%\'')

                ->order('id DESC')
                ->fetchAll();
        }
        else {
            $records = $model->order('id DESC')->fetchAll();
        }
//        echo "<pre>";
//        print_r($records); die;

        $this->view->assign('records', $records);
        $this->view->assign('search', $search);


    }

}
//EOF