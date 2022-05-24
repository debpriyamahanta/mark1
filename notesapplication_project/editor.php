
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>iNotes Editor</title>
	<!--Bootstrap Cdn -->
	<link rel="stylesheet"
		href=
"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
		integrity=
"sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
		crossorigin="anonymous">
	<!-- fontawesome cdn For Icons -->
	<link rel="stylesheet"
		href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
		integrity=
"sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ=="
		crossorigin="anonymous" />
	<link rel="stylesheet"
		href=
"https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
		integrity=
"sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
		crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="editor.css">
<link rel="stylesheet" href="navbar.css">

</head>
<!--Body start-->

<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">iNotes</a>
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
	<section class="">
		<h1 class="shadow">iNotes Editor</h1>
		<div class="flex-box">
			<div class="row">
				<div class="col">
					<!-- Adding different buttons for
						different functionality-->
					<!--onclick attribute is added to give
						button a work to do when it is clicked-->
					<button type="button"
							onclick="f1()"
							class=" shadow-sm btn btn-outline-secondary"
							data-toggle="tooltip"
							data-placement="top"
							title="Bold Text">
			Bold</button>
					<button type="button"
							onclick="f2()"
							class="shadow-sm btn btn-outline-success"
							data-toggle="tooltip"
							data-placement="top"
							title="Italic Text">
			Italic</button>
					<button type="button"
							onclick="f3()"
							class=" shadow-sm btn btn-outline-primary"
							data-toggle="tooltip"
							data-placement="top"
							title="Left Align">
			<i class="fas fa-align-left"></i></button>
					<button type="button"
							onclick="f4()"
							class="btn shadow-sm btn-outline-secondary"
							data-toggle="tooltip"
							data-placement="top"
							title="Center Align">
			<i class="fas fa-align-center"></i></button>
					<button type="button"
							onclick="f5()"
							class="btn shadow-sm btn-outline-primary"
							data-toggle="tooltip"
							data-placement="top"
							title="Right Align">
			<i class="fas fa-align-right"></i></button>
					<button type="button"
							onclick="f6()"
							class="btn shadow-sm btn-outline-secondary"
							data-toggle="tooltip"
							data-placement="top"
							title="Uppercase Text">
			Upper Case</button>
					<button type="button"
							onclick="f7()"
							class="btn shadow-sm btn-outline-primary"
							data-toggle="tooltip"
							data-placement="top"
							title="Lowercase Text">
			Lower Case</button>
					<button type="button"
							onclick="f8()"
							class="btn shadow-sm btn-outline-primary"
							data-toggle="tooltip"
							data-placement="top"
							title="Capitalize Text">
			Capitalize</button>
					<button type="button"
							onclick="f9()"
							class="btn shadow-sm btn-outline-primary side"
							data-toggle="tooltip"
							data-placement="top"
							title="Tooltip on top">
			Clear Text</button>
				</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-3 col-sm-3">
			</div>
			<div class="col-md-6 col-sm-9">
				<div class="flex-box">
                    <form action="" method="post">
                    <textarea id="textarea1"
							class="input shadow"
							name="editor"
							rows="15"
							cols="100"
							placeholder="Your text here ">
					</textarea>
                    <div class="form-group" align="center">
                        <input class="p-3 w-25" type="submit" name="submit" value="Add Notes">
                    </div>
                    </form>
					
				</div>
			</div>
			
		</div>
	</section>
	
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
<script>
    function f1() {
	//function to make the text bold using DOM method
	document.getElementById("textarea1").style.fontWeight = "bold";
}

function f2() {
	//function to make the text italic using DOM method
	document.getElementById("textarea1").style.fontStyle = "italic";
}

function f3() {
	//function to make the text alignment left using DOM method
	document.getElementById("textarea1").style.textAlign = "left";
}

function f4() {
	//function to make the text alignment center using DOM method
	document.getElementById("textarea1").style.textAlign = "center";
}

function f5() {
	//function to make the text alignment right using DOM method
	document.getElementById("textarea1").style.textAlign = "right";
}

function f6() {
	//function to make the text in Uppercase using DOM method
	document.getElementById("textarea1").style.textTransform = "uppercase";
}

function f7() {
	//function to make the text in Lowercase using DOM method
	document.getElementById("textarea1").style.textTransform = "lowercase";
}

function f8() {
	//function to make the text capitalize using DOM method
	document.getElementById("textarea1").style.textTransform = "capitalize";
}

function f9() {
	//function to make the text back to normal by removing all the methods applied
	//using DOM method
	document.getElementById("textarea1").style.fontWeight = "normal";
	document.getElementById("textarea1").style.textAlign = "left";
	document.getElementById("textarea1").style.fontStyle = "normal";
	document.getElementById("textarea1").style.textTransform = "capitalize";
	document.getElementById("textarea1").value = " ";
}

</script>

