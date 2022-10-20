<?php 
$objConnect = mysqli_connect("localhost","root","")or die("can't connect to database");
$db = mysqli_select_db($objConnect, "DBProduct");
mysqli_query($objConnect, "SET NAMES utf8");

$sql = "SELECT * FROM Product";
$result = $objConnect->query($sql);

echo "<br>";
if ($result->num_rows > 0) {
  // head of table
 echo "<table border='2px'>";
 echo "<tr bgcolor='blue'>";   echo "<th width='200px'>ProductId"; echo "</th>";echo "<th> Price: ";
 echo "<th> Deleated: ";echo "<th> ProductName: ";echo "<th> C-Date: ";echo "<th> ModDate: ";
 echo "</tr>"; 

// output data of each row
 while($row = $result->fetch_assoc()) {
    echo "<tr bgcolor='gray'>";
 echo "<td><a href='editproduct.php?ProductId=$row[ProductId]'>".$row["ProductId"]."</td>"."</a><td>"."</a>".$row["Price"]."</td>"
 ."<td>".$row["Deleated"]."</td>"."<td>".$row["ProductName"]."</td>"."<td>".$row["CDate"]."</td>"."<td>".$row["ModDate"]."</td>";
 
 echo "</tr>"; 

  }
  echo "</table>";
}
else {
    echo "0 results";
  }

  //menu add data to table
  echo "<br>";
  echo "<a href='insertproduct.php'>Add New Product</a>";
  
  $objConnect->close();
?>

?>