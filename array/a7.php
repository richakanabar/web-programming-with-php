<?php
$country=array("india"=>"new delhi",
				"rusia"=>"moscow",
				"france"=>"paris",
				"italy"=>"rome",
				"ireland"=>"dublin");
print_r($country);			
echo "<br>";
$country["rusia"]="ABC";
//print_r($country);
foreach($country as $key => $value){
	echo $key;
	echo "<br>";
	echo $value;
	echo "<br>";
}
?>