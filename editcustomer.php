<?php 
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
mysqli_select_db( $objConnect, "DBProduct");
mysqli_query($objConnect, "SET NAMES utf8");

$sql="SELECT * FROM Customer WHERE CustomerId='$_GET[CustomerId]'";
$result=mysqli_query($objConnect ,$sql);
$data = mysqli_fetch_array($result, MYSQLI_BOTH)

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>แก้ไขข้อมูลลูกค้า</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <div class="container my-3">
</head>
  <body>
    <h2 class="text-center">แก้ไขข้อมูล</h2>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    
    <form method="GET" action="editcussuccess.php">

<div class="form-group">

    <label for="CustomerId">CustomerId</label>
    <input type="text" name="CustomerId" id="CustomerId"class="form-control" value="<?=$data['CustomerId'];?>"/>
</div>

<div class="form-group">

    <label for="CustomerName">CustomerName</label>
    <input type="text" name="CustomerName" id="CustomerName" class="form-control" value="<?=$data['CustomerName'];?>"/>
</div>
<div class="form-group">

    <label for="Location">Location</label>
    <input type="text" name="Location" id="Location" class="form-control" value="<?=$data['Location'];?>"/>
</div>
<div class="form-group">

    <label for="Email">Email</label>
    <input type="text" name="Email" id="Email" class="form-control" value="<?=$data['Email'];?>"/>
</div>
<div class="form-group">

    <label for="DateofBirth">DateofBirth</label>
    <input type="date" name="DateofBirth" id="DateofBirth" class="form-control" value="<?=$data['DateofBirth'];?>"/>
</div>
<div class="form-group">

    <label for="CDate">C-Date</label>
    <input type="date" name="CDate" id="CDate" class="form-control" value="<?=$data['CDate'];?>"/>
</div>
<div class="form-group">

    <label for="ModDate">Mod-Date</label>
    <input type="date" name="ModDate" id="ModDate" class="form-control" value="<?=$data['ModDate'];?>"/>
</div>
<div class="form-group">

    <label for="PostCode">PostCode</label>
    <input type="text" name="PostCode" id="PostCode" class="form-control" value="<?=$data['PostCode'];?>"/>
</div>
<br>
<div class="form-group">
    <input type="submit" VALUES="" class="btn btn-success">

    <input type="reset" VALUES="" class="btn btn-danger">
    <a href="index.html" class="btn btn-primary">กลับสู่หน้าหลัก</a>
    </div>

    <body style='background-color:silver'>




</form>
</div>
</body>
</html>