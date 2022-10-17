<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <title>Homepage</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="style.css" rel="stylesheet">

    <script src="login.js"></script>
    
</head>
 <body > 
  
  <div class="navbar">
    <a href="homepage.html">Info</a>
    <a href="profile.html">Profile</a>
    <div class="dropdown">
      <button class="dropbtn">Dashboard 
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="record.html">FCSIT Achievements</a>
        <a href="#">Event advertisement</a>
        <a href="#">Report generation</a>
        
      </div>
    </div> 
    <div class="dropdown">
      <button class="dropbtn">Application 
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="apply.php">Event participation</a>
        <a href="#">Participation evidence submission</a>
      </div>
    </div>
    <a href="index.php">Logout</a>
    </div>

    <img src='img\fsktm-small.png' style="width:200px;display:block;margin-right:auto;margin-left:auto;">
    <p style="text-align: center;"></p>

  <div class ="container" style="background-color:darkcyan;border-radius:5px;padding:10px;">
    <div class="intro" style="background-color: ;">
    <h1>
      User profile
    </h1>
    </div>
    <div class="form-signin" style="background-color: ;">
      <p>View user profile information or password change</p>
    </div>

  </div>

  <div class ="container" style="background-color:darkcyan;border-radius:5px;padding:10px;">
    <div class="intro" style="background-color: ;">
    <h1>
      Dashboard
    </h1>
    </div>
    <div class="form-signin" style="background-color: ;">
      <p>FCSIT events achievement & participation records, event advertisement, report generation</p>
  </div>
  </div>

  <div class ="container" style="background-color:darkcyan;border-radius:5px;padding:10px;">
    <div class="intro" style="background-color: ;">
    <h1>
      Application
    </h1>
    </div>
    <div class="form-signin" style="background-color: ;">
      <p>Event participation application, completed participation and achievement evidences submission</p></div>
  </div>

</body>

</html>