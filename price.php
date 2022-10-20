<?php
$price = $_GET["p"];
$total = $_GET["t"];

$result = $price * $total;
$vat = $result *0.07;
$net = $result + $vat;


echo "ราคารวม = $price <br>"; 
echo "ราคาต่อชิ้น = $total <br>";
echo "ราคารวม = $result <br>"; 
echo "ภาษีมูลค่าเพิม = $vat <br>";
echo "ราคาสุทธิ =$net";

?>