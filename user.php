<?php
    include 'connect.php';
  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email= $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    try{
    $sql = "insert into crud.crudoperation (name, email, mobile, password) 
    values ( '$name', '$email', '$mobile', '$password' )";
    $conn->exec($sql);
    echo "New record created successfully";
    header('location:display.php'); 
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }  
  }


?>



<!doctype html>
<html lang="en" dir="ltl">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css">

    <title>crud </title>
  </head>
  <body>
 <div class="container">

 <form method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">name</label>
    <input type="text" class="form-control" id="enter your name" name="name" autocomplete="off">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">email</label>
    <input type="text" class="form-control" id="enter your email" name="email" autocomplete="off">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">mobile</label>
    <input type="text" class="form-control" id="enter your number" name="mobile" autocomplete="off">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">password</label>
    <input type="text" class="form-control" id="enter your password" name="password" autocomplete="off">
  </div>


  <button type="submit" name="submit" class="btn btn-primary">Submit</button>

</form>

 </div>
  </body>
</html>