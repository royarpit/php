<?php

$a = "I am a student of Amity University";
echo "Original String:<br>$a <br><br>After using explode() function :-<br>";
print_r(explode(" ",$a));

?>

<form method="post" action=""><br>
    <button type="submit" name="source">Show Source Code</button>
    <a href="index.php"><button type="button" name="index" >Back to Menu</button></a><br>
</form>
<?php
if(isset($_POST['source']))
    show_source(__FILE__);
?>
