<?php

$city=array(
			array("new delhi"=>2000,"abc","india"),
			array("rome"=>5000,"xyz","italy"));
			
foreach($city as $row)
{
	foreach($row as $value)
	{
		echo "<br>";
		echo "$value";
		echo "<br>";
	}
}
?>