<?php


class testXML
{

    public $array = array();
    public $path = "";
    public $conn;
    public $count_sql_strings = 0;
    public $sql = '';

    function __construct() {

        $rows = $this->read_array();
        $this->get_array($rows,0,0,'');

        //$this->generate_array();

        $this->clean_array();

//        echo "<pre>";
//        print_r($this->array);
//        echo "</pre>";
//        die;

        $xml_url = '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/magasins/xml/747b10bb-bd0a-44fc-97a0-fc963af1e527.xml';

        $xml = new XMLReader();
        $xml->open($xml_url);
        $this->xml2assoc($xml);

        $this->insert_sql();

        echo "<pre>";
        print_r($this->array); die;
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
                                                    }
                                            }
                                        }
                                }

                                if(!$this->array[$key]['db_table']) {
                                    unset($this->array[$key]['values_for_db']);
                                }

                                $this->array[$key]['values_for_db'][] = $values_for_db;
                        }

                        if(isset($this->array[$key]['db_table']) && $this->array[$key]['db_table'] && count($this->array[$key]['values_for_db'])) {
                            $this->insert_update_db($this->array[$key], $key);
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

    public function insert_update_db($array,$key) {

        foreach($array['values_for_db'] as $n=>$m) {
            $count = 0;
            $this->sql .= "INSERT INTO `" . $array['db_table'] . "` SET \n";
            foreach ($array['values_for_db'][$n] as $k => $v) {
                if ($count > 0) {
                    $this->sql .= ",";
                }

                $this->sql .= "`" . str_replace($array['db_table'] . ".", "", $k) . "` = '" . $v . "' \n";
                $count++;
            }

            if($array['db_table'] == 'magasins_products') {
                if ($count > 0) {
                    $this->sql .= ",";
                }
                $this->sql .= "`provider_id` = '1' \n";
                $count++;
            }

            $this->sql .= ";";
            $this->count_sql_strings++;

            unset($this->array[$key]['values_for_db'][$n]);
        }

        if($this->count_sql_strings > 9) {
           $this->insert_sql();
        }

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

        $retrive=mysqli_query($this->conn,"SELECT * FROM magasins_fields_provider WHERE magasin_id = 15 and provider_id = 1 ORDER BY id DESC");

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