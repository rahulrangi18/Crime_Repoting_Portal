<!DOCTYPE html>
<html>
<head>
	<title>Complainer Home Page</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/c5bfbf9daf.js" crossorigin="anonymous"></script>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho:wght@800&display=swap" rel="stylesheet">
  <link rel="icon" href="favicon.png">

	<link href="complainer_page.css" rel="stylesheet" type="text/css" media="all" />
	<?php
    session_start();
    if(!isset($_SESSION['x']))
        header("location:inchargelogin.php");

    $con=mysqli_connect('localhost','root','','crime_portal');
    if(!$con)
    {
        die('could not connect: '.mysqli_error());
    }
     mysqli_select_db($con,"crime_portal");

    $i_id=$_SESSION['email'];

    $result1=mysqli_query($con,"SELECT location FROM police_station where i_id='$i_id'");

    $q2=mysqli_fetch_assoc($result1);
    $location=$q2['location'];

if(isset($_POST['s'])){

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $p_name=$_POST['police_name'];
        $p_id=$_POST['police_id'];
        $spec=$_POST['police_spec'];
        $p_pass=$_POST['password'];

    $reg="INSERT into police values('$p_name','$p_id','$spec','$location','$p_pass')";

        $res=mysqli_query($con,$reg);
        if(!$res)
         {
          $message = "User already Exists.";
          echo "<script type='text/javascript'>alert('$message');</script>";
        }
        else
        {
          $message = "Police Added Successfully";
          echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }
}
?>

     <script>
     function f1()
    {
      var sta=document.getElementById("pname").value;
      var sta1=document.getElementById("pid").value;
      var sta2=document.getElementById("pspec").value;
      var sta3=document.getElementById("pas").value;
      var x=sta.trim();
      var x1=sta1.indexOf(' ');
      var x2=sta2.trim();
      var x3=sta3.indexOf(' ');
  if(sta!="" && x==""){
    document.getElementById("pname").value="";
    document.getElementById("pname1p").focus();
      alert("Space Not Allowed");
        }

         else if(sta1!="" && x1>=0){
    document.getElementById("pid").value="";
    document.getElementById("pid").focus();
      alert("Space Not Allowed");
        }
        else if(sta2!="" && x2==""){
    document.getElementById("pspec").value="";
    document.getElementById("pspec").focus();
      alert("Space Not Allowed");
        }
        else if(sta3!="" && x3>=0){
    document.getElementById("pas").value="";
    document.getElementById("pas").focus();
      alert("Space Not Allowed");
        }
}
</script>

<style media="screen">
   body{
  font-family: 'Shippori Mincho', serif;
}
.nav-item{
   padding: 0 20px;
   font-size: 20px;
}
body,
html {
    width: 100%;
    height: 100%;
}


</style>
</head>

<body style="background-size: cover;
    background-image: url(complainer_page.jpg);
    background-position: center;">
<section id="title">
 <div class="container-fluid" style="padding-left: 0px;padding-right: 0px;">

   <!-- Nav Bar -->
   <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #fff;padding: 0;">
     <a class="navbar-brand" href="">
     <img src="home page logo.png" alt="logo" width="180px" class="img-fluid">
     </a>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" style="margin-right: 15px;">
     <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
   <ul class="navbar-nav ms-auto nav-pills ">
     <li class="nav-item">
         <a class="nav-link" href="Incharge_complain_page.php">View Complaints</a>
     </li>
     <li class="nav-item">
       <a class="nav-link " href="incharge_complain_details.php">Complaints Details</a>
     </li>
     <li class="nav-item">
         <a class="nav-link " href="incharge_view_police.php">Police Officers</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="inc_logout.php">Logout &nbsp <i class="fa fa-sign-out" aria-hidden="true"></i></a>
     </li>
   </ul>
 </div>
 </nav>

 </div>
 </section>
<div class="video" style="margin-top: 5%">
	<div class="center-container">
		 <div class="bg-agile">
			<br>
			<div class="login-form"><p><h2>Log Police Officer</h2></p>
				<form action="#" method="post" style="color: gray">Police Name
					<input type="text"  name="police_name" placeholder="Police Name" required="" id="pname" onfocusout="f1()"/>
					Police Id<input type="text"  name="police_id" placeholder="Police Id" required="" id="pid" onfocusout="f1()"/>
                    Specialist<input type="text"  name="police_spec" placeholder="Specialist" id="pspec" required onfocusout="f1()"/>

                    Location of Police Officer<input type="text" required  name="location" <?php echo "$location"; ?>">
          <br>
					Password<input type="text"  name="password" placeholder="Password" id="pas" onfocusout="f1()" required/>
					<input type="submit" value="Submit" name="s">
				</form>
			</div>
		</div>
	</div>
</div>
 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
