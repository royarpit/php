<?php
for($num=1;$num<=15;$num++)
{	
	$fact=1;
	for($i=1;$i<=$num;$i++)
		$fact*=$i;
	echo "Factorial of $num = $fact"."<br>";
}
?>
<form method="post" action=""><br>
	<button type="submit" name="source">Show Source Code</button>
	<a href="index.php"><button type="button" name="index" >Back to Menu</button></a><br>
</form>
<?php
if(isset($_POST['source']))
	show_source(__FILE__);
?>
