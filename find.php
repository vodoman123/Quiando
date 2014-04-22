<?php

$cuisine=$_POST['cuisine'];
$city=" Champaign";
$str="java -jar -XX:MaxHeapSize=256m query.jar ";

if(empty($cuisine))
{
	echo("You didn't select any cuisines!!! How do you expect to eat. I'm not feeding you.");
}
else
{
	$Query="";
	$N=count($cuisine);
	for($i=0; $i<$N; $i++)
	{
		$Query.=$cuisine[$i]." ";
	}
#str.=$Query;
$str.=$Champaign;
exec($str, $output);
header("Location: http://www.yelp.com/search?find_desc=$Query");
} 
?>
