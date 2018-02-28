<?php


$xml = simplexml_load_file("wa-apps/guestbook/xml/demo.xml");

$AssocArray = array();
$AssocArray = RecurseXML($xml,$AssocArray);

function RecurseXML($xml,$array)
{
    if($xml->count()) {
        foreach ($xml as $key => $value) {

            $childrens = $value->children();

            if()
            $array[$key] = $xml[$key];
            $array[$key] = RecurseXML($array[$key],$array);
        }
    }

    return;
}