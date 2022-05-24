<?php
session_start();

// INSERT INTO `notes` (`id`, `notes_title`, `notes_data`, `time_stamps`) VALUES (NULL, 'mainak notes', 'mainak is a very good boy and he does his work on time', current_timestamp());
include("connection.php");
if (isset($_POST['submit'])){
  if(isset($_POST['snoEdit']))
  {
    echo "yes";
    exit();
  }
    $notes_title=$_POST['notes_title'];
    $notes_data=$_POST['notes_data'];
     
    $insert="INSERT INTO notes (notes_title,notes_data) VALUES('$notes_title',' $notes_data')";
    $result= mysqli_query($conn,$insert);
    if ($result) {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Inserted</strong> Yor Data Has Been Inserted Successfully.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }
    else{
     echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
     <strong>Inserted</strong> Yor Data Has Been Inserted Successfully.
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
       <span aria-hidden="true">&times;</span>
     </button>
   </div>' .$insert. mysqli_error($conn);
    }

}
?>

<?php
// session_strat();
// include("connection.php");
// if (isset($_POST['submit'])){
//   $notes_title=$_POST['notes_title'];
//   $notes_data=$_POST['notes_data'];
   
//   $update="UPDATE notes
//   SET notes_title = 
//   WHERE condition; "

// }

?>







<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="crud.css">
    <title>iNotes</title>
  </head>
  <body>
      <!-- Button trigger modal  -->


<!-- Modal -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="editmodalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" align="center">
        <h5 class="modal-title" id="editmodalLabel" > Edit Record</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <h4 align="">Edit Your Notes</h4>
        <form method="post" name="edit_notes_form" action="crud_application.php" onsubmit="">
          <input type="hidden" name="snoEdit" id="snoEdit">
        <div class="form-group">
      <label for="notes_title">Notes' Title</label>
      <input type="text" name="notes_title" id="notes_titleEdit" class="form-control" placeholder="Enter Your Notes Title">
  </div>
  <div class="form-group">
      <label for="notes_data">Notes' Description</label>
      <input type="text" name="notes_data" id="notes_dataEdit" class="form-control" placeholder="Enter Your Notes Description">
  </div>
  <div class="form-group" align="center">
      <input type="submit" name="submit" value="Update Notes" class="w-50 form-control">
  </div>
</form>
        </div>
    </div>
</div>      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
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
        <a class="nav-link " href="sign_up.php" tabindex="-1" aria-disabled="true">Sign Up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="index.php" tabindex="-1" aria-disabled="true">Sign In</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <h4 align="">Add Your Notes</h4>
        <form method="post" name="add_notes_form" action="crud_application.php?update=true" onsubmit="">
  <div class="form-group">
      <label for="notes_title">Notes' Title</label>
      <input type="text" name="notes_title" id="notes_title" class="form-control" placeholder="Enter Your Notes Title">
  </div>
  <div class="form-group">
      <label for="notes_data">Notes' Description</label>
      <input type="text" name="notes_data" id="notes_data" class="form-control" placeholder="Enter Your Notes Description">
  </div>
  <div class="form-group" align="center">
      <input type="submit" name="submit" value="Add Notes" class="w-50 form-control">
  </div>
</form>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
        

<table class="table table-bordered " id="myTable">
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Notes' Title</th>
      <th scope="col">Notes' Description</th>
      <th scope="col">Date and Time</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php

$select = "SELECT * FROM notes";
$result=mysqli_query($conn,$select);
$sno=0;
while ($row=mysqli_fetch_assoc($result)) {
    $sno=$sno+1;
    echo"<tr>
    <td scope='row'>".$sno."</td>
    <td>".$row['notes_title']."</td>
    <td>".$row['notes_data']."</td>
    <td>".$row['time_stamps']."</td>
    <td>  <button  class='btn btn-primary' data-toggle='modal' data-target='#editmodal' class='edit btn btn-primary btn-sm' ><i class='fa fa-pencil' aria-hidden='true'></i></button>  &nbsp;&nbsp;&nbsp;
      <button  class=' deletes btn btn-primary btn-sm' id='editmodal'><i class='fa fa-trash' aria-hidden='true'></i></button>
    </td>
  </tr>";
    //    echo "Id:--" .$row['id'] ."<br>" . "Notes Title:--" .$row['notes_title'] ."<br>" . "Notes Description:--" .$row['notes_data'] ;
    //    echo "<br>";
}

?>
   
    
  </tbody>
</table>
</div>
</div>
</div>

   <?php
     include("fotter.php ")
   ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script>
    <script>
        edits=document.getElementsByClassName('edit');
        Array.from(edits).forEach((element)=>{
            element.addEventListener("click",(e)=>{
                console.log("edit" , );
                tr=e.target.parentNode.parentNode;
                title=document.getElementsByTagName("td")[0].innerHTML;
                desc=document.getElementsByTagName("td")[1].innerHTML;
                console.log(title,desc);
                notes_titleEdit.value=title;
                notes_dataEdit.value=desc;
                // snoEdit.value=e.target.id
                // console.log(e.target.id)
                $('#editmodal').modal('toggle');

            })
        })

       
        deletes=document.getElementsByClassName('deletes');
        Array.from(deletes).forEach((element)=>{
            element.addEventListener("click",(e)=>{
                console.log("edit" , );
                tr=e.target.parentNode.parentNode;
                title=document.getElementsByTagName("td")[0].innerHTML;
                desc=document.getElementsByTagName("td")[1].innerHTML;
                if (confirm("Press A Button")) {
                  console.log("Yes")
                }
               else{
                console.log("No")

               }
            })
        })

    </script>
  </body>
</html>