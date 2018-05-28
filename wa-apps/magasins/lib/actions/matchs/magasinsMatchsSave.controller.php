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
//
//      echo "<pre>";
//      print_r($_POST); die;

        if(isset($_POST) && count($_POST) && $magasin_id && $provider_id) {

            $this->sql .= "DELETE FROM `magasins_fields_provider` WHERE magasin_id = ".$magasin_id." AND provider_id = ".$provider_id.";";
            $this->insert_sql();


            foreach($_POST as $k=>$v) {

                if(isset($v)) {

                    preg_match("/^(magasins_.*s)_(.*)$/", $k, $reg1);
                    preg_match("/^.*\/(@?)(.*)$/", $v, $reg2);

//                echo "<pre>";
//                print_r($reg2);

                    if(isset($reg2[2]) || isset($reg2[1])) {
                        $this->sql .= "INSERT INTO `magasins_fields_provider` SET ";
                        $name = (isset($reg2[2])) ? $reg2[2] : $reg2[1];
                        $this->sql .= "`name` = '" . $name . "' ,\n";
                        $this->sql .= "`magasin_id` = " . $magasin_id . " ,\n";
                        $this->sql .= "`provider_id` = " . $provider_id . " ,\n";

                        $is_property = (isset($reg2[2])) ? 1 : 0;
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

                        $this->sql .= "`db_field` = '" . $reg1[1] . "." . $reg1[2] . "' ,\n";
                        $this->sql .= "`path` = '" . $v . "'; \n";
                    }

                }
                //echo $this->sql."<br/>";
            }

            if($this->sql) {
                $this->insert_sql();
            }
           // echo $this->sql; die;
        }

        $this->redirect(waSystem::getInstance()->getUrl().'?module=matchs&magasin_id='.$magasin_id.'&provider_id='.$provider_id);
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
}
