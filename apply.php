<?php 
include 'config.php';

?>
<!DOCTYPE HTML>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <title>Event application</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="style.css" rel="stylesheet">
    
</head>

<?php 
	$full_name=$email=$event_name=$org_name=$venue=$start=$duration="";

if (isset($_POST['submit'])) {

    $full_name = ($_POST['fullname']);
    $email = ($_POST['email']);
    $event_name = ($_POST['event']);
    $org_name = ($_POST['org']);
    $venue= ($_POST['venue']);
    $start= ($_POST['start']);
    $end= ($_POST['end']);

    $sql="INSERT INTO event_application (fullname, email, event_name, organizer, venue, starting_date, end_date)
     VALUES ('$full_name', '$email', '$event_name', '$org_name', '$venue', '$start', '$end')";

    if (mysqli_query($con, $sql)) {
        echo '<script type="text/javascript">
       window.onload = function () { alert("Application submitted"); } 
</script>'; 
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($con);
    }
    mysqli_close($con);
  
    
    }

?>



<body class="text-center">

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
              <a href="event_app.html">Event participation</a>
              <a href="#">Participation evidence submission</a>
            </div>
          </div>
          <a href="index.html">Logout</a>
          </div>

        <div class="container" style="background-color: gainsboro;border-radius: 5px;">
          <img src='img\fsktm-small.png' style="width:200px;display:block;margin-right:auto;margin-left:auto;">
          <div class="form-signin" style="margin:auto;">
                <form id="form_id" method="post" name="loginform">
                  
                  <h1 class="h3 mb-3 fw-normal"><b>FCOM</b> - Event application</h1>
                    <h2>Participant details</h2>
                  <div class="form-floating">
                    <label for="floatingInput">Full Name</label>
                    <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Full name">
                    
                  </div>

                  <div class="form-floating">
                    <label for="floatingInput">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="username@um.edu.my">
                    
                  </div>

                    <h2>Event details</h2>
                    <div class="form-floating">
                      <label for="floatingInput">Event Name</label>
                        <input type="text" class="form-control" name="event" id="event" placeholder="">
                        
                      </div>
    
                      <div class="form-floating">
                        <label for="floatingInput">Organizer name</label>
                        <input type="text" class="form-control" name="org" id="org" placeholder="">
                        
                      </div>

                      <div class="form-floating">
                        <label for="floatingInput">Venue</label>
                        <input type="text" class="form-control" name="venue" id="venue" placeholder="">
                        
                      </div>

                      <div class="form-floating">
                        <label for="floatingInput">Start date</label>
                        <input type="date" class="form-control" name="start" id="start" placeholder="">
                        
                      </div>

                      <div class="form-floating">
                        <label for="floatingInput">End date</label>
                        <input type="date" class="form-control" name="end" id="end" placeholder="">
                        
                      </div>
                  
              
                      <button class="w-100 btn btn-lg btn-primary mt-3" name="submit" value="submit" >Submit</button>
                  <!-- -->
                </form>
              </div>
        </div>

      </body>

</html>



