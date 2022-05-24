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
     <link rel="stylesheet" href="contact_us.css">
    <title>iNotes || Your Daily Upadates on Your Hand</title>
    
    </style>
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
        <a class="nav-link text-primary" href="contact_us.php" tabindex="-1" aria-disabled="true">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="sign_up.php" tabindex="-1" aria-disabled="true">Sign Up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="index.php" tabindex="-1" aria-disabled="true">Sign In</a>
      </li>
    </ul>
  </div>
</nav>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<h3 class="my-2" align="center ">Feel Free To Get In Touch With Us</h3>

<div class="container">
  <form action="">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="fname" placeholder="Your First Name">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lname" placeholder="Your Last Name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write Your Queries.." style="height:200px"></textarea>

    <div class="submit" align="center">
    <input class="w-50" type="submit" name='submit' value="Submit">
    </div>
  </form>
</div>

</body>
</html>

<?php
include("fotter.php");
?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
