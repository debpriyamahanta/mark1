<?php
session_start();
include("connection.php");

if (isset($_POST['submit']))  {
$name=$_POST['name'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$contact=$_POST['contact'];

$query="SELECT * FROM  sign_up WHERE name='$name' ";

$result=mysqli_query($conn,$query);
$num=mysqli_num_rows($result);

if ($num==1) {
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Oppppps!!</strong> Name Has Already Taken.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
}
else{
    $insert="INSERT INTO sign_up (name,email,password,contact) VALUES('$name','$email','$password','$contact')";

    mysqli_query($conn,$insert);
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Hurray</strong> You are Now Signed Up with iNotes.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="navbar.css">
    <title>iNotes || Your Daily Upadates on Your Hand</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand text-danger font-weight-bold " href="index.php">iNotes</a>
    <ul class="navbar-nav mr-auto">
          <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
            <li class="nav-item">
        <a class="nav-link " href="about_us.php" tabindex="-1" aria-disabled="true">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="contact_us.php" tabindex="-1" aria-disabled="true">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-primary" href="sign_up.php" tabindex="-1" aria-disabled="true">Sign Up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="index.php" tabindex="-1" aria-disabled="true">Sign In</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container my-2">
    <div class="row">
        <div class="col-md-12">
        <form method="post" action="sign_up.php" name="sign_in_form" onsubmit="">
          <h2 class="">Sign Up  </h2>
          <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control p-4" id="name" aria-describedby="name" placeholder="Enter Name">
    
  </div>
   <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" name="email" class="form-control p-4" id="email" aria-describedby="email" placeholder="Enter Email">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control p-4" id="password" aria-describedby="password" placeholder="Enter Password">
    
  </div>
  <div class="form-group">
    <label for="cpassword">Confirm Password</label>
    <input type="password" name="cpassword" class="form-control p-4" id="cpassword" aria-describedby="cpassword" placeholder="Enter Confirm Password">
    
  </div>
  <div class="form-group">
    <label for="contact	">Contact</label>
    <input type="number" name="contact" class="form-control p-4" id="contact" aria-describedby="contact	" placeholder="Enter Contact Number">
    
  </div>
  
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
   <div class="form-group" align="center">
    <input class="p-2 w-25" type="submit" name="submit" value="Sign Up" > 
   </div>
</form>
<div class="sign-up" align="center"><h4 class="d-inline"> Already Have Account </h4> <a href="" class="text-decoration-none d-inline sign-up-option">Sign In</a></div>

        </div>

    
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php

include("fotter.php");
?>
<script>


</script>