<?php
for($num=1;$num<=15;$num++)
{	
	$fact=1;
	for($i=1;$i<=$num;$i++)
		$fact*=$i;
	echo "Factorial of $num = $fact"."<br>";
}
?>