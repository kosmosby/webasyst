<?php
return array(
    'magasins_magasin' => array(
        'id' => array('int', 11, 'null' => 0, 'autoincrement' => 1),
        'name' => array('varchar', 255, 'null' => 0),
        'url' => array('varchar', 255 => 0),
        ':keys' => array(
            'PRIMARY' => 'id'
        ),
    ),
);