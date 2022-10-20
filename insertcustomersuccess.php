<?php
$objConnect=mysqli_connect("localhost","root","") or die("can't connect to database");
mysqli_select_db($objConnect,"DBProduct");
mysqli_query($objConnect ,"SET NAMES utf8");

$sql_insert ="INSERT INTO Customer(CustomerId, CustomerName, Location, Email, DateofBirth, CDate, ModDate, PostCode) 
VALUES ('$_GET[CustomerId]','$_GET[CustomerName]','$_GET[Location]','$_GET[Email]','$_GET[DateofBirth]','$_GET[CDate]',
'$_GET[ModDate]','$_GET[PostCode]')";

$result=mysqli_query($objConnect, $sql_insert);

if(!$result) {
echo "Can't Insert!!!<br>";
echo "<br>";
echo "<a href='selectCus.php'>"."กลับหน้าหลัก"."</a>";
} else {
    echo '<script type="text/javascript">';
    echo ' alert("เพิ่มข้อมูลสำเร็จ")';  //not showing an alert box.
    echo '</script>';
echo "<a href='SelectCus.php'>"."กลับหน้าหลัก"."</a>";
}
?>