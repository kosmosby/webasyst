<?php

class magasinsReadxmlAction extends waViewAction
{

    //public $records_array = array();

    public $path = "";
    public $array = array();

    public function execute()
    {

        $magasin_id = waRequest::request('magasin_id');
        $provider_id = waRequest::request('provider_id');

        $model = new magasinsFieldsModel();

        $model_magasin = new magasinsMagasinModel();
        $model_provider = new magasinsProviderModel();

        $magasin_info = $model_magasin->getById($magasin_id);
        $provider_info = $model_provider->getById($provider_id);

        $this->setLayout(new magasinsDefaultLayout());

        //$xml_url = $provider_info['xml_url'];

        $xml_url = '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/magasins/xml/747b10bb-bd0a-44fc-97a0-fc963af1e527.xml';

        $sql = $model->query("SELECT * FROM magasins_fields_provider WHERE magasin_id = " . $magasin_info['id'] . " and provider_id = " . $provider_info['id'] . " ORDER BY id DESC");
        $records = $sql->fetchAll();

        $this->get_array($records, 0, 0, '');
        $this->clean_array();



        //simplexml_reader
//        if($xml_url) {
//            $simplexml = simplexml_load_file($xml_url);
//
//            for($i=0;$i<count($this->records_array);$i++) {
//
//                if($this->records_array[$i]['get_values']) {
//
//                    $values = $simplexml->xpath($this->records_array[$i]['path']);
//
//                    $temp_array = array();
//                    foreach($values as $k=>$v) {
//                        $temp_array[$k] =  (string) $v;
//                    }
//                    $this->records_array[$i]['values'] = $temp_array;
//                }
//            }
//        }


        $xml = new XMLReader();
        $xml->open($xml_url);
        $this->xml2assoc($xml);

        echo "<pre>";
        print_r($this->array); die;


        $this->prepare_before_insert();


        $this->insert_into_db();


        if ($xml_url) {


//            echo "<PRE>";
//
//            $xml = new XMLReader();
//            $xml->open($xml_url);
//            $assoc = $this->xml2assoc($xml);
//            $xml->close();
//
//            print_r($assoc);
//            echo "</PRE>";
//die;

            $reader = new XMLReader();
            if (!$reader->open($xml_url)) {
                die("Failed to open " . $xml_url);
            }

            $array = array();
            while ($reader->read()) {
                if ($reader->nodeType == XMLReader::ELEMENT) {
                    $nodeName = $reader->name;

                    echo "<pre>";
                    print_r($reader->name . " : " . $reader->nodeType);
                    echo "</pre>";
                } elseif ($reader->nodeType == XMLReader::END_ELEMENT) {

                }

                if ($reader->nodeType == XMLReader::TEXT && !empty($nodeName)) {


                }


            }

            die;
            if ($reader->nodeType == XMLReader::ELEMENT) {
                $nodeName = $reader->name;
            }

            if ($reader->nodeType == XMLReader::TEXT && !empty($nodeName)) {

                echo "<pre>";
                print_r(XMLReader::TEXT);
                die;

                $node = $reader->expand();
                // process $node...
            }
            $reader->close();


            die;


        }


        $records_array = array();
        for ($i = 0; $i < count($this->records_array); $i++) {

            if ($this->records_array[$i]['get_values']) {
                $records_array[] = $this->records_array[$i];
            }
        }


//                        echo "<pre>";
//        print_r($this->records_array); die;


        $this->view->assign('magasin_info', $magasin_info);
        $this->view->assign('provider_info', $provider_info);

        $this->view->assign('records', $array);
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

//    function xml2assoc($xml) {
//        $assoc = null;
//        while($xml->read()){
//            switch ($xml->nodeType) {
//                case XMLReader::END_ELEMENT: return $assoc;
//                case XMLReader::ELEMENT:
//                    $assoc[$xml->name][] = array('value' => $xml->isEmptyElement ? '' : $this->xml2assoc($xml));
//                    if($xml->hasAttributes){
//                        $el =& $assoc[$xml->name][count($assoc[$xml->name]) - 1];
//                        while($xml->moveToNextAttribute()) $el['attributes'][$xml->name] = $xml->value;
//                    }
//                    break;
//                case XMLReader::TEXT:
//                case XMLReader::CDATA: $assoc .= $xml->value;
//            }
//        }
//        return $assoc;
//    }

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

                    $key = array_search($this->path, array_column($this->array, 'path'));
                    if ($key !== FALSE) {
                        $searhed_array = $this->array[$key];

                        if ($this->array[$key]['get_values'] && $this->array[$key]['has_a_key']) {
                            $this->array[$key]['values'][] = $node;
                        }

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

    public function prepare_before_insert()
    {


        foreach ($this->array as $k => $v) {
            if (isset($v['values']) && count($v['values'])) {
                foreach ($v['values'] as $n => $m) {
                    foreach ($m['value'] as $s => $q) {

                        $keys = array_keys(array_column($this->array, 'name'), $q['tag']);
                        if ($keys !== FALSE) {
                            foreach ($keys as $x => $z) {
                                if (isset($this->array[$z]) && $this->array[$z]['parent_id'] == $v['id']) {

//                                    if(isset($this->array[$z]['id']) && $this->array[$z]['id']) {
//                                        unset($this->array[$z]['id']);
//                                    }

                                    $this->array[$k]['values'][$n]['value'][$s] = array_merge($q, $this->array[$z]);
                                }
                            }
                        }
                    }

                    if (isset($m['attributes']) && count($m['attributes'])) {
                        foreach ($m['attributes'] as $w => $y) {

                            $keys = array_keys(array_column($this->array, 'name'), $w);
                            if ($keys !== FALSE) {

                                foreach ($keys as $a => $b) {
                                    if (isset($this->array[$b]) && $this->array[$b]['parent_id'] == $v['id']) {

//                                    if(isset($this->array[$z]['id']) && $this->array[$z]['id']) {
//                                        unset($this->array[$z]['id']);
//                                    }
                                        $this->array[$k]['values'][$n]['value'][] = array("tag" => $w, "value" => $y, "db_field" => $this->array[$b]["db_field"]);
                                    }
                                }
                            }
                        }
                    }

                    if(isset($m['value']) && count($m['value'])) {
                        foreach($m['value'] as $kk=>$vv) {
                            if(isset($vv['attributes']) && count($vv['attributes'])) {
                                foreach ($vv['attributes'] as $xx=>$yy) {

                                    $keys = array_keys(array_column($this->array, 'name'), $xx);

                                    if ($keys !== FALSE) {
                                        foreach ($keys as $a => $b) {
                                            if (isset($this->array[$b]) && $this->array[$b]['parent_id'] == $v['id']) {

//                                                echo "<pre>";
//                                                print_r($this->array[$k]['values'][$n]['value'][$kk]); die;

                                                $this->array[$k]['values'][$n]['value'][$kk]['attributes'][$this->array[$b]["db_field"]] = $yy;
                                            }
                                        }
                                    }
//
                                }
                            }



                        }

                    }


                }
            }
        }

    }

    public function insert_into_db()
    {

        $model = new magasinsMagasinModel();
        foreach ($this->array as $k => $v) {

            if (isset($v['db_table']) && isset($v['values']) && count($v['values'])) {

                $sql = "INSERT INTO " . $v['db_table'] . " SET \n";

                if (isset($v['values']) && count($v['values'])) {
                    foreach ($v['values'] as $n => $m) {

                        $count = 0;
                        foreach ($m['value'] as $s => $q) {

                            if (isset($q['db_field']) && isset($q['value']) && isset($q['attributes'])) {
                                $count1=0;
                                if ($count1 > 0) {
                                    $sql .= ",";
                                }

                                $sql = "INSERT INTO " . $v['db_table'] . " SET \n";
                                $sql .= "`" . $q['db_field'] . "` = '" . $model->escape($q['value']) . "' \n";
                                $count1++;

                                foreach($q['attributes'] as $aa=>$bb) {
                                     if(strpos($aa,".")) {

                                         if ($count1 > 0) {
                                             $sql .= ",";
                                         }
                                         $sql .= "`" . $aa . "` = '" . $model->escape($bb) . "' \n";
                                         $count1++;
                                     }
                                }

                                $result = $model->exec(str_replace($v['db_table'] . ".", "", $sql));
                                $sql = '';
                            }

                            else if (isset($q['db_field']) && isset($q['value']) && !isset($q['attributes'])) {
                                if ($count > 0) {
                                    $sql .= ",";
                                }
                                $sql .= "`" . $q['db_field'] . "` = '" . $model->escape($q['value']) . "' \n";
                                $count++;
                            }
                        }

                        if($sql) {
                            $result = $model->exec(str_replace($v['db_table'] . ".", "", $sql));
                            $sql = "INSERT INTO " . $v['db_table'] . " SET \n";
                        }
                    }
                }
            }
        }
    }
}