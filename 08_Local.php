<?php

function myTest() {
    $x = 5; // local scope
    echo "<p> Variable x inside function is: $x </p>";
}
myTest();

// using x outside the function will generate an error
echo " Variable x outside function is: $x";
?>
<form method="post" action=""><br>
    <button type="submit" name="source">Show Source Code</button>
    <a href="index.php"><button type="button" name="index" >Back to Menu</button></a><br>
</form>
<?php
if(isset($_POST['source']))
    show_source(__FILE__);
?>
