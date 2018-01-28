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

