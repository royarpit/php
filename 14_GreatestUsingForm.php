<form method="post" action="">
	Enter the value of A :-
	<input type="text" name="a" value="<?php if(isset($_POST['a'])){echo $_POST['a'];} ?>">
	<br>Enter the value of B :-
	<input type="text" name="b" value="<?php if(isset($_POST['b'])){echo $_POST['b'];} ?>">
	<br>Enter the value of C :-
	<input type="text" name="c" value="<?php if(isset($_POST['c'])){echo $_POST['c'];} ?>">
	<br><br>
	<input type="submit" name="submit" value="Submit">
</form>

<?php
	if(isset($_POST['a']))
	{
		$a=$_POST['a']; $b=$_POST['b']; $c=$_POST['c'];

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
	}

?>