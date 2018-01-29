<?php
$cars = array("Volvo", "BMW", "Toyota");
print_r($cars);
echo "<br><br>";
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>
<form method="post" action=""><br>
    <button type="submit" name="source">Show Source Code</button>
    <a href="index.php"><button type="button" name="index" >Back to Menu</button></a><br>
</form>
<?php
if(isset($_POST['source']))
    show_source(__FILE__);
?>