<?php

$fruits=array("Mango","Apple","Grapes","Banana","Lichi");
$fruits[5]="Orange";
$fruits[6]="Kiwi";
print_r($fruits);
unset($fruits[0]);
print_r($fruits);
?>