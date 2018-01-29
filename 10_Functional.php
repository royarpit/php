<?php
$a=10;
echo $a;
function display($i=12)
{
    global $a;
    $i=$i+$a;
    echo"<br>";
    echo $i;
}
display();
?>
<form method="post" action=""><br>
    <button type="submit" name="source">Show Source Code</button>
    <a href="index.php"><button type="button" name="index" >Back to Menu</button></a><br>
</form>
<?php
if(isset($_POST['source']))
    show_source(__FILE__);
?>
