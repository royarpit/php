<form method="post" action="">
	Enter a string :-
	<input type="text" name="txt" value="<?php if(isset($_POST['txt'])){echo $_POST['txt'];} ?>">
	<input type="submit" name="sub" value="Submit">
</form>

<?php
	if(isset($_POST['txt']))
	{
		$actual = $_POST['txt'];
		$upper = strtoupper($actual);
		$lower = strtolower($actual);

		if($actual === $upper)
			echo "String is in UPPER-CASE.";
		elseif($actual === $lower)
			echo "String is in lower-case.";
		else
			echo "String is in Mixed-Case.";

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
