<?php

class magasinsReadxmlAction extends waViewAction
{

    public $array = array();
    public $path = "";
    public $conn;
    public $count_sql_strings = 0;
    public $sql = '';

    public function execute()
    {
        $search =  waRequest::post('search');

        $magasin_id = waRequest::request('magasin_id');
        $provider_id = waRequest::request('provider_id');

        $this->model = new magasinsFieldsModel();

        $model_magasin = new magasinsMagasinModel();
        $model_provider = new magasinsProviderModel();

        $magasin_info = $model_magasin->getById($magasin_id);
        $provider_info = $model_provider->getById($provider_id);

        $this->setLayout(new magasinsDefaultLayout());

        $xml_url = $provider_info['xml_url'];
        //$xml_url = '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/magasins/xml/747b10bb-bd0a-44fc-97a0-fc963af1e527.xml';
/*

        $rows = $this->read_array($magasin_info,$provider_info);
        $this->get_array($rows,0,0,'');

        $this->clean_array();

        $xml = new XMLReader();
        $xml->open($xml_url);
        $this->xml2assoc($xml);

        $this->insert_sql();
*/


        if($search) {
            $sql = $this->model->query("SELECT * FROM magasins_products WHERE provider_id = ".$provider_info['id']." AND (name LIKE '%".$search."%' ) ORDER BY id DESC");
            $records = $sql->fetchAll();
        }
        else {
            $sql = $this->model->query("SELECT * FROM magasins_products WHERE provider_id = ".$provider_info['id']." ORDER BY id DESC ");
            $records = $sql->fetchAll();
        }

//        echo "<pre>";
//        print_r($records); die;

        $this->view->assign('magasin_info', $magasin_info);
        $this->view->assign('provider_info', $provider_info);

        $this->view->assign('records', $records);
        $this->view->assign('search', $search);
    }


    public function xml2assoc($xml)
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
                                    if(isset($node['attributes']) && count($node['attributes'])) {
                                        foreach ($node['attributes'] as $n => $m) {
                                            if ($n == $v['name']) {
                                                $values_for_db[$v['db_field']] = $m;
                                            }
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
        $provider_id = waRequest::request('provider_id');

        foreach($array['values_for_db'] as $n=>$m) {
            $count = 0;
            $this->sql .= "INSERT INTO `" . $array['db_table'] . "` SET \n";
            foreach ($array['values_for_db'][$n] as $k => $v) {
                if ($count > 0) {
                    $this->sql .= ",";
                }

                $this->sql .= "`" . str_replace($array['db_table'] . ".", "", $k) . "` = '" . $this->conn->escape_string($v) . "' \n";
                $count++;
            }

            if($array['db_table'] == 'magasins_products') {

                if ($count > 0) {
                    $this->sql .= ",";
                }
                $this->sql .= "`provider_id` = '".$provider_id."' \n";
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


    public function read_array($magasin_info,$provider_info) {
        $rows=array();

        $config = wa()->getConfig()->getDatabase();
        // Create connection
        $this->conn=mysqli_connect($config['default']['host'],$config['default']['user'],$config['default']['password'],$config['default']['database']);

        $this->conn->set_charset("utf8");

        $retrive=mysqli_query($this->conn,"SELECT * FROM magasins_fields_provider WHERE magasin_id = ".$magasin_info['id']." and provider_id = ".$provider_info['id']." ORDER BY id DESC");

        while($row = mysqli_fetch_assoc($retrive)) {
            $rows[] = $row;
        }

        return $rows;
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

    public function insert_sql() {

        if($this->sql) {
            if (!mysqli_multi_query($this->conn, $this->sql)) {
                echo "<hr>Error: " . $this->sql . "<hr>" . mysqli_error($this->conn);
            }
            $this->sql = '';
            $this->count_sql_strings = 0;
            while (@$this->conn->next_result()) {
                ;
            } // flush multi_queries
        }
    }
}