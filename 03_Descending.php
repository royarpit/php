<?php
echo "Descending Order :- "."<br>";
for($i=10;$i>0;$i--)
    echo$i."<Br>";
?>
<form method="post" action=""><br>
    <button type="submit" name="source">Show Source Code</button>
    <a href="index.php"><button type="button" name="index" >Back to Menu</button></a><br>
</form>
<?php
if(isset($_POST['source']))
    show_source(__FILE__);
?>
