<?php
include("connection.php");
if (isset($_POST['submit'])){
    
  $email=$_POST['email'];
$password=$_POST['password'];

$query="SELECT * FROM  sign_up WHERE name='$email' OR email= '$email' ";

$result=mysqli_query($conn,$query);
$num=mysqli_num_rows($result);

if ($num==1){
  header("location:crud_application.php");
}
else {
  echo "Error Occured !!";
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
    <style>
      p{
      
      }
    </style>
  </head>
  <body>
   
            <nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand text-danger font-weight-bold " href="index.php">iNotes</a>
    <ul class="navbar-nav mr-auto">
     
      <li class="nav-item">
        <a class="nav-link text-primary" href="index.php">Home</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link text-primary" href="about_us.php" tabindex="-1" aria-disabled="true">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="contact_us.php" tabindex="-1" aria-disabled="true">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="sign_up.php" tabindex="-1" aria-disabled="true">Sign Up</a>
      </li>
      
    </ul>
  </div>
</nav>
 <div class="container my-5">
     <div class="row">
         <div class="col-md-12">
         <p class="shadow p-5 bg-warning font-weight-bold justify-content-center">
         iNotes is a Note Book Web Application  Build With JAVASCEIPT PHP & MySQL. Ii is a replication of the word editors we all are familiar with and,  which we use quite often on a daily basis. The text edited in the editor is stored in  the desired location. Notepad is a very basic text editor that has been part of  windows for a very long time. It is very excellent for writing work, relatively  short text documents that you want to save in plain text and that is not all you can  do with it.
         </p>
         </div>
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
//   function sign_in_form(){
//     if (document.getElementById('email').value=="") {
//       alert("Plz Enter Your Email");
//       return false;
//     }
//     else{
//       return true;
//     }
// }
</script>



