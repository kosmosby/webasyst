<?php

class magasinsSelectfieldsSaveController extends waController
{

    public $sql = '';
    public $conn;


    public function execute()
    {

        $this->db_connection();

        $provider_id = waRequest::post('provider_id');
        $magasin_id = waRequest::post('magasin_id');


        if(isset($_POST) && count($_POST)  && $provider_id) {

            $this->sql .= "DELETE FROM `magasins_fields_magasin` WHERE provider_id = ".$provider_id." AND magasin_id = ".$magasin_id.";";
            $this->insert_sql();

            foreach($_POST as $k=>$v) {

                $name = str_replace('magasins_products_','magasins_products.',$k);
                $name = str_replace('magasins_categories_','magasins_categories.',$name);


                if (strpos($k, 'magasins_') !== false) {
                    $this->sql .= "INSERT INTO `magasins_fields_magasin` SET ";
                    $this->sql .= "`name` = '" . $name . "' ,\n";
                    $this->sql .= "`magasin_id` = " . $magasin_id . " ,\n";
                    $this->sql .= "`provider_id` = " . $provider_id . "; \n";
                }
            }

            //echo $this->sql; die;

            if($this->sql) {
                $this->insert_sql();
            }
        }

        $this->redirect(waSystem::getInstance()->getUrl().'?module=selectfields&provider_id='.$provider_id.'&magasin_id='.$magasin_id);
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
