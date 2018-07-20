<?php

class magasinsMatchsSelectController extends waController
{

    public $array = array();
    public $records_array = array();
    public $select = '';

    public function execute()
    {
        $provider_id = waRequest::request('provider_id');

        $model_provider = new magasinsProviderModel();

        $provider_info = $model_provider->getById($provider_id);

        $xml_url = $provider_info['xml_url'];

        //$xml_url = '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/magasins/xml/747b10bb-bd0a-44fc-97a0-fc963af1e527.xml';

        $xml = new XMLReader();
        $xml->open(trim($xml_url));
        $array = $this->xml2assoc($xml);

        $xml->close();

        $this->create_list($array,'');
        $this->add_parent_element();

        $this->get_array($this->array,0,0);

        $this->create_select();

        echo $this->select;
    }

    public function xml2assoc($xml) {
        $assoc = null;
        while($xml->read()){
            $type = $xml->nodeType;

            switch ($xml->nodeType) {
                case XMLReader::END_ELEMENT: return $assoc;
                case XMLReader::ELEMENT:
                    $assoc[$xml->name][] = array('value' => $xml->isEmptyElement ? '' : $this->xml2assoc($xml));
                    if($xml->hasAttributes){
                        $el =& $assoc[$xml->name][count($assoc[$xml->name]) - 1];
                        while($xml->moveToNextAttribute()) $el['attributes'][$xml->name] = '';
                    }
                    break;
//                case XMLReader::TEXT:
//                case XMLReader::CDATA: $assoc .= $xml->value;
            }
        }
        return $assoc;
    }

    public function create_list($my_array, $path)   {

        foreach ((array)$my_array as $k => $v) {
            if (!is_int($k) && $k != 'value' && $k != 'attributes') {
                $path_string = $path . '/' . $k;
                $path_string = str_replace('/value','',$path_string);
                $path_string = str_replace('attributes/','@',$path_string);
                $path_string = preg_replace('/\d+\//','',$path_string);

                if(!$this->recursive_array_search($path_string,$this->array)) {

                    if(preg_match('/\@/',$path_string,$matches)) {
                        $name = "@".$k;
                    }
                    else {
                        $name = $k;
                    }

                    $this->array[] = array("name" => $name, "path" => $path_string);
                }
            }
            if (is_array($my_array[$k]) && count($my_array[$k])) {
                $this->create_list($my_array[$k], $path . '/' . $k);
            }
        }
    }

    public function add_parent_element() {

        if(is_array($this->array) && count($this->array)) {

            for($i=0;$i<count($this->array);$i++) {
                preg_match('/.*\/(.*)\/.*$/',$this->array[$i]['path'],$mathes);

                if(isset($mathes[1]) && $mathes[1]) {
                    $this->array[$i]['parent'] = $mathes[1];
                    $key = $this->recursive_array_search($mathes[1],$this->array);
                    $this->array[$i]['parent_id'] = $key;
                }
            }
        }

    }

    public function get_array($my_array,$parent,$level)
    {
        $level++;
        foreach ($my_array as $k => $v) {
            if(!isset($v['parent_id'])) {
                $my_array[$k]['parent_id'] = -1;
                $v['parent_id'] = -1;
                $v['level'] = 0;
                $this->records_array[] = $v;
            }
            if (isset($v['parent_id']) && $v['parent_id'] == $parent) {
                $v['level'] = $level;
                $this->records_array[] = $v;
                $this->get_array($my_array,$k,$level);
            }
        }
    }

    public function create_select() {

        if(is_array($this->records_array) && count($this->records_array)) {

            $this->select = '<select>';
            $this->select .= '<option value="">-выберите поле-</option>';

            for($i=0;$i<count($this->records_array);$i++) {

                $level = '';
                for($j=0;$j<$this->records_array[$i]['level'];$j++) {
                    $level .='&#45;';
                }
                $this->select .= '<option value="'.$this->records_array[$i]['path'].'">'.$level.$this->records_array[$i]['name'].'</option>';
            }



            $this->select .= '</select>';
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
