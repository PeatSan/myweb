<?php
$objConnect=mysqli_connect("localhost","root","") or die("can't connect to database");
mysqli_select_db($objConnect,"DBProduct");
mysqli_query($objConnect ,"SET NAMES utf8");

$sql_insert ="INSERT INTO Promotion(PromotionId, PromotionName, CDate, ModDate) 
VALUES ('$_GET[PromotionId]','$_GET[PromotionName]','$_GET[CDate]','$_GET[ModDate]')";

$result=mysqli_query($objConnect, $sql_insert);

if(!$result) {
echo "Can't Insert!!!<br>";
echo "<br>";
echo "<a href='selectpromotion.php'>"."กลับหน้าหลัก"."</a>";
} else {
    echo '<script type="text/javascript">';
    echo ' alert("เพิ่มข้อมูลสำเร็จ")';  //not showing an alert box.
    echo '</script>';
echo "<br>";
echo "<a href='selectpromotion.php'>"."กลับหน้าหลัก"."</a>";
} 
?>