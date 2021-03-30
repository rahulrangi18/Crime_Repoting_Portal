 <!DOCTYPE html>
<html>
<?php
if(isset($_POST['s'])){
    $con=mysqli_connect('localhost','root','','crime_portal');
    if(!$con)
    {
        die('could not connect: '.mysqli_error());
    }
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $u_name=$_POST['name'];
        $u_id=$_POST['email'];
        $u_pass=$_POST['password'];
        $u_addr=$_POST['adress'];
        $a_no=$_POST['aadhar_number'];
        $gen=$_POST['gender'];
        $mob=$_POST['mobile_number'];
       // $password=md5($u_pass);
       $reg="INSERT into user values('$u_name','$u_id','$u_pass','$u_addr','$a_no','$gen','$mob')";
        mysqli_select_db($con,"crime_portal");
        $res=mysqli_query($con,$reg);
        if(!$res)
        {
        $message1 = "User Already Exist";
        echo "<script type='text/javascript'>alert('$message1');</script>";
    }
            else
    {
        $message = "User Registered Successfully";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
    }
}
?>

<script>
     function f1()
        {
            var sta=document.getElementById("name1").value;
            var sta1=document.getElementById("email1").value;
            var sta2=document.getElementById("pass").value;
            var sta3=document.getElementById("addr").value;
            var sta4=document.getElementById("aadh").value;
            var sta5=document.getElementById("mobno").value;

  var x=sta.trim();
  var x1=sta1.indexOf(' ');
  var x2=sta2.indexOf(' ');
  var x3=sta3.trim();
  var x4=sta4.indexOf(' ');
	var x5=sta5.indexOf(' ');
	if(sta!="" && x==""){
		document.getElementById("name1").value="";
		document.getElementById("name1").focus();
		  alert("Space Not Allowed");
        }

         else if(sta1!="" && x1>=0){
    document.getElementById("email1").value="";
    document.getElementById("email1").focus();
      alert("Space Not Allowed");
        }
        else if(sta2!="" && x2>=0){
    document.getElementById("pass").value="";
    document.getElementById("pass").focus();
      alert("Space Not Allowed");
        }
        else if(sta3!="" && x3==""){
    document.getElementById("addr").value="";
    document.getElementById("addr").focus();
      alert("Space Not Allowed");
        }
        else if(sta4!="" && x4>=0){
    document.getElementById("aadh").value="";
    document.getElementById("aadh").focus();
      alert("Space Not Allowed");
        }
        else if(sta5!="" && x5>=0){
    document.getElementById("mobno").value="";
    document.getElementById("mobno").focus();
      alert("Space Not Allowed");
        }
}
</script>

<head>
<title>User Registration</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/c5bfbf9daf.js" crossorigin="anonymous"></script>

<link href="complainer_page.css" rel="stylesheet" type="text/css" media="all" />
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho:wght@800&display=swap" rel="stylesheet">

<link rel="icon" href="favicon.png">
<style media="screen">
body{
font-family: 'Shippori Mincho', serif;
background-image: url(registration_page.png);
}
.nav-item{
padding: 0 20px;
font-size: 20px;
}
.dropdown:hover>.dropdown-menu {
  display: block;
}

.dropdown>.dropdown-toggle:active {
    pointer-events: none;
}

</style>


</head>
<body>

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
  	<ul class="navbar-nav ms-auto">
  		<li class="nav-item">
  				<a class="nav-link" href="home.php">Home</a>
  		</li>
  			<li class="nav-item dropdown">
  					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
  						Login
  					</a>
  					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
  						<li><a class="dropdown-item" href="userlogin.php">User Login</a></li>
  						<li><hr class="dropdown-divider"></li>
  						<li class="dropdown-item text-muted"><b>Official Login</b></li>
  						<li><a class="dropdown-item" href="policelogin.php">Police Login</a></li>
  						<li><a class="dropdown-item" href="inchargelogin.php">Incharge Login</a></li>
  						<li><a class="dropdown-item" href="headlogin.php">HQ Login</a></li>
  					</ul>
  			</li>
  			<li class="nav-item">
  					<a class="nav-link btn btn-outline-secondary btn-lg" href="registration.php" style="margin-bottom: 10px;">Sign-Up</a>
  	</ul>
  </div>
  </nav>

  </div>
  </section>

<div class="video" style="margin-top: 1%">
	<div class="center-container">
		 <div class="bg-agile" style="background-color: #ef8d32;opacity: 0.90;">
			<div class="login-form">
				<form action="#" method="post">
          <div class="d-grid gap-2 col-9 mx-auto">
    			 <button class="btn btn-danger">
    				 <i class="fa fa-google-plus" style="padding-right: 10px;"></i>
    				 | SignUp with google
            </button>
    			 </div>
           <p style="text-align: center;font-size:25px;">or</p>
					<p style="color:#1e212d">Full Name</p><input type="text"  name="name"  required="" id="name1" onfocusout="f1()" />
					<p style="color:#1e212d">Email-Id</p><input type="email"  name="email"  required="" id="email1" onfocusout="f1()"/>
          <p style="color:#1e212d">Password</p><input type="text"  name="password" pattern=".{6,}" id="pass" onfocusout="f1()"/>
					<p style="color:#1e212d">Home Adress</p><input type="text"  name="adress"  required="" id="addr" onfocusout="f1()"/>
					<p style="color:#1e212d">Aadhar Number</p><input type="text"  name="aadhar_number" minlength="12" maxlength="12" required pattern="[123456789][0-9]{11}" id="aadh" onfocusout="f1()"/>
					<div class="left-w3-agile">
						<p style="color:#1e212d">Gender</p><select class="form-control" name="gender">
							<option>Male</option>
							<option>Female</option>
							<option>Others</option>
						</select>
					</div>
					<div class="right-agileits">
						<p style="color:#1e212d">Mobile</p><input type="text"  name="mobile_number" required pattern="[6789][0-9]{9}" minlength="10" maxlength="10" id="mobno" onfocusout="f1()"/>
					</div>
					<input type="submit" value="Submit" name="s" style="font-family: 'Shippori Mincho', serif; background: #383e56">
				</form>
			</div>
		</div>
	</div>
</div>
 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
