<?php
require 'connect.php';
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  if($_FILES["Image"]["error"] == 4){
    echo
    "<script> alert('Image Does Not Exist'); </script>"
    ;
  }
  else{
    $fileName = $_FILES["Image"]["name"];
    $fileSize = $_FILES["Image"]["size"];
    $tmpName = $_FILES["Image"]["tmp_name"];

    $validImageExtension = ['jpg', 'jpeg', 'png'];
    $imageExtension = explode('.', $fileName);
    $imageExtension = strtolower(end($imageExtension));
    if ( !in_array($imageExtension, $validImageExtension) ){
      echo
      "
      <script>
        alert('Invalid Image Extension');
      </script>
      ";
    }
    else if($fileSize > 1000000){
      echo
      "
      <script>
        alert('Image Size Is Too Large');
      </script>
      ";
    }
    else{
      $newImageName = uniqid();
      $newImageName .= '.' . $imageExtension;

      move_uploaded_file($tmpName, 'img/' . $newImageName);
      $query = "INSERT INTO Product VALUES('$ProductId', '$Price', '$Deleated', '$ProductName', '$CDate','ModDate', 'Image')";
      mysqli_query($conn, $query);
      echo
      "
      <script>
        alert('Successfully Added');
        document.location.href = 'table.php';
      </script>
      ";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Upload Image File</title>
  </head>
  <body>
    <form class="" action="" method="post" autocomplete="off" enctype="multipart/form-data">
      <label for="ProductId">ProductId : </label>
      <input type="text" name="ProductId" id = "ProductId" required value=""> <br>
      <label for="Price">Price : </label>
      <input type="text" name="Price" id = "Price"  value=""> <br>
      <label for="Deleated">Price : </label>
      <input type="text" name="Deleated" id = "Deleated"  value=""> <br>
      <label for="ProductName">Price : </label>
      <input type="text" name="ProductName" id = "ProductName"  value=""> <br>
      <label for="CDate">Price : </label>
      <input type="date" name="CDate" id = "CDate"  value=""> <br>
      <label for="ModDate">Price : </label>
      <input type="date" name="ModDate" id = "ModDate"  value=""> <br>
      <label for="Image">Price : </label>
      <input type="file" name="Image" id = "Image"  value=""> <br>
    </form>
    <br>
    <a href="data.php">Data</a>
  </body>
</html>