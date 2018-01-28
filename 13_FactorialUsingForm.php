<form method="post" action="">
	Factorial calculator!<br><br>
	<input type="text" name="fact" placeholder="Enter a number" value="<?php if(isset($_POST['fact'])){echo $_POST['fact'];} ?>">
	<input type="submit" name="submit" value="Submit"><br><br>
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