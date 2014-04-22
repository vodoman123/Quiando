<?php

$ip = $_SERVER['REMOTE_ADDR'];
$host = 'http://www.geoplugin.net/php.gp?ip=';
$host.= $ip;
$data = array();

if ( function_exists('curl_init') ) 
{
	//use cURL to fetch data
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $host);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_USERAGENT, 'geoPlugin PHP Class v1.0');
	$response = curl_exec($ch);
	curl_close ($ch);
			
}  
else 
{
	trigger_error ('geoPlugin class Error: Cannot retrieve data. Either compile PHP with cURL support or enable allow_url_fopen in php.ini ', E_USER_ERROR);
		
}

$data = unserialize($response);

$latitude = $data['geoplugin_latitude'];
$longitude = $data['geoplugin_longitude'];

echo "$latitude $longitude"


?>