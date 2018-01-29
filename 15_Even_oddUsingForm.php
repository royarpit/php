<form method="post" action="">
	Odd or Even?<br><br>
	<input type="text" name="num" placeholder="Enter a number" value="<?php if(isset($_POST['num'])){echo $_POST['num'];} ?>">
	<input type="submit" name="submit" value="Submit"><br><br>
</form>

<?php
function OddEven($n)
{
	if($n%2==0)
		echo "The number $n is EVEN"."<br>";
	else
		echo "The number $n is ODD"."<br>";
}
if(isset($_POST['num']))
	OddEven($_POST['num']);
?>
<form method="post" action=""><br>
	<button type="submit" name="source">Show Source Code</button>
	<a href="index.php"><button type="button" name="index" >Back to Menu</button></a><br>
</form>
<?php
if(isset($_POST['source']))
	show_source(__FILE__);
?>
