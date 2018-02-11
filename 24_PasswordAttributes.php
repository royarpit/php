<form method="post" action="">
	Enter your password :-
	<input type="text" name="a" value="<?php if(isset($_POST['a'])){echo $_POST['a'];} ?>">
	<br><br>
	<input type="submit" name="submit" value="Submit">
</form>

<?php
if(isset($_POST['a']))
{
	$pass = $_POST['a'];

	$len = strlen($pass);
	$split = str_split($pass);

	$upper = 0;$lower = 0;$num = 0;
	for($i=0;$i<strlen($pass);$i++)
		if(is_numeric($split[$i]))
			$num++;
		elseif($split[$i] == strtoupper($split[$i]))
			$upper++;
		elseif($split[$i] == strtolower($split[$i]))
			$lower++;

	echo "Length of password = $len <br>";
	echo "Number of Upper-Case characters = $upper <br>";
	echo "Number of Lower-Case characters = $lower <br>";
	echo "Number of Numeric characters = $num <br>";
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
