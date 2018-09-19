<?php

class magasinsSetupmagasinSimilarsController extends waController
{

    public $string = array();

    public function execute()
    {
        $magasin_id = waRequest::request('magasin_id');

        $model = new magasinsSetupmagasinModel();

        $providers = $model->getByField(array('magasin_id' => $magasin_id),true);

        $prov_ids = array();
        for($i=0;$i<count($providers);$i++) {
            $prov_ids[] = $providers[$i]['provider_id'];

        }

        for($i=0;$i<count($prov_ids);$i++) {
            $provider_id_1 = $prov_ids[$i];
            for($j=0;$j<count($prov_ids);$j++) {
                if($provider_id_1 != $prov_ids[$j]) {
                    $provider_id_2 = $prov_ids[$j];

                    $this->query_for_similars($provider_id_1, $provider_id_2);
                }
            }
        }


        $result = $model->query("SELECT a.id, a.name, a.sim, b.name as provider_name FROM magasins_products as a, magasins_provider as b WHERE a.sim !='' AND a.provider_id = b.id");
        $rows = $result->fetchAll();

        for($i=0;$i<count($rows); $i++) {
            $result = $model->query("SELECT a.id, a.name, b.name as provider_name FROM magasins_products as a, magasins_provider as b WHERE a.id IN (".$rows[$i]['sim'].") AND a.provider_id = b.id");
            $rows[$i]['similars'] = $result->fetchAll();
        }

        echo "<pre>";
        print_r($rows); die;

    }


    public function query_for_similars($provider_id_1, $provider_id_2) {

       if(!in_array($provider_id_2.'|'.$provider_id_1,$this->string)) {
           $this->string[] = $provider_id_1.'|'.$provider_id_2;

           $model = new magasinsProductModel();

           $result = $model->query(

               ' SELECT a.id as id1 , a.name as name1, a.product_id as product_id1,a.provider_id as provider_id1, b.id as id2, b.name as name2, b.product_id as product_d2, b.provider_id as provider_id2 '
               .' FROM magasins_products AS a, magasins_products AS b '
               .' WHERE  a.name = b.name '
               .' AND a.id != b.id AND a.provider_id != b.provider_id '
               .' AND a.provider_id = '.$provider_id_1.' AND b.provider_id = '.$provider_id_2.' '

           );
           $rows = $result->fetchAll();

           if(count($rows)) {
               $this->update_similar_field($rows);
           }
       }
    }

    public function update_similar_field($rows) {
        $model = new magasinsProductModel();

        for($i=0;$i<count($rows);$i++) {

            $value1 = $model->getById($rows[$i]['id1']);
            $array = explode(',',$value1['sim']);

            $array = array_filter($array, 'strlen');

            $arr1=array();
            $arr2=array();
            if(!in_array($rows[$i]['id2'],$array)) {

                $arr1 = $array;
                $arr1[] = $rows[$i]['id2'];

                $sql_string = implode(',',$arr1);

                $model->updateById($rows[$i]['id1'], array('sim' => $sql_string ));

                $value2 = $model->getById($rows[$i]['id2']);

                $arr2 = $array;
                $arr2[] = $rows[$i]['id1'];
                $sql_string = implode(',',$arr2);

                $model->updateById($rows[$i]['id2'], array('sim' => $sql_string ));
            }
        }
    }

}
