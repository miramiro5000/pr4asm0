<?php include("header4.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
   
    
<div class="container mt-5">
        <div class="row"> 
       <div class="col-lg-3 " >
        <form action="manage_card 4.php" method="POST">
        <div class="card">
            <img src="ن.jpg" class="card-img-top" alt="...">
            <div  class="card-body text-center">
              <h5 class="card-title">bag 1</h5>
              <p class="card-text">price: rs.1125</p>
              <button  type="submit" name="add_to_card"  class="btn btn-danger">add to card</button>
              <input type="hidden" name="item_name"value="bag 1">
              <input type="hidden" name="price"value="1125">

            </div>
            
</form>
          </div>
       </div>
       <div class="col-lg-3 " >
        <form action="manage_card 4.php" method="POST">
        <div class="card">
            <img src="ه.jpg" class="card-img-top" alt="...">
            <div  class="card-body text-center">
              <h5 class="card-title">bag 2</h5>
              <p class="card-text">price: rs.6987</p>
              <button   type="submit"  name="add_to_card" class="btn btn-danger">add to card</button>
              <input type="hidden" name="item_name"value="bag 2">
              <input type="hidden" name="price"value="6987">

            </div>
</form>
</div>
       </div>
       <div class="col-lg-3 " >
        <form action="manage_card 4.php" method="POST">
        <div class="card">
            <img src="r.jfif" class="card-img-top" alt="...">
            <div  class="card-body text-center">
              <h5 class="card-title">bag 3</h5>
              <p class="card-text">price: rs.6987</p>
              <button   type="submit" name="add_to_card" class="btn btn-danger">add to card</button>
              <input type="hidden" name="item_name"value="bag 3">
              <input type="hidden" name="price"value="6987">

            </div>
</form>
</div>
       </div>
       <div class="col-lg-3 " >
        <form action="manage_card 4.php" method="POST">
        <div class="card">
            <img src="oip.jfif" class="card-img-top" alt="...">
            <div  class="card-body text-center">
              <h5 class="card-title">bag 4</h5>
              <p class="card-text">price: rs.325</p>
              <button   type="submit" name="add_to_card" class="btn btn-danger">add to card</button>
              <input type="hidden" name="item_name"value="bag 4">
              <input type="hidden" name="price"value="325">

            </div>
</form>
</div>
       </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>