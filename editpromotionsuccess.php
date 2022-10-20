<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
$db = mysqli_select_db($objConnect, "DBProduct");
mysqli_query($objConnect, "SET NAMES utf8");

$sql_update="UPDATE Promotion SET PromotionId='$_GET[PromotionId]',PromotionName='$_GET[PromotionName]',
CDate='$_GET[CDate]',ModDate='$_GET[ModDate]'
 WHERE PromotionId='$_GET[PromotionId]' ";

$result= mysqli_query( $objConnect, $sql_update);

if(!$result) {
echo "Can't Update!!!<br>";
} else {
    echo '<script type="text/javascript">';
    echo ' alert("แก้ไขข้อมูลสำเร็จ")';  //not showing an alert box.
    echo '</script>';
echo "<a href='selectpromotion.php'>กลับสู่หน้าหลัก</a>";
}
?>