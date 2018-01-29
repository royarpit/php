<?php
function yesStatic()
{
    static $x = 0;
    echo $x++ . "<br>";
}

function noStatic()
{
    $x = 0;
    echo $x++ . "<br>";
}

echo "Static variable used :-" . "<br>";
for ($i = 0; $i < 5; $i++)
    yesStatic();
echo "<br>";
echo "Static variable NOT used :-" . "<br>";
for ($i = 0; $i < 5; $i++)
    noStatic();
?>
<form method="post" action=""><br>
    <button type="submit" name="source">Show Source Code</button>
    <a href="index.php"><button type="button" name="index" >Back to Menu</button></a><br>
</form>
<?php
if(isset($_POST['source']))
    show_source(__FILE__);
?>

