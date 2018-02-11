<form method="post" action="">
	Enter a string :-
	<input type="text" name="txt" value="<?php if(isset($_POST['txt'])){echo $_POST['txt'];} ?>"><br><br>
	Replace
	<input type="text" name="old_word" value="<?php if(isset($_POST['old_word'])){echo $_POST['old_word'];} ?>">
	 with
	<input type="text" name="new_word" value="<?php if(isset($_POST['new_word'])){echo $_POST['new_word'];} ?>">
	<br><br>
	<input type="submit" name="sub" value="Submit">
</form>

<?php

if(isset($_POST['txt']) AND isset($_POST['old_word']) AND isset($_POST['new_word']) )
{
	function checkword()
	{
		$str = $_POST['txt'];
		$oldword = $_POST['old_word'];
		$oldwordpos = (int)stripos($str,$oldword);
		for ($i = $oldwordpos,$j = 0; $i < strlen($oldword); $i++,$j++)
			if ($oldword[$j] != $str[$i])
				return 0;
		return 1;
	}

	if(!checkword())
		echo "ERROR: Word not found!";
	else
	{
		$oldword = $_POST['old_word'];
		$newword = $_POST['new_word'];
		$str = $_POST['txt'];
		$explodestr = explode(" ",$str);
		$explodeOldWord = explode(" ",$oldword);
		$explodeNewWord = explode(" ",$newword);

		if(count($explodeOldWord)>1 OR count($explodeNewWord)>1)
			echo "ERROR: Please replace only one word!";
		else
		{
			for ($i = 0; $i < count($explodestr); $i++)
				if ($explodestr[$i] == $explodeOldWord[0])
					$explodestr[$i] = $explodeNewWord[0];

			$newstr = implode(" ",$explodestr);
			echo $newstr;
		}
	}
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
