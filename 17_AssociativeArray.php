<?php
// Define an associative array
$ages = array("Peter"=>22, "Clark"=>32, "John"=>28);
print_r($ages);
?>
<form method="post" action=""><br>
    <button type="submit" name="source">Show Source Code</button>
    <a href="index.php"><button type="button" name="index" >Back to Menu</button></a><br>
</form>
<?php
if(isset($_POST['source']))
    show_source(__FILE__);
?>
