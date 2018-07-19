<?php

class magasinsMatchsXmlcontentController extends waController
{

    public function execute()
    {
        $provider_id = waRequest::request('provider_id');

        $model = new magasinsProviderModel();

        $row = $model->getById($provider_id);

        $content = file_get_contents(trim($row['xml_url']),FALSE, NULL, 0, 60000);

        //$array = array();
        //$array['content'] = htmlspecialchars($content, ENT_COMPAT,'ISO-8859-1', true);
        $array['content'] = $content;

//        $json = array();
//        $json = json_encode($array);


        echo $array['content'];
    }

}
