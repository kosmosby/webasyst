<?php

class magasinsSetupmagasinSavesimilarController extends waController
{

    public function execute()
    {
       $model = new magasinsSetupmagasinModel();

        $similar_product_hidden = waRequest::request('similar_product_hidden');
        $similar_product_checkbox = waRequest::request('similar_product_checkbox');
        $magasin_id = waRequest::request('magasin_id');

//        echo "<pre>";
//        print_r($similar_product_hidden);
//        die;

        if(isset($similar_product_hidden) && count($similar_product_hidden)) {
            $model->query("DELETE FROM  `magasins_similars_submitted` WHERE magasin_id = " . $magasin_id);
            for($i=0;$i<count($similar_product_hidden);$i++) {

                if(in_array($similar_product_hidden[$i],$similar_product_checkbox)) {
                    $checked = 1;
                }
                else {
                    $checked = 0;
                }

                $model->query("INSERT INTO `magasins_similars_submitted` (`id`, `product_id`, `magasin_id`,`checked`) VALUES (NULL, '" . $similar_product_hidden[$i] . "', '" . $magasin_id . "', ".$checked.")");
            }
        }
    }
}
