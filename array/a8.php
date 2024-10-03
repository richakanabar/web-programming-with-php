<?php
$country=array("india"=>"new delhi",
				"rusia"=>"moscow",
				"france"=>"paris",
				"italy"=>"rome",
				"ireland"=>"dublin");


foreach($country as $key => $value){
	echo $key, $value;
}

echo $country["india"];
?>