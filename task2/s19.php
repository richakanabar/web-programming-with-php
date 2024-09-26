<?php
function check_prime($num)
{
	for($i=2; $i<$num; $i++)
	{
		if($num % $i ==0)
			return 0;
	}
	return 1;
}
$a=check_prime(21);
if($a==0)
	echo "Num is prime \n";
else
	echo "Num is not prime";
?>