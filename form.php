<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- Bootstrap core CSS -->
     <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">


<!-- Additional CSS Files -->
<link rel="stylesheet" href="assets/css/fontawesome.css">
<link rel="stylesheet" href="assets/css/templatemo-cyborg-gaming.css">
<link rel="stylesheet" href="assets/css/owl.css">
<link rel="stylesheet" href="assets/css/animate.css">
<link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;1,100;1,300&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,200;0,300;1,200&display=swap");

        * {
        font-family: "Roboto", "Kanit", sans-serif;
        }
        .box{
            text-align: center;
            margin-top: 10%;    
        }
        img{
            width: 80%;
        }
        
    </style>

</head>
<body>


    <div class="box">
        <img src="https://notebookspec.com/web/wp-content/uploads/2020/07/blue-screen-t1-780x439.jpg"  width="100" height="400"alt="">
        <?php

        $username = $_POST['firstname'];
        $password = $_POST['password'];

        $username = strtoupper($username);
         echo "<h1>Welcome<br>$username</h1> "."<br>";
        
        ?>
        
        <a href="profile.html">กลับหน้าบัญชี</a>   

         <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>
    </div>
</body>
</html>

