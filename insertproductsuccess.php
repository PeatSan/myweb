<?php
$objConnect=mysqli_connect("localhost","root","") or die("can't connect to database");
mysqli_select_db($objConnect,"DBProduct");
mysqli_query($objConnect ,"SET NAMES utf8");

$sql_insert ="INSERT INTO Product(ProductId, Price, Deleated, ProductName, CDate, ModDate) 
VALUES ('$_GET[ProductId]','$_GET[Price]','$_GET[Deleated]','$_GET[ProductName]','$_GET[CDate]','$_GET[ModDate]')";

$result=mysqli_query($objConnect, $sql_insert);

if(!$result) {
echo "Can't Insert!!!<br>";
echo "<br>";
#echo "<a href='select.php'>"."กลับหน้าหลัก"."</a>";
} else {
    echo '<script type="text/javascript">';
    echo ' alert("เพิ่มข้อมูลสำเร็จ")';  //not showing an alert box.
    echo '</script>';
echo "<a href='table.php'>"."กลับหน้าหลัก"."</a>";
}
?>

