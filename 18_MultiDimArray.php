<?php
// Define a multidimensional array
$contacts = array(
	array(
		"name" => "Peter Parker",
		"email" => "peterparker@mail.com",
	),
	array(
		"name" => "Clark Kent",
		"email" => "clarkkent@mail.com",
	),
	array(
		"name" => "Harry Potter",
		"email" => "harrypotter@mail.com",
	)
);
// Access nested value
echo "Peter Parker's Email-id is: " . $contacts[0]["email"];
?>
<form method="post" action=""><br>
	<button type="submit" name="source">Show Source Code</button>
	<a href="index.php"><button type="button" name="index" >Back to Menu</button></a><br>
</form>
<?php
if(isset($_POST['source']))
	show_source(__FILE__);
?>