<form method="post" action="">
	Enter a string :-
	<input type="text" name="a" value="<?php if(isset($_POST['a'])){echo $_POST['a'];} ?>">
	<input type="submit" name="submit" value="Submit">
</form>

<?php
	if(isset($_POST['a']))
	{
		$str = strtolower($_POST['a']); //Ensures palindrome check irrespective of case.
		$rev = strrev($str);

		if($str === $rev)
			echo "String is Palindrome!";
		else
			echo "String is NOT Palindrome!";
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
