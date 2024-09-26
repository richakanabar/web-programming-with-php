<?php

$num=121;
$p=$num;
$rev=0;
while($num != 0)
{
	$rev=$rev*10+$num % 10;
	$num=(int)($num/10);
}
if($rev==$p)
{
	echo "Num is palindrome";
}
else
{
	echo "Num is not palindrome";
}
?>