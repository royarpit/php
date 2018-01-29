<?php
$x = 5;
$y = 10;

function myTest()
{
    global $x,$y;
    $y = $x + $y;
}

myTest();
echo $y; // outputs 15
?>
<form method="post" action=""><br>
    <button type="submit" name="source">Show Source Code</button>
    <a href="index.php"><button type="button" name="index" >Back to Menu</button></a><br>
</form>
<?php
if(isset($_POST['source']))
    show_source(__FILE__);
?>
