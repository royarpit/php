<?php
$a = array('I','am','a','student','of','Amity','University');
echo "Input Array:-<br>";
print_r($a);
echo "<br><br>After using implode() function :-<br>";
echo implode(" ",$a);
?>

<form method="post" action=""><br>
    <button type="submit" name="source">Show Source Code</button>
    <a href="index.php"><button type="button" name="index" >Back to Menu</button></a><br>
</form>
<?php
if(isset($_POST['source']))
    show_source(__FILE__);
?>
