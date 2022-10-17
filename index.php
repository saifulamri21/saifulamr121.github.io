<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FCOM - Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
  </head>
  <body class="text-center">
<?php
  header( 'Location: https://saifulamri21.github.io/saifulamri21/' );
  exit();
?>
<?php
require('config.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['submit'])){
	echo "hi";
       
	$email =($_REQUEST['email']);
	$password = ($_REQUEST['password']);
	
	//Checking if user existing in the database or not
        $query = "SELECT * FROM `login` WHERE email = '$email' and password = '$password' ";
	
	$result = mysqli_query($con,$query) or die(mysql_error());
	
	$rows = mysqli_num_rows($result);
		
        if($rows==1){
	    $_SESSION['username'] = $username;
            // Redirect user 
	    header("Location: homepage.php");
	}
         else{
	echo "<div class='form'>
<h3>Incorrect login details</h3>
<br/>Click to <a href='login.php'>Login</a></div>";
	}
	}
?>

	<div class="container">
	
		<div class="intro">
		<img src='img\fsktm-small.png' style="width:200px">
		<h1>FCSIT Competition Management System (FCOM)</h1>
		<p>A system developed to assist FSCIT management in managing and tracking their information such as participation and achievement</p>
		</div>
		
		
		<div class="form-signin">
		 <form action="" method="post" name="login">
			<img class="mb-4" src="./logo.png" alt="" height="300">
			<h1 class="h3 mb-3 fw-normal"><b>FCOM</b> - Login</h1>
		
			<div class="form-floating">
			  <input type="email" name="email" class="form-control" id="email" placeholder="MatricNo@um.edu.my">
			  <label for="floatingInput">Email address</label>
			</div>
			<div class="form-floating">
			  <input type="password" name="password" class="form-control" id="password" placeholder="Password">
			  <label for="floatingPassword">Password</label>
			</div>
		
			<!--<button class="w-100 btn btn-lg btn-primary mt-3" ><input type="submit" value="Login"></button><!-->
			<input name="submit" type="submit" value="Login">
			
		 </form>
		 <p class="mt-5 mb-3 text-muted"></p><a href=#>Forgot password?</a>
		</div>
	</div>

    
  </body>
</html>
