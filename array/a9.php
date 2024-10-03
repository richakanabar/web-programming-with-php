<?php

$country=array("india"=>"new delhi",
				"rusia"=>"moscow",
				"france"=>"paris",
				"italy"=>"rome",
				"ireland"=>"dublin");
//country in acending				
ksort($country);
print_r($country);
echo "<br>";
//capital in descending
asort($country);
print_r($country);

?>