<?php

class magasinsSetupmagasinSimilarsController extends waController
{

    public $string = array();
    public $conn;
    public $sql = '';

    public function execute()
    {
        $magasin_id = waRequest::request('magasin_id');

        $this->setup_db_connect();
        $this->create_tmp_table();



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


//        $result = $model->query("SELECT a.id, a.name, a.sim, b.name as provider_name FROM magasins_products as a, magasins_provider as b WHERE a.sim !='' AND a.provider_id = b.id");
//        $rows = $result->fetchAll();
//
//        for($i=0;$i<count($rows); $i++) {
//            $result = $model->query("SELECT a.id, a.name, b.name as provider_name FROM magasins_products as a, magasins_provider as b WHERE a.id IN (".$rows[$i]['sim'].") AND a.provider_id = b.id");
//            $rows[$i]['similars'] = $result->fetchAll();
//        }


        $query = "SELECT a.*,b.name as provider_id_1_name,c.name as provider_id_2_name 
                  FROM magasins_similars_values_tmp as a
                  LEFT JOIN `magasins_provider` as b ON a.provider1 = b.id
                  LEFT JOIN `magasins_provider` as c ON a.provider2 = c.id
                  ";

        $retrive = mysqli_query($this->conn, $query);

        while ($row = mysqli_fetch_assoc($retrive)) {
            $rows[] = $row;
        }

//        echo "<pre>";
//        print_r($rows); die;


        $json = json_encode($rows);
        echo $json;
        exit();

    }


    public function query_for_similars($provider_id_1, $provider_id_2) {

       if(!in_array($provider_id_2.'|'.$provider_id_1,$this->string)) {
           $this->string[] = $provider_id_1.'|'.$provider_id_2;

           //$model = new magasinsProductModel();

//           $result = $model->query(
//
//               ' SELECT a.id as id1 , a.name as name1, a.product_id as product_id1,a.provider_id as provider_id1, b.id as id2, b.name as name2, b.product_id as product_d2, b.provider_id as provider_id2 '
//               .' FROM magasins_products AS a, magasins_products AS b '
//               .' WHERE  a.name = b.name '
//               .' AND a.id != b.id AND a.provider_id != b.provider_id '
//               .' AND a.provider_id = '.$provider_id_1.' AND b.provider_id = '.$provider_id_2.' '
//
//           );

           $this->sql = 'call find_similars('.$provider_id_1.','.$provider_id_2.',20)';


           $this->insert_sql();
           //echo $this->sql; die;

//           if(count($rows)) {
               //$this->update_similar_field($rows);
//           }
       }
    }

    public function setup_db_connect() {

        $config = wa()->getConfig()->getDatabase();
        $this->conn=mysqli_connect($config['default']['host'],$config['default']['user'],$config['default']['password'],$config['default']['database']);
        $this->conn->set_charset("utf8");

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

    public function create_tmp_table() {
          $this->sql = "CREATE TEMPORARY TABLE `magasins_similars_values_tmp` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `id1` int(11) NOT NULL,
            `name1` varchar(255) NOT NULL,
            `provider1` varchar(255) NOT NULL,
            `id2` int(11) NOT NULL,
            `name2` varchar(255) NOT NULL,
            `provider2` varchar(255) NOT NULL,
            `rel` float NOT NULL,
            `sim` varchar(255) NOT NULL,
            PRIMARY KEY (`id`) 
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
          $this->insert_sql();
    }

    public function insert_sql() {
        if($this->sql) {
            if (mysqli_multi_query($this->conn, $this->sql)) {
                //echo "New records created successfully<hr />";
            } else {
                echo "<hr>Error: " . $this->sql . "<hr>" . mysqli_error($this->conn);
            }
            $this->sql = '';
            $this->count_sql_strings = 0;
            while ($this->conn->next_result()) {
                ;
            } // flush multi_queries
        }
    }

}
