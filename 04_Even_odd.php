<?php
function OddEven($n)
{
	if($n%2==0)
		echo "The number $n is even"."<br>";
	else
		echo "The number $n is odd"."<br>";
}
OddEven(5);
OddEven(12);
OddEven(27);
OddEven(48);
?>
<form method="post" action=""><br>
	<button type="submit" name="source">Show Source Code</button>
	<a href="index.php"><button type="button" name="index" >Back to Menu</button></a><br>
</form>
<?php
if(isset($_POST['source']))
	show_source(__FILE__);
?>