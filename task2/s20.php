<?php
function factnum($n){
	if($n<=1){
		return 1;
	}
	else{
		return $n*factnum($n-1);
	}
}
$n=5;
$fact=factnum($n);
echo "Factorial=$fact";

?>