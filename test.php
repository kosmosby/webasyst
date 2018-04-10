<?php


class testXML
{

    public $array = array();
    public $path = "";

    function __construct() {

        $this->array[0]['path'] = '/yml_catalog/shop/categories/category';
        $this->array[0]['get_values'] = 1;
        $this->array[0]['is_property'] = 0;
        $this->array[0]['name'] = 'category';

        $this->array[1]['path'] = '/yml_catalog/shop/categories/category/@parentId';
        $this->array[1]['get_values'] = 1;
        $this->array[1]['is_property'] = 1;
        $this->array[1]['name'] = 'parentId';

        $this->array[2]['path'] = '/yml_catalog/shop/offers/offer/@id';
        $this->array[2]['get_values'] = 1;
        $this->array[2]['is_property'] = 1;
        $this->array[2]['name'] = 'id';

//$array[3]['path'] = '/yml_catalog/shop/offers/offer/name';
//$array[3]['get_values'] = 1;
//$array[3]['is_property'] = 0;
//$array[3]['name'] = 'name';

        $this->array[3]['path'] = '/yml_catalog/shop/offers/offer';
        $this->array[3]['get_values'] = 0;
        $this->array[3]['is_property'] = 0;
        $this->array[3]['name'] = 'offer';


        $xml_url = '/Users/kosmos/Documents/sites/webassist.framework/wa-apps/magasins/xml/747b10bb-bd0a-44fc-97a0-fc963af1e527.xml';

        $xml = new XMLReader();
        $xml->open($xml_url);
        $this->xml2assoc($xml);

        echo "<pre>";
        print_r($this->array);
        echo "</pre>";
        die;

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

                    $key = array_search($this->path, array_column($this->array, 'path'));
                    if ($key !== FALSE) {
                        $searhed_array = $this->array[$key];
                        $this->array[$key]['values'][] = $node;


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

}


$test = new testXML();







$reader = new XMLReader();
if (!$reader->open($xml_url))
{
    die("Failed to open ".$xml_url);
}


$array = array();
$path = '';
$i=0;
while($reader->read())
{

    $type = $reader->nodeType;

    if($type == XMLReader::ELEMENT) {
        $nodeName = $reader->name;
        $path .= "/".$nodeName;
    }

    if($type == XMLReader::END_ELEMENT || $reader->isEmptyElement) {
        $path =  preg_replace('/\/'.$nodeName.'$/', '', $path);
    }

    if($type == XMLReader::TEXT && !empty($nodeName)) {
        $array[$i]['name'] = $nodeName;
        $array[$i]['path'] = $path;
        $array[$i]['values'] = $reader->value;
        $i++;
    }


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


}



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