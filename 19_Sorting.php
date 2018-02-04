<?php
$a=array(array(3,7,2,13),array(12,89,2,6),array(5,8,1,10));

echo "Unsorted Array :- <br> ";
print_r($a);
echo "<br><br>";
?>

<form method="post" action="">
    Select an option :-<br>
    <input type="submit" name="ascending" value="Ascending Order">
    <input type="submit" name="descending" value="Descending Order"><br><br>
</form> 

<?php
for ($row = 0,$i=0; $row < 3;$row++) 
 	for ($col = 0; $col < 4; $col++,$i++)
   		$myArray[$i]=$a[$row][$col]; 

if(isset($_POST['ascending']))
{
	echo "Sorted Array in Ascending Order :- <br>";
	sort($myArray);
	print_r($myArray);
}
if(isset($_POST['descending']))
{
	echo "Sorted Array in Descending Order :- <br>";
	rsort($myArray);
	print_r($myArray);
}
 ?>
 <form method="post" action=""><br>
    <button type="submit" name="source">Show Source Code</button>
    <a href="index.php"><button type="button" name="index" >Back to Menu</button></a><br>
</form>
<?php
if(isset($_POST['source']))
    show_source(__FILE__);
?>
