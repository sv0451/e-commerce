<?php
include "../shared/vendor-authguard.php";
include "menu.html";
//echo '<h1>vendor home works </h1>'
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            .auth-parent
            {
                display:flex;
                justify-content:space-around;

            }
            </style>
</head>
<body>

<div class="d-flex justify-content-center align-items-center vh-100">
    <form enctype="multipart/form-data" action="upload.php" method="post" class="w-25 bg-warning p-3">

      <input required class="form-control mt-2" type="text" name="name" placeholder="product name">
      <input required class="form-control mt-2" type="number" name="price" placeholder="product price">
      <textarea required class="form-control mt-2" name="detail" id="" cols="30" rows="5"></textarea>

      <input required class="form-control mt-2" name="pdtimg" type="file" accept=".jpg">

      <div class="text-center">
        <button class="mt-3 btn btn-danger">upload</button>
        </div>

        </form>
        </div>

</body>
</html>

