<?php
/**
 * Created by PhpStorm.
 * User: kosmos
 * Date: 02/06/2018
 * Time: 01:39
 */


$url        = "https://connectivityexpo2018.converve.com/index.php?page=cat_par&params%5Bid%5D=67";
$postfields = "email=al@effectiff.com&password=BestEffect2018%";
$password   = "BestEffect2018%";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERPWD, $password);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);
$response = curl_exec($ch);

echo $response;