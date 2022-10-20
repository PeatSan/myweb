<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
$db = mysqli_select_db($objConnect, "DBProduct");
mysqli_query($objConnect, "SET NAMES utf8");

$sql_update="UPDATE Customer SET CustomerId='$_GET[CustomerId]',CustomerName='$_GET[CustomerName]',Location='$_GET[Location]'
 WHERE CustomerId='$_GET[CustomerId]' ";

$result= mysqli_query( $objConnect, $sql_update);

if(!$result) {
echo "Can't Update!!!<br>";
} else {
    echo '<script type="text/javascript">';
    echo ' alert("แก้ไขข้อมูลสำเร็จ")';  //not showing an alert box.
    echo '</script>';
echo "<a href='selectcus.php'>"."กลับหน้าหลัก"."</a>";
}
?>