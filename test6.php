<?php
/**
 * Created by PhpStorm.
 * User: kosmos
 * Date: 13/07/2018
 * Time: 17:12
 */



//    Read XML structure to associative array
//    --
//    Using:
    $xml = new XMLReader();
    $xml->open("http://www.sititek.ru/yandex2/shop3_msk.yml");
    $assoc = xml2assoc($xml);

    echo "<pre>";
    print_r($assoc); die;

    $xml->close();

    function xml2assoc($xml) {
        $assoc = null;
        while($xml->read()){

            $type = $xml->nodeType;

            switch ($xml->nodeType) {
                case XMLReader::END_ELEMENT: return $assoc;
                case XMLReader::ELEMENT:
                    $assoc[$xml->name][] = array('value' => $xml->isEmptyElement ? '' : xml2assoc($xml));
                    if($xml->hasAttributes){
                        $el =& $assoc[$xml->name][count($assoc[$xml->name]) - 1];
                        while($xml->moveToNextAttribute()) $el['attributes'][$xml->name] = $xml->value;
                    }
                    break;
                case XMLReader::TEXT:
                case XMLReader::CDATA: $assoc .= $xml->value;
            }
        }
        return $assoc;
    }
?>