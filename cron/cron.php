<?php

require_once __DIR__.'/vendor/autoload.php';

//echo "<pre>";
//print_r($loader); die;

use TiBeN\CrontabManager;

$crontabRepository = new CrontabRepository(new CrontabAdapter());