<?php

class magasinsReadxmlAction extends waViewAction
{

    public $records_array = array();

    public function execute()
    {

        $magasin_id = waRequest::request('magasin_id');
        $provider_id = waRequest::request('provider_id');

        $model = new magasinsFieldsModel();

        $model_magasin = new magasinsMagasinModel();
        $model_provider = new magasinsProviderModel();

        $magasin_info = $model_magasin->getById($magasin_id);
        $provider_info = $model_provider->getById($provider_id);

        $this->setLayout( new magasinsDefaultLayout());

        //$xml_url = $provider_info['xml_url'];

        $xml_url = '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/magasins/xml/747b10bb-bd0a-44fc-97a0-fc963af1e527.xml';

        $sql = $model->query("SELECT * FROM magasins_fields_provider WHERE magasin_id = ".$magasin_info['id']." and provider_id = ".$provider_info['id']." ORDER BY id DESC");
        $records = $sql->fetchAll();

        $this->get_array($records,0,0,'');

        if($xml_url) {
            $simplexml = simplexml_load_file($xml_url);

            for($i=0;$i<count($this->records_array);$i++) {

                if($this->records_array[$i]['get_values']) {
                    $values = $simplexml->xpath($this->records_array[$i]['path']);

                    $temp_array = array();
                    foreach($values as $k=>$v) {
                        $temp_array[$k] =  (string) $v;
                    }
                    $this->records_array[$i]['values'] = $temp_array;
                }
            }
        }


        $records_array = array();
        for($i=0;$i<count($this->records_array);$i++) {

            if($this->records_array[$i]['get_values']) {
                $records_array[] = $this->records_array[$i];
            }
        }


//
//        echo "<pre>";
//        print_r($records_array); die;


        $this->view->assign('magasin_info', $magasin_info);
        $this->view->assign('provider_info', $provider_info);

        $this->view->assign('records',$records_array);
    }

    public function get_array($my_array,$parent,$level,$path)
    {
        $level++;
        foreach ($my_array as $k => $v) {
            if ($v['parent_id'] == $parent) {
                $v['level'] = $level;
                $v['path'] = $path . '/' . $v['name'];
                $this->records_array[] = $v;
                $this->get_array($my_array,$v['id'],$level,$v['path']);
            }
        }
    }

}