<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
  <h2 class="text-center">เพิ่มข้อมูลสินค้า</h2>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <div class="container my-3">
    <form action="insertproductsuccess.php" method="GET">

<div class="form-group">
<label for="ProductId">ProductID </label>
<input type="text" name="ProductId" id="ProductId"placeholder="p1001" class="form-control" value=""/>
</div>

<div class="form-group">
<label for="Price">Price</label>
<input type="text" name="Price" id="Price"placeholder="2,500"class="form-control" value=""/>
</div>

<div class="form-group">
<label for="Deleated">Deleated</label>
<input type="text" name="Deleated" id="Deleated"placeholder="1"class="form-control" value="" />
</div>

<div class="form-group">
<label for="ProductName">ProductName</label>
<input type="text" name="ProductName" id="ProductName"placeholder="Gucci" class="form-control"value="" />
</div>

<div class="form-group">
<label for="CDate">C-Date</label>
<input type="date" name="CDate" id="CDate" class="form-control"value="" />
</div>

<div class="form-group">
<label for="ModDate">Mod-Date</label>
<input type="date" name="ModDate" id="ModDate" class="form-control"value="" />
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

