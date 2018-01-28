<?php

function myTest() {
    $x = 5; // local scope
    echo "<p> Variable x inside function is: $x </p>";
}
myTest();

// using x outside the function will generate an error
echo " Variable x outside function is: $x";
?>