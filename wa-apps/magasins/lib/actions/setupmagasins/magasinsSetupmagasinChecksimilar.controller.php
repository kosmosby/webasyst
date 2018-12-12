<?php

class magasinsSetupmagasinChecksimilarController extends waController
{

    public function execute()
    {
        $model = new magasinsSetupmagasinModel();
        $product_id = waRequest::request('product_id');
        $checked = waRequest::request('checked');
        $magasin_id = waRequest::request('magasin_id');

        if (isset($product_id) && $product_id) {

            switch ($checked) {
                case 'true':
                    $not_similar = 1;
                break;
                case 'false':
                    $not_similar = 0;
                break;
                default:
                    $not_similar = 0;
                    break;
            }


            if($not_similar) {
                $model->query("DELETE FROM  `magasins_similars_checked` WHERE magasin_id = " . $magasin_id . " AND product_id = " . $product_id);
                $model->query("INSERT INTO `magasins_similars_checked` (`id`, `product_id`, `magasin_id`) VALUES (NULL, '" . $product_id . "', '" . $magasin_id . "')");
            }
            else {
                $model->query("DELETE FROM  `magasins_similars_checked` WHERE magasin_id = " . $magasin_id . " AND product_id = " . $product_id);
            }
//            $model->updateById($id,array(
//                'only_refresh' => $published
//            ));
        }
    }
}
