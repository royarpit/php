<?php
	$a=10; $b=20;
	if($a<$b)
		echo "b is greater";
	elseif($a>$b)
		echo "a is greater";
	else
		echo "a is equal to b";
?>
<form method="post" action=""><br>
	<button type="submit" name="source">Show Source Code</button>
	<a href="index.php"><button type="button" name="index" >Back to Menu</button></a><br>
</form>
<?php
if(isset($_POST['source']))
	show_source(__FILE__);
?>
