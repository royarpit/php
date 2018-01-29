<?php
	$a=30; $b=20; $c=20;

	echo "A = ".$a."<br>";
	echo "B = ".$b."<br>";
	echo "C = ".$c."<br><br>";

	if($b<=$a && $c<=$a)
		if($a==$b && $a==$c)
			echo "All 3 numbers are equal";
		elseif($a==$b)
			echo "Both A & B are equal to each other and greater than C";
		elseif($a==$c)
			echo "Both A & C are equal to each other and greater than B";
		else
			echo "A is greatest";
	elseif($a<$b && $c<=$b)
		if($b==$c)
			echo "Both B & C are equal to each other and greater than A";
		else
			echo "B is greatest";
	else
		echo "C is greatest";
?>
<form method="post" action=""><br>
	<button type="submit" name="source">Show Source Code</button>
	<a href="index.php"><button type="button" name="index" >Back to Menu</button></a><br>
</form>
<?php
if(isset($_POST['source']))
	show_source(__FILE__);
?>
