<!DOCTYPE html>
<html>
<head>
	<title>police station log </title>

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
        header("location:headlogin.php");
if(isset($_POST['s'])){
    $con=mysqli_connect('localhost','root','','crime_portal');
    if(!$con)
    {
        die('could not connect: '.mysqli_error());
    }
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $loc=$_POST['location'];
        $i_name=$_POST['incharge_name'];
        $i_id=$_POST['incharge_id'];
        $u_pass=$_POST['password'];

    $reg="INSERT into police_station values('$i_id','$i_name','$loc','$u_pass')";
     mysqli_select_db($con,"crime_portal");
        $res=mysqli_query($con,$reg);
        if(!$res)
            {
        $message1 = "User Already Exist";
        echo "<script type='text/javascript'>alert('$message1');</script>";
    }

        else
    {
        $message = "Police Station Added Successfully";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
    }
}
?>
<script>
     function f1()
        {
         var sta=document.getElementById("station").value;
         var sta1=document.getElementById("iname").value;
         var sta2=document.getElementById("iid").value;
         var sta3=document.getElementById("pas").value;
         var x=sta.trim();
         var x2=sta2.indexOf(' ');
         var x1=sta1.trim();
         var x3=sta3.indexOf(' ');
 if(sta!="" && x==""){
    document.getElementById("station").value="";
    document.getElementById("station").focus();
      alert("Space Not Allowed");
        }

         else if(sta1!="" && x1==""){
    document.getElementById("iname").value="";
    document.getElementById("iname").focus();
      alert("Space Not Allowed");
        }
        else if(sta2!="" && x2>=0){
    document.getElementById("iid").value="";
    document.getElementById("iid").focus();
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
background-image: url(complainer_page.jpg);
background-size: cover;
background-position: center;
}

body,
html {
		width: 100%;
		height: 100%;
}

.nav-item{
	 padding: 0 20px;
	 font-size: 20px;
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
   <ul class="navbar-nav ms-auto nav-pills">
     <li class="nav-item">
       <a class="nav-link" href="headHome.php">View Complaints</a>
     </li>
     <li class="nav-item">
       <a class="nav-link " href="head_view_police_station.php">Police Station</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="head_case_details.php">Complaints Details</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="logout.php">Logout &nbsp <i class="fa fa-sign-out" aria-hidden="true"></i></a>
     </li>
   </ul>
 </div>
 </nav>

 </div>
 </section>
<div class="video" style="margin-top: 5%">
	<div class="center-container">
		 <div class="bg-agile">
			<br><br>
			<div class="login-form"><p>
                <h2>Log Police Station</h2><br>
      <form  method="post" style="color: gray">Police Station Location
          <input type="text"  name="location" placeholder="Station Location" required="" id="station" onfocusout="f1()"/>
      Incharge Name
					<input type="text"  name="incharge_name" placeholder="Incharge Name" required="" id="iname" onfocusout="f1()"/>
					Incharge Id<input type="text"  name="incharge_id" placeholder="Incharge Id" required="" id="iid" onfocusout="f1()"/>
					<br>
					Password<input type="text"  name="password" placeholder="Password" required="" id="pas" onfocusout="f1()"/>
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
