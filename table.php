<?php 
include "connect.php"; 
?>

<?php 
$sql = "SELECT * FROM product";
$result = $conn->query($sql);

    echo"<div class='container'>";
    echo"<div class='row'>";
    echo"<div class='col-lg-15'>";
    echo"<div class='page-content'>";

    echo"<h2 class='text-center'style='color:white'>รายชื่อสินค้า</h2>";


// echo "<body style='background-color:gray'>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<table class='table'>";
  echo"<tr>";
   echo" <th class='text-danger'scope='col'>ProductId</th>";
    echo"<th class='text-danger' scope='col'>Price</th>";
    echo"<th class='text-danger'scope='col'>Deleated</th>";
    echo"<th class='text-danger'scope='col'>ProductName</th>";
    echo"<th class='text-danger'scope='col'>C-Date</th>";
    echo"<th class='text-danger'scope='col'>Mod-Date</th>";
  echo"</tr>";
  

if($result-> num_rows>0) {
    //output data of each row
    while($row = $result->fetch_assoc()) {
        
       
          echo" <tbody>";
          echo"<tr>";
          echo"<th class='text-warning'scope='col'>". $row['ProductId']."</th>";
          echo" <td class='text-info'>".$row['Price']."</td>";
          echo" <td class='text-success'>".$row['Deleated']."</td>";
          echo" <td class='text-success'>".$row['ProductName']."</td>";
          echo" <td class='text-success'>".$row['CDate']."</td>";
          echo" <td class='text-success'>".$row['ModDate']."</td>";
          echo"</tr>";
          echo" </tbody>";
  
    
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
    <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    
                    <!-- ***** Logo End ***** -->
            
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="index.html">หน้าหลัก</a></li>
                        <li><a href="table.php"class="active">สินค้า</a></li>
                        <li><a href="SelectCus.php" >ลูกค้า</a></li>
                        <li><a href="selectpromotion.php">โปรโมชั่น</a></li>
                        <li><a href="pay.html">การชำระเงิน</a></li>
                        <li><a href="contact.html">ติดต่อเรา</a></li>
                        <li><a href="feedback.html">แสดงความคิดเห็น</a></li>
                        <li><a href="profile.html">บัญชีผู้ใช้งาน <img src="assets/images/profile-header.jpg" alt=""></a></li>
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->
  <!-- <div class="container">
    <div class="row">
    <div class="col-lg-15">
    <div class="page-content"> -->
          <!-- ***** Details Start ***** -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
   

<div class="form-group">
<div class="main-button">
    <a href="insertproduct.php">เพิ่มข้อมูล</a>
    <a href="selectproduct1.php">แก้ไข</a>
    <a href="index.html">กลับสู่หน้าหลัก</a>
    </div>
    </div>

</body>
</html>




<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Cyborg - Awesome HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

  </head>

<body>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>


  </body>

</html>

