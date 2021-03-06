<?php

class magasinsSetupmagasinSimilarsController extends waController
{

    public $string = array();
    public $conn;
    public $sql = '';
    public $similars = array();
    public $temp_array = array();
    public $sim_array = array();

    public function execute()
    {
        $magasin_id = waRequest::request('magasin_id');

        $rows = $this->get_similars($magasin_id);

        //$values = $this->prepare_for_json();

        $json = json_encode($rows);
        echo $json;
        exit();

    }

    public function get_similars($magasin_id, $search = '') {

        $settngs_model= new magasinsMagasinsettingsModel();
        $settings = $settngs_model->getByField('magasin_id', $magasin_id);

        $this->setup_db_connect();

        $this->create_tmp_table();

        $model = new magasinsSetupmagasinModel();

        $providers = $model->getByField(array('magasin_id' => $magasin_id),true);


        $prov_ids = array();
        for($i=0;$i<count($providers);$i++) {
            $prov_ids[] = $providers[$i]['provider_id'];
        }

        $prov_string = implode(',',$prov_ids);


        for($i=0;$i<count($prov_ids);$i++) {
            $provider_id_1 = $prov_ids[$i];
            for($j=0;$j<count($prov_ids);$j++) {
                if($provider_id_1 != $prov_ids[$j]) {
                    $provider_id_2 = $prov_ids[$j];

                    $this->query_for_similars($provider_id_1, $provider_id_2, $settings);
                }
            }
        }

 //       die;

        //echo $prov_string; die;


        //$this->sql = 'call update_products_table()';

        $this->insert_sql();

        $rows= array();
        $query = "SELECT a.*, b.name as provider_name2, c.name as provider_name1 FROM magasins_similars_values_tmp as a "

            ."  LEFT JOIN magasins_provider as b ON a.provider2 = b.id  "
            ."  LEFT JOIN magasins_provider as c ON a.provider1 = c.id  ";

            if($settings['percent']) {
                $query .= " WHERE a.percents > ".$settings['percent'];
            }

            $query .= " ORDER BY a.id2,a.percents DESC"
            //." LIMIT 0,100"
            ;


        $retrive = mysqli_query($this->conn, $query);

        $rows = array();
        while ($row = mysqli_fetch_assoc($retrive)) {
            $rows[] = $row;
        }


        $id2= $rows[0]['id2'];
        $key = 0;
        foreach($rows as $k=>$v) {
        //for($i=1;$i<count($rows);$i++) {
            if($k>0) {
                if ($rows[$k]['id2'] == $id2) {
                    $rows[$key]['similars'][] = $rows[$k];
                    unset($rows[$k]);
                } else {
                    $id2 = $rows[$k]['id2'];
                    $key = $k;
                }
            }
        }

        $rows = array_values($rows);

//
//        echo "<pre>";
//        print_r($rows);
//        echo "</pre>";
//        die;

        /*
        $query = "SELECT a.id, a.percents, a.id1, a.id2, b.name as name1, c.name as name2, d.name as provider_id_1_name, e.name as provider_id_2_name, b.sku as sku1, c.sku as sku2 "
            ." FROM magasins_similars_ids as a"
            ." LEFT JOIN magasins_products as b ON a.id1 = b.id"
            ." LEFT JOIN magasins_provider as d ON b.provider_id = d.id"

            ." LEFT JOIN magasins_products as c ON a.id2 = c.id"
            ." LEFT JOIN magasins_provider as e ON c.provider_id = e.id"

            .", magasins_products as f, magasins_products as g  "
            ."  WHERE a.id1 = f.id AND a.id2 = g.id "
            ." AND f.provider_id IN (".$prov_string.") AND g.provider_id IN (".$prov_string.")"
        ;

        if($search) {
            $query .= " AND (f.name LIKE '%" . $search . "%' OR g.name LIKE '%" . $search . "%') ";
        }

        $retrive = mysqli_query($this->conn, $query);

        $rows = array();
        while ($row = mysqli_fetch_assoc($retrive)) {
            $rows[] = $row;
        }

        $this->find_similars($rows);
        */

        return $rows;

    }


    public function prepare_for_json() {


        $result_array = array();
        for($i=0;$i<count($this->sim_array);$i++) {
            $query = "SELECT a.id, a.product_id, b.name as provider_name, a.name, a.sku, c.name as category_name, a.price, a.currencyId, a.description,a.url, d.percents,e.id as similars_checked_id, f.id as moderated  \n"
                    ." FROM `magasins_products` as a \n"
                    ." LEFT JOIN `magasins_categories` as c ON c.id = a.categoryId \n"
                    ." LEFT JOIN `magasins_similars_checked` as e ON e.product_id = a.id \n"
                    ." LEFT JOIN `magasins_similars_submitted` as f ON f.product_id = a.id, \n"
                    ." `magasins_provider` as b, `magasins_similars_ids` as d \n"
                    ." WHERE a.id IN (".$this->sim_array[$i].") AND b.id = a.provider_id AND d.id1 IN (".$this->sim_array[$i].") GROUP BY a.id";


            $rows = array();
            $retrive = mysqli_query($this->conn, $query);
            while ($row = mysqli_fetch_assoc($retrive)) {
                $rows[] = $row;
            }

            $result_array[] = $rows;
        }

//
//        echo "<pre>";
//        print_r($result_array); die;

        return $result_array;

    }

    public function get_all_values() {

    //    $query = "SELECT * FROM magasins_similars_ids"
    }


    public function find_ids($id1,$id2, $rows) {

        $this->temp_array[] = $id1;
        $this->temp_array[] = $id2;

        for($i=0;$i<count($rows);$i++) {

            if((in_array($rows[$i]['id1'],$this->temp_array) && !in_array($rows[$i]['id2'],$this->temp_array)) || (!in_array($rows[$i]['id1'],$this->temp_array) && in_array($rows[$i]['id2'],$this->temp_array))) {
                $this->temp_array[] = $rows[$i]['id1'];
                $this->temp_array[] = $rows[$i]['id2'];
                $this->temp_array = array_merge($this->find_ids($rows[$i]['id1'],$rows[$i]['id2'],$rows),$this->temp_array);
                $this->temp_array = array_unique($this->temp_array);
            }
        }

        return $this->temp_array;
    }

    public function find_similars($rows) {

       for($i=0;$i<count($rows);$i++) {
          $array =  $this->find_ids($rows[$i]['id1'],$rows[$i]['id2'],$rows);

          asort($array);

          $this->sim_array[] = implode(',',$array);
          $this->temp_array = array();
       }

       $this->sim_array = array_values(array_unique($this->sim_array));

    }


    public function query_for_similars($provider_id_1, $provider_id_2,$settings) {

       if(!in_array($provider_id_2.'|'.$provider_id_1,$this->string)) {
           $this->string[] = $provider_id_1.'|'.$provider_id_2;

           if($settings['byname']) {
               $this->sql = 'call find_similars(' . $provider_id_1 . ',' . $provider_id_2 . ',' . $settings['rel'] . ')';
               $this->insert_sql();
           }

           if($settings['byarticle']) {
               $this->sql = 'call find_similars_article(' . $provider_id_1 . ',' . $provider_id_2 . ' )';
               $this->insert_sql();
           }

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
            `id2` int(11) NOT NULL,
            `name2` varchar(255) NOT NULL,
            `rel` float NOT NULL,
            `orig_rel` float NOT NULL,
            `percents` float NOT NULL,
            `sim` varchar(255) NOT NULL,
            `provider1` varchar(255) NOT NULL,
            `provider2` varchar(255) NOT NULL,
            `mode` varchar(255) NOT NULL,
            `sku1` varchar(255) NOT NULL,
            `sku2` varchar(255) NOT NULL,
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
