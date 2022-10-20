<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>เพิ่มข้อมูลลูกค้า</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <h2 class="text-center">เพิ่มข้อมูล</h2>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <div class="container my-3">
<form action="insertcustomersuccess.php" method="GET">


<div class="form-group">
<label for="CustomerId">CustomerId</label>

<input type="text" name="CustomerId" id="CustomerId" placeholder="C1001" value="" class="form-control" />
</div>
<div class="form-group">
<label for="CustomerName">CustomerName</label>
<input type="text" name="CustomerName" id="CustomerName" placeholder="Johnson" value="" class="form-control"/>
</div>
<div class="form-group">
<label for="Location">Location</label>
<input type="text" name="Location" id="Location"placeholder="Florida"  value="" class="form-control" />
</div>
<div class="form-group">
<label for="Email">Email</label>
<input type="text" name="Email" id="Email" placeholder="NadetKukinaya@hotmail.com" value=""  class="form-control"/>
</div>
<div class="form-group">
<label for="DateofBirth">DateofBirth</label>
<input type="date" name="DateofBirth" id="DateofBirth" value=""  class="form-control"/>
</div>
<div class="form-group">
<label for="CDate">CDate</label>
<input type="date" name="CDate" id="CDate" value=""  class="form-control"/>
</div>
<div class="form-group">
<label for="ModDate">ModDate</label>
<input type="date" name="ModDate" id="ModDate" value=""  class="form-control"/>
</div>
<div class="form-group">
<label for="PostCode">PostCode</label>
<input type="text" name="PostCode" id="PostCode"placeholder="1102"  value=""  class="form-control"/>
</div>
<br>
<div class="form-group">
    <input type="submit" VALUES="" class="btn btn-success">

    <input type="reset" VALUES="" class="btn btn-danger">
    <a href="index.html" class="btn btn-primary">กลับสู่หน้าหลัก</a>
    </div>
  
    <body style='background-color:LightGray'>
</form>
</div>
</body>
</html>