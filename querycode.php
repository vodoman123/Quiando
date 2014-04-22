<?php
$terms=preg_replace('/[^a-zA-Z0-9_%\[().\]\\/-]/s', '', $_POST['search']);

//$command = escapeshellarg($full);

 //if ($term == "") 
 //{ 
// echo "You forgot to enter a search term"; 
// exit; 
// }
//else{
//exec('java -Xmx128m -Xms128m -jar query.jar bbq champaign');
$command='python query.py food ';
$command.=locate();
$query = shell_exec($command);
$result = json_decode($query);

	//echo "$query['businesses'][$i]['name'] <br>"
	if(count($result->businesses)>0)
	{
		foreach ($result->businesses as $i => $value)
		{
			echo "$value->name &nbsp;&nbsp;&nbsp; rating: $value->rating<br>";
			
		}
	}
	else
	{
		echo "We were unable to find a any restaurants. Try a more generic search and/or entering your location.";
	}
	//echo $result->businesses;

pclose($query);
//header("Location: http://www.yelp.com/search?find_desc=$full");



//} 
function locate()
{
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
	$loc=$latitude.",".$longitude;

	return $loc;
}
?>
