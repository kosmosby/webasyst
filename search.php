<?php
$people = array(
    2 => array(
        'name' => 'John',
        'fav_color' => 'green'
    ),
    5=> array(
        'name' => 'Samuel',
        'fav_color' => 'blue'
    )
);


$found_key = recursive_array_search('green',$people);

echo "<pre>";
print_r($found_key); die;


function recursive_array_search($needle,$haystack) {
    foreach($haystack as $key=>$value) {
        $current_key=$key;
        if($needle===$value OR (is_array($value) && recursive_array_search($needle,$value) !== false)) {
            return $current_key;
        }
    }
    return false;
}

?>