<?php

class magasinsMatchsSaveController extends waController
{

    public $sql = '';
    public $conn;



    public function execute()
    {

        $this->db_connection();

        $magasin_id = waRequest::post('magasin_id');
        $provider_id = waRequest::post('provider_id');


        if(isset($_POST) && count($_POST) && $magasin_id && $provider_id) {

            $this->sql .= "DELETE FROM `magasins_fields_provider` WHERE magasin_id = ".$magasin_id." AND provider_id = ".$provider_id.";";
            $this->insert_sql();

            foreach($_POST as $k=>$v) {

                if(isset($v)) {

                    preg_match("/^(magasins_.*s)_(.*)$/", $k, $reg1);
                    preg_match("/^.*\/(@?)(.*)$/", $v, $reg2);

//                echo "<pre>";
//                print_r($reg2);

                    if( (isset($reg2[2]) || isset($reg2[1])) && isset($reg1[1]) && isset($reg1[2])) {
                        $this->sql .= "INSERT INTO `magasins_fields_provider` SET ";
                        $name = (isset($reg2[2])) ? $reg2[2] : $reg2[1];
                        $this->sql .= "`name` = '" . $name . "' ,\n";
                        $this->sql .= "`magasin_id` = " . $magasin_id . " ,\n";
                        $this->sql .= "`provider_id` = " . $provider_id . " ,\n";



                        $is_property = (isset($reg2[1]) && $reg2[1]) ? 1 : 0;
                        $this->sql .= "`is_property` = " . $is_property . " ,\n";
                        $this->sql .= "`get_values` = 1 ,\n";

                        $key_check_string = $k."_has_a_key";

                        if(isset($_POST[$key_check_string])) {
                            //echo $test1;
                            $this->sql .= "`has_a_key` = 1 ,\n";
                        }

                        $multiply_check_string = $k."_multiply";
                        if(isset($_POST[$multiply_check_string])) {
                            $this->sql .= "`multiply` = 1 ,\n";
                        }

                        //if(isset($reg1[1]) && isset($reg1[2])) {
                            $this->sql .= "`db_field` = '" . $reg1[1] . "." . $reg1[2] . "' ,\n";
                        //}
                        $this->sql .= "`path` = '" . $v . "'; \n";
                    }

                }
                //echo $this->sql."<hr/>";
            }


//            echo "<pre>";
//            print_r($this->sql); die;

            if($this->sql) {
                $this->insert_sql();
            }

            $rows = $this->getvalues($magasin_id,$provider_id);

            $this->insert_other_tags($rows,$magasin_id,$provider_id);

            $this->setDbField();

            $rows = $this->getvalues($magasin_id,$provider_id);

            $this->setParentId($rows);

//          echo "<pre>";
//          print_r($rows);

           // echo $this->sql; die;
        }

        $this->redirect(waSystem::getInstance()->getUrl().'?module=matchs&magasin_id='.$magasin_id.'&provider_id='.$provider_id);
    }

    public function setDbField() {
        $path_products  = waRequest::post('db_table_products');
        $path_categories  = waRequest::post('db_table_categories');

        $magasin_id = waRequest::post('magasin_id');
        $provider_id = waRequest::post('provider_id');

        $this->sql .= "UPDATE magasins_fields_provider SET db_table = 'magasins_products' WHERE path = '".$path_products."' AND magasin_id = ".$magasin_id." AND provider_id = ".$provider_id.";";
        $this->sql .= "UPDATE magasins_fields_provider SET db_table = 'magasins_categories' WHERE path = '".$path_categories."' AND magasin_id = ".$magasin_id." AND provider_id = ".$provider_id.";";

        $this->insert_sql();

//        echo "<pre>";
//      print_r($_POST); die;


    }

    public function setParentId($rows) {

        for($i=0;$i<count($rows);$i++) {

            $path = $rows[$i]['path'];
            preg_match("/(.*\/(.*))\/.*$/", $path, $output_array);
            $key = $this->recursive_array_search($output_array[1],$rows);
            if ($key !== FALSE) {
                  $this->sql_update($rows[$i]['id'],$rows[$key]['id']);
            }
        }

        $this->insert_sql();
//        echo $this->sql; die;

    }


    public function insert_other_tags($rows,$magasin_id,$provider_id) {

        for($i=0;$i<count($rows);$i++) {
            $path = $rows[$i]['path'];

            preg_match("/(.*\/(.*))\/.*$/", $path, $output_array);

            $key = $this->recursive_array_search($output_array[1],$rows);


            if ($key == FALSE) {
                $this->sql_insert($magasin_id,$provider_id, $output_array[2], $output_array[1]);
            }
//            echo "<pre>";
//            print_r($output_array[1]); die;

        }

        //echo $this->sql; die;
        $array = explode(";" , $this->sql);

        $array = array_unique($array);
        $array = array_filter($array);

        $this->sql = '';
        $this->sql = implode(";",$array);

        $this->insert_sql();
    }

    public function getvalues($magasin_id,$provider_id) {

        $rows = $this->sql_select($magasin_id,$provider_id);
        return $rows;

    }

    public function sql_update($id,$parent_id) {

        $this->sql .= "UPDATE magasins_fields_provider SET parent_id = ".$parent_id." WHERE id = ".$id.";";
    }

    public function sql_select($magasin_id,$provider_id) {

        $retrive=mysqli_query($this->conn,"SELECT id, path FROM magasins_fields_provider WHERE magasin_id = ".$magasin_id." and provider_id = ".$provider_id." ORDER BY id DESC");

        while($row = mysqli_fetch_assoc($retrive)) {
            $rows[] = $row;
        }

        return $rows;
    }

    public function sql_insert($magasin_id,$provider_id, $name, $path) {

        $this->sql .= "INSERT INTO magasins_fields_provider SET magasin_id = ".$magasin_id." , provider_id = ".$provider_id.", name = '".$name."', path= '".$path."' ,get_values=1 ;";

        //$this->insert_sql();
    }


    public function db_connection()
    {
        $config = wa()->getConfig()->getDatabase();
        $this->conn = mysqli_connect($config['default']['host'], $config['default']['user'], $config['default']['password'], $config['default']['database']);
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

    public function recursive_array_search($needle,$haystack) {
        foreach($haystack as $key=>$value) {
            $current_key=$key;
            if($needle===$value OR (is_array($value) && $this->recursive_array_search($needle,$value) !== false)) {
                return $current_key;
            }
        }
        return false;
    }
}
