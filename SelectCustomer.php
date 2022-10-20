<?php 
include "connect.php"; 
?>

<?php 
$sql = "SELECT * FROM customer";
$result = $conn->query($sql);

echo"<h1 class='text-center'>แก้ไขข้อมูล</h1>";
echo "<body style='background-color:silver'>";

echo"<table class='table'>";
echo"<thead class='thead-dark'>";
  echo"<tr>";
  
   echo" <th scope='col'>CustomerId</th>";
    echo"<th scope='col'>CustomerName</th>";
    echo"<th scope='col'>Location</th>";
    echo"<th scope='col'>Email</th>";
    echo"<th scope='col'>DateofBirith</th>";
    echo"<th scope='col'>C-Date</th>";
    echo"<th scope='col'>Mod-Date</th>";
    echo"<th scope='col'>PostCode</th>";
  echo"</tr>";
  echo"</thead>";
  


if($result-> num_rows>0) {
    //output data of each row
    while($row = $result->fetch_assoc()) {
        
       
          echo" <tbody>";
          echo"<tr>";
          echo"<th><a href='editcustomer.php?CustomerId=$row[CustomerId]'>".$row['CustomerId']."</th>";
          echo" <td>".$row['CustomerName']."</td>";
          echo" <td>".$row['Location']."</td>";
          echo" <td>".$row['Email']."</td>";
          echo" <td>".$row['DateofBirth']."</td>";
          echo" <td>".$row['CDate']."</td>";
          echo" <td>".$row['ModDate']."</td>";
          echo" <td>".$row['PostCode']."</td>";
          echo"</tr>";
          echo" </tbody>";
        #  "<th scope='col'>"
      
    
        
    
    }
}
    else {
        echo "0 result";
    }

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
   

<div class="form-group">
<a href="insertcustomers.php" class="btn btn-success btn-lg active" role="button" aria-pressed="true">เพิ่ม</a>
<a href="selectcustomer.php" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">แก้ไข</a>

    <a href="index.html" class="btn btn-primary">กลับสู่หน้าหลัก</a>
    </div>

</body>
</html>