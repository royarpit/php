<form method="post" action="">
	Factorial calculator!<br><br>
	<input type="text" name="fact" placeholder="Enter a number" value="<?php if(isset($_POST['fact'])){echo $_POST['fact'];} ?>">
	<input type="submit" name="submit" value="Submit"><br>
</form>

<?php
if(isset($_POST['fact']))
{
	$num=$_POST['fact'];
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
