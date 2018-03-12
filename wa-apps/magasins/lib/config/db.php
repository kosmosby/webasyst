<?php
return array(
    'magasins_magasin' => array(
        'id' => array('int', 11, 'null' => 0, 'autoincrement' => 1),
        'name' => array('varchar', 255, 'null' => 0),
        'url' => array('varchar', 255 => 0),
        'published' => array('tinyint', 1, 'null' => 0, 'default' => '0'),
        ':keys' => array(
            'PRIMARY' => 'id'
        ),
    ),
    'magasins_provider' => array(
        'id' => array('int', 11, 'null' => 0, 'autoincrement' => 1),
        'name' => array('varchar', 255, 'null' => 0),
        'url' => array('varchar', 255 => 0),
        'xml_url' => array('varchar', 255 => 0),
        'published' => array('tinyint', 1, 'null' => 0, 'default' => '0'),
        ':keys' => array(
            'PRIMARY' => 'id'
        ),
    ),
    'magasins_setupmagasin' => array(
        'id' => array('int', 11, 'null' => 0, 'autoincrement' => 1),
        'magasin_id' => array('int', 11, 'null' => 0),
        'provider_id' => array('int', 11 => 0),
        'only_refresh' => array('tinyint', 1, 'null' => 0, 'default' => '0'),
        ':keys' => array(
            'PRIMARY' => 'id'
        ),
    ),
    'magasins_fields' => array(
        'id' => array('int', 11, 'null' => 0, 'autoincrement' => 1),
        'name' => array('varchar', 255, 'null' => 0),
        'magasin_id' => array('int', 11, 'null' => 0),
        'provider_id' => array('int', 11 => 0),
        'parent_id' => array('int', 11 => 0),
        ':keys' => array(
            'PRIMARY' => 'id'
        ),
    ),
);