<?php

class magasinsMagasinPublishController extends waController
{

    public function execute()
    {
        $model = new magasinsMagasinModel();
        $id = waRequest::post('id');
        $published = waRequest::post('published');

        //echo $publish; die;
        if (isset($id) && $id) {

            switch ($published) {
                case 'true':
                    $published = 1;
                break;
                case 'false':
                    $published = 0;
                break;
                default:
                    $published = 0;
                    break;
            }


            $model->updateById($id,array(
                'published' => $published
            ));
        }
    }
}