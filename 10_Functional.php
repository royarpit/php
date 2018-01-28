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