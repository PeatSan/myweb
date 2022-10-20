<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
$db = mysqli_select_db($objConnect, "DBProduct");
mysqli_query($objConnect, "SET NAMES utf8");

$sql_update="UPDATE Product SET ProductId='$_GET[ProductId]',Price='$_GET[Price]',Deleated='$_GET[Deleated]',ProductName='$_GET[ProductName]',
CDate='$_GET[CDate]',ModDate='$_GET[ModDate]'
 WHERE ProductId='$_GET[ProductId]' ";

$result= mysqli_query( $objConnect, $sql_update);

if(!$result) {
echo "Can't Update!!!<br>";
} else {
    echo '<script type="text/javascript">';
    echo ' alert("แก้ไขข้อมูลสำเร็จ")';  //not showing an alert box.
    echo '</script>';
echo "<a href='table.php'>"."กลับหน้าหลัก"."</a>";
}
?>