<?php


class testXML
{

    public $array = array();
    public $path = "";
    public $conn;
    public $count_sql_strings = 0;
    public $sql = '';
    public $sql_body = '';
    public $count;
    public $arr_db = array();
    public $arr_xml = array();
    public $array_update_date = array();
    //public $arr_insert = array();

    function __construct() {

        $this->array = $this->read_array();

        //$this->get_array($rows,0,0,'');
        //$this->generate_array();
        //$this->clean_array();

        $provider_id = $_REQUEST['provider_id'];
        $this->arr_db = $this->compose_array_db($provider_id);

        //$this->compose_array_db();
        $xml_url = '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/magasins/xml/747b10bb-bd0a-44fc-97a0-fc963af1e527.xml';

        $xml = new XMLReader();
        $xml->open($xml_url);
        $this->xml2assoc($xml);

        $this->insert_sql();

        //$this->compose_array_db();
        $this->compare_arrays();

        $this->clean_tables();

//        echo "<pre>";
//        print_r($this->array); die;
    }


    function xml2assoc($xml)
    {
//        global $path, $array;
        $tree = null;
        while ($xml->read()) {
            $type = $xml->nodeType;
            switch ($xml->nodeType) {
                case XMLReader::END_ELEMENT:
                    return $tree;
                case XMLReader::ELEMENT:

                    $name = $xml->name;
                    $this->path .= "/" . $xml->name;

                    $node = array('tag' => $xml->name, 'value' => $xml->isEmptyElement ? '' : $this->xml2assoc($xml), 'path' => $this->path);
                    if ($xml->hasAttributes) {
                        while ($xml->moveToNextAttribute()) {
                            $node['attributes'][$xml->name] = $xml->value;
                            //$node['attributes']['path'] = $path;
                        }
                    }
                    $tree[] = $node;

                    $key = $this->recursive_array_search($this->path, $this->array);
                    if ($key !== FALSE) {
                        $searhed_array = $this->array[$key];

                        if ($this->array[$key]['get_values']) {
                                $linked_data = $this->get_childs_by_parent_id($searhed_array['id']);

                                $linked_data[] = $searhed_array;

                                $values_for_db = array();
                                foreach ($linked_data as $k=>$v) {
                                        if($v['is_property']) {
                                            foreach ($node['attributes'] as $n=>$m) {
                                                if($n==$v['name']) {
                                                        $values_for_db[$v['db_field']] = $m;
                                                }
                                            }
                                        }
                                        else {
                                            if(!is_array($node['value'])) {
                                                $values_for_db[$v['db_field']] = $node['value'];
                                            }
                                            else {
                                                    if(isset($v['values_for_db'][0]) && isset($values_for_db)) {
                                                        $values_for_db = array_merge($v['values_for_db'][0], $values_for_db);

                                                        //need to check it if it's could be used
                                                        foreach($values_for_db as $n=>$m) {
                                                            $for_remove = $this->recursive_array_search($m, $this->array);
                                                            unset($this->array[$for_remove]['values_for_db']);
                                                        }
                                                    }
                                            }
                                        }
                                }

                                if(!$this->array[$key]['db_table']) {
                                    if($this->array[$key]['multiply']) {
                                        if(isset($this->array[$key]['values_for_db']) && count($this->array[$key]['values_for_db'])) {
                                            $values_for_db[$this->array[$key]['db_field']] = $this->array[$key]['values_for_db'][0][$this->array[$key]['db_field']]."|".$values_for_db[$this->array[$key]['db_field']];
                                        }
                                    }
                                    unset($this->array[$key]['values_for_db']);
                                }

                                $this->array[$key]['values_for_db'][] = $values_for_db;
                        }

                        if(isset($this->array[$key]['db_table']) && $this->array[$key]['db_table'] && count($this->array[$key]['values_for_db'])) {

                            //commented for a change algorithm
                            //$this->insert_update_db($this->array[$key], $key);

                            $this->compose_array_xml($this->array[$key], $key);

                        }
                        //unset($this->array[$key]['values_for_db']);

                        //for adding into database
                        //echo count($array, COUNT_RECURSIVE);
                    }

                    $this->path = preg_replace('/\/' . $name . '$/', '', $this->path);
                    break;
                case XMLReader::TEXT:
                case XMLReader::CDATA:
                    $tree .= $xml->value;
            }
        }
        return $tree;
    }

    public function compose_array_xml($array, $key) {

            foreach($array['values_for_db'] as $n=>$m) {
                $md5_hash = $this->generate_md5($array,$n);

                //$the_key = $this->what_is_key($array['db_table']);
                //uncommit for get all data

                $this->arr_xml[$array['db_table']][$md5_hash] = $m;
                //$this->arr_xml[$md5_hash] = $m[$the_key];
                unset($this->array[$key]['values_for_db'][$n]);
            }

            if(count($this->arr_xml,COUNT_RECURSIVE) > 40) {

                //$this->compose_array_db();
                $this->compare_arrays();
            }
    }

    public function compare_arrays() {

        $provider_id = 1;

        if(count($this->arr_db) && count($this->arr_xml)) {
            foreach ($this->arr_xml as $table_name => $array) {
                foreach ($array as $hash=>$values) {
                    if(isset($this->arr_db[$table_name][$hash])) {
                        //$array
                        unset($this->arr_xml[$table_name][$hash]);
                        $this->array_update_date[$table_name][] = $hash;
                        unset($this->arr_db[$table_name][$hash]);
                    }
                }
            }
        }

        if(count($this->arr_xml)) {
            foreach($this->arr_xml as $table => $array) {
                foreach($array as $hash=>$values) {
                    $this->sql .= "INSERT INTO `".$table."` SET ";
                    foreach($values as $k=>$v) {
                        if ($this->count > 0) {
                            $this->sql .= ",";
                        }
                        $this->sql .= "`" . str_replace($table . ".", "", $k) . "` = '" . $this->conn->escape_string($v) . "' \n";
                        $this->count++;
                    }
                    $this->sql .= ", `provider_id` = ".$provider_id." \n";
                    $this->sql .= ", `update_date` = NOW() \n";
                    $this->sql .= ", `hash` = '".$hash."'; \n";

                    $this->count=0;
                    unset($this->arr_xml[$table][$hash]);
                }
            }
        }

        if(count($this->arr_xml,COUNT_RECURSIVE) > 2) {
            foreach($this->arr_xml as $table=>$array) {
                $key = $this->what_is_key($table);
                foreach($array as $hash=>$values) {
                    $this->sql .= "UPDATE `".$table."` SET ";
                    foreach($values as $k=>$v) {
                        if ($this->count > 0) {
                            $this->sql .= ",";
                        }
                        $this->sql .= "`" . str_replace($table . ".", "", $k) . "` = '" . $this->conn->escape_string($v) . "' \n";
                        $this->count++;
                    }

                    $this->sql .= ", `update_date` = NOW() \n";
                    $this->sql .= ", `hash` = '".$hash."' \n";
                    $this->sql .= " WHERE `provider_id` = ".$provider_id." \n";
                    $this->sql .= " AND `".str_replace($table . ".", "", $key)."` = ".$this->arr_xml[$table][$hash][$key]."; \n";

                    $this->count=0;
                    unset($this->arr_xml[$table][$hash]);
                }
                //if(isset($this->arr_xml))
            }
        }

        if(isset($this->array_update_date) && count($this->array_update_date)) {
            foreach($this->array_update_date as $table=>$array) {
                $this->sql .= "UPDATE `".$table."` SET `update_date` = NOW() ";

                $array_for_query= array();
                foreach($this->array_update_date[$table] as $n=>$m) {
                    array_push($array_for_query,'"'.$m.'"');
                }

                $query_string = implode(',',$array_for_query);
                $this->sql .= " WHERE hash IN (".$query_string."); ";
            }
            unset($this->array_update_date);
        }

        $this->insert_sql();

    }

    public function clean_tables() {

            $provider_id = $_REQUEST['provider_id'];

//            echo "<pre>";
//            print_r($this->arr_db); die;

            $array_for_query= array();
            foreach($this->arr_db['magasins_categories'] as $n=>$m) {
                array_push($array_for_query,'"'.$n.'"');
            }
            $query_string = implode(',',$array_for_query);

            $this->sql .= "DELETE FROM magasins_categories WHERE hash IN (".$query_string.") AND provider_id = ".$provider_id.";";

            $array_for_query= array();
            foreach($this->arr_db['magasins_products'] as $n=>$m) {
                array_push($array_for_query,'"'.$n.'"');
            }
            $query_string = implode(',',$array_for_query);

            $this->sql .= "DELETE FROM magasins_products WHERE hash IN (".$query_string.") AND provider_id = ".$provider_id.";";


            //echo $this->sql; die;

            $this->insert_sql();
    }

    public function compose_array_db($provider_id) {

        $query = "SELECT id, hash FROM magasins_categories WHERE  provider_id = ".$provider_id;
        $retrive=mysqli_query($this->conn,$query);
        if(isset($retrive) && $retrive) {
            while ($row = mysqli_fetch_assoc($retrive)) {
                $rows['magasins_categories'][$row['hash']] = $row['id'];
            }
        }

        $query = "SELECT id, hash FROM magasins_products WHERE provider_id = ".$provider_id;
        $retrive=mysqli_query($this->conn,$query);
        if(isset($retrive) && $retrive) {
            while ($row = mysqli_fetch_assoc($retrive)) {
                $rows['magasins_products'][$row['hash']] = $row['id'];
            }
        }

        return $rows;

//        foreach($this->arr_xml as $k=>$v) {
//            //$the_key = $this->what_is_key($v['db_table']);
//            $hash = '';
//
//            $array_for_query= array();
//            foreach($v as $n=>$m) {
//                //$new_elem = array($n);
//
//                array_push($array_for_query,'"'.$n.'"');
//            }
//
//            $query_string = implode(',',$array_for_query);
//
//            $this->create_array_db($query_string,$k);
//
//        }
    }

    public function create_array_db($query_string,$table) {
        $query = "SELECT * FROM ".$table." WHERE hash IN  (".$query_string.")";

        $retrive=mysqli_query($this->conn,$query);

        if(isset($retrive) && $retrive) {
            while ($row = mysqli_fetch_assoc($retrive)) {
                $rows[] = $row;
            }
        }

        if(isset($rows) && count($rows)) {
            foreach ($rows as $k => $v) {
                $this->arr_db[$table][$v['hash']] = $rows[$k];
            }
        }

    }

    public function insert_update_db($array,$key) {

        $the_key = $this->what_is_key($array['db_table']);

        foreach($array['values_for_db'] as $n=>$m) {
            $this->count = 0;

            $hash = $this->select_sql($array,$the_key,$n);

//          echo $hash; die;
//            if(count($if_record)) {
//
//            }

            $md5_hash = $this->generate_md5($array,$n);

            if(!$hash) {
                $this->generate_sql_body($array,$n);
                $sql_header = "INSERT INTO `" . $array['db_table'] . "` SET \n";
                $this->sql .= $sql_header.$this->sql_body;
                $this->sql_body = '';
                $this->sql .= ";";

                $this->count_sql_strings++;
            }
            else if($hash && $hash != $md5_hash) {
                $this->generate_sql_body($array,$n);
                $sql_header = "UPDATE `" . $array['db_table'] . "` SET \n";
                $sql_footer = " WHERE hash = '".$hash."'";

                $this->sql .= $sql_header.$this->sql_body.$sql_footer;

                $this->sql_body = '';
                $this->sql .= ";";

                $this->count_sql_strings++;
            }
//            else if($hash == $md5_hash) {
//                echo 'qq';
//            }
//            echo $sql_header; die;


            unset($this->array[$key]['values_for_db'][$n]);
        }

        if($this->count_sql_strings > 9) {
           $this->insert_sql();
        }

    }

    public function generate_md5($array,$n) {
        $hash = '';
        foreach ($array['values_for_db'][$n] as $k => $v) {
            $hash .= $v;
        }
        $md5_hash = md5($hash);

        return $md5_hash;
    }

    public function generate_sql_body($array,$n) {

//        $provider_id = $_REQUEST['provider_id'];
        $provider_id = 1;

        $hash = '';
        foreach ($array['values_for_db'][$n] as $k => $v) {
            if ($this->count > 0) {
                $this->sql_body .= ",";
            }

            $this->sql_body .= "`" . str_replace($array['db_table'] . ".", "", $k) . "` = '" . $this->conn->escape_string($v) . "' \n";
            $this->count++;

            $hash .= $v;
        }

        //if($array['db_table'] == 'magasins_products') {
            if ($this->count > 0) {
                $this->sql_body .= ",";
            }
            $this->sql_body .= "`provider_id` = '".$provider_id."' \n";
            $this->count++;

            if ($this->count > 0) {
                $this->sql_body .= ",";
            }

            $md5_hash = md5($hash);
            $this->sql_body .= "`hash` = '".$md5_hash."' \n";
            $this->count++;
       // }


    }

    public function select_sql($array,$the_key,$n) {
        //$provider_id = $_REQUEST['provider_id'];

        $provider_id = 1;

        foreach ($array['values_for_db'][$n] as $k => $v) {
           if($k==$the_key) {
                $row = $this->select_value($array['db_table'], str_replace($array['db_table'] . ".", "", $the_key),$v,$provider_id);
               return $row;
            }
        }
        return false;

    }

    public function select_value($table_name,$key_field,$value,$provider_id) {
        $query = "SELECT hash FROM ".$table_name." WHERE `".$key_field."` = ".$value." AND provider_id = ".$provider_id;

        $retrive=mysqli_query($this->conn,$query);

        while($row = mysqli_fetch_assoc($retrive)) {
            $rows[] = $row;
        }

        if(isset($rows[0]) && count($rows[0])) {
            return $rows[0]['hash'];
        }
        else {
            return false;
        }
    }


    public function what_is_key($table) {
        $retrive=mysqli_query($this->conn,"SHOW keys FROM ".$table." WHERE key_name = 'magasins_key'");
        $row = mysqli_fetch_assoc($retrive);
        return $table.".".$row['Column_name'];
    }

    public function insert_sql() {

        if($this->sql) {
            if (mysqli_multi_query($this->conn, $this->sql)) {
                echo "New records created successfully<hr />";
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

    public function get_array($my_array, $parent, $level, $path)
    {
        $level++;
        foreach ($my_array as $k => $v) {
            if ($v['parent_id'] == $parent) {
                $v['level'] = $level;

                if ($v['is_property']) {
                    $v['path'] = $path . '/@' . $v['name'];
                } else {
                    $v['path'] = $path . '/' . $v['name'];
                }


                $this->array[] = $v;
                $this->get_array($my_array, $v['id'], $level, $v['path']);
            }
        }
    }

    public function clean_array()
    {
        for ($i = 0; $i < count($this->array); $i++) {
            if ($this->array[$i]['get_values'] == 0) {
                unset($this->array[$i]);

            }
        }
        $this->array = array_values($this->array);
    }

    public function read_array() {
        $rows=array();
        // Create connection
        $this->conn=mysqli_connect("localhost","root","password","webasyst");

        $this->conn->set_charset("utf8");
        //$seldb=mysql_select_db("webasyst",$this->conn);

        $retrive=mysqli_query($this->conn,"SELECT * FROM magasins_fields_provider WHERE magasin_id = 1 and provider_id = 1 ORDER BY id DESC");

        while($row = mysqli_fetch_assoc($retrive)) {
            $rows[] = $row;
        }

        return $rows;
    }

    public function generate_array() {


        $this->array[0]['get_values'] = 1;
        $this->array[0]['is_property'] = 0;
        $this->array[0]['name'] = '';

        $this->array[1]['path'] = '/yml_cotalog/dftegory/@parentId';
        $this->array[1]['get_values'] = 1;
        $this->array[1]['is_property'] = 1;
        $this->array[1]['name'] = 'parentId';

        $this->array[2]['path'] = '/yml_catalog/shop/categories/category';
        $this->array[2]['get_values'] = 1;
        $this->array[2]['is_property'] = 1;
        $this->array[2]['name'] = 'id';


        $this->array[3]['path'] = '/yml_catalog/shop/offers/offer';
        $this->array[3]['get_values'] = 0;
        $this->array[3]['is_property'] = 0;
        $this->array[3]['name'] = 'offer';

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

    public function get_childs_by_parent_id($parent_id) {
        $rows = array();
        $keys = array_keys(array_column($this->array, 'parent_id'), $parent_id);
        if ($keys !== FALSE) {
            foreach ($keys as $k => $v) {
                $rows[] = $this->array[$v];
            }
        }
        return $rows;
    }

}

$test = new testXML();



//
//$reader = new XMLReader();
//if (!$reader->open($xml_url))
//{
//    die("Failed to open ".$xml_url);
//}
//
//
//$array = array();
//$path = '';
//$i=0;
//while($reader->read())
//{
//
//    $type = $reader->nodeType;
//
//    if($type == XMLReader::ELEMENT) {
//        $nodeName = $reader->name;
//        $path .= "/".$nodeName;
//    }
//
//    if($type == XMLReader::END_ELEMENT || $reader->isEmptyElement) {
//        $path =  preg_replace('/\/'.$nodeName.'$/', '', $path);
//    }
//
//    if($type == XMLReader::TEXT && !empty($nodeName)) {
//        $array[$i]['name'] = $nodeName;
//        $array[$i]['path'] = $path;
//        $array[$i]['values'] = $reader->value;
//        $i++;
//    }


//    $nodeName = $reader->name;
//    $nodeType = $reader->nodeType;
//    $value = $reader->value;


//    if($reader->nodeType == XMLReader::ELEMENT) {
//        $nodeName = $reader->name;
//        $nodeType = $reader->nodeType;
////        echo "<pre>";
////        print_r($reader->name." : ".$reader->nodeType);
////        echo "</pre>";
//    }
//    elseif($reader->nodeType == XMLReader::END_ELEMENT) {
//
//    }
//
//    if($reader->nodeType == XMLReader::TEXT && !empty($nodeName)) {
//
//    }





//}



//$xml = simplexml_load_file("wa-apps/guestbook/xml/demo.xml");
//
//$AssocArray = array();
//$AssocArray = RecurseXML($xml,$AssocArray);
//
//function RecurseXML($xml,$array)
//{
//    if($xml->count()) {
//        foreach ($xml as $key => $value) {
//
//            $childrens = $value->children();
//
//  //          if()
//            $array[$key] = $xml[$key];
//            $array[$key] = RecurseXML($array[$key],$array);
//        }
//    }
//
//    return;
//}