<?php include("header4.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
       
<div class="container mt-5">
        <div class="row"> 
       <div class="col-lg-12 text-center border rounded bg-light my-5" >
        <h1>jhhgggg</h1>
           </div>
       <div class="col-lg-8 " >
       <table class="table">
  <thead class="text-center">
    <tr>
      <th scope="col">serial no.</th>
      <th scope="col">item name</th>
      <th scope="col">item price</th>
      <th scope="col">quantity</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody class="text-center">
    <?php
    $total=0;
    if(isset($_SESSION['card']))
    { 
    foreach($_SESSION['card']as $key=>$value)
    {
      $sr=$key+1;
      $total=$total+$value['price'];
      echo"
      <tr>
      <td>$sr</td>
      <td>$value[item_name]</td>
      <td>$value[price]</td>
      <td><input  class='text-center'   type='number' value='$value[quantity]' min='1' max='10'</td>
      <td>
      <form action='manage_card 4.php' method='POST' >
      <button  name='remove_item' class='btn  btn-sm btn-outline-dark'>remove</button>
      <input type='hidden'   name='item_name' value='$value[item_name]' >
      </form>
      </td>
      </tr>
      ";
    }
    }
    ?>
  </tbody>
</table>  
</div>
  <div class="col-lg-3">
    <div class="border bg-light rounded p-4">
    <h4> total:</h4>
    <h5 class="text-right"> <?php   echo $total   ?></h5>
    <br>
    <form>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    cash on dlivery
  </label>
</div>
<br>
    <button  class="btn btn-warning   btn-block">mak purchase</button> 
  </form> 
  </div>
  </div>
</div>
           <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>                        
           </body>
           </html>
           