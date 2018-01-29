<?php
echo "My first Php program"."<br><br>";
?>
<form method="post" action="">
<button type="submit" name="source">Show Source Code</button>
<a href="index.php"><button type="button" name="index" >Back to Menu</button></a><br>
</form>
<?php
if(isset($_POST['source']))
    show_source(__FILE__);
?>

