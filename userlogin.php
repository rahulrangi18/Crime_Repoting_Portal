<!DOCTYPE html>
<html>
<head>
<?php


if(isset($_POST['s']))
{
    session_start();
    $_SESSION['x']=1;
    $conn=mysqli_connect("localhost","root","","crime_portal");
    if(!$conn)
    {
        die("could not connect".mysqli_error());
    }
    mysqli_select_db($conn,"crime_portal");

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $name=$_POST['email'];
        $pass=$_POST['password'];
        $u_id=$_POST['email'];
        $_SESSION['u_id']=$u_id;
        $result=mysqli_query($conn,"SELECT u_id,u_pass FROM user where u_id='$name' and u_pass='$pass' ");




        if(!$result || mysqli_num_rows($result)==0)
        {
          $message = "Id or Password not Matched.";
          echo "<script type='text/javascript'>alert('$message');</script>";


        }
        else
        {
          header("location:complainer_page.php");

        }
    }
}
?>
    <script>
     function f1()
        {
            var sta2=document.getElementById("exampleInputEmail1").value;
            var sta3=document.getElementById("exampleInputPassword1").value;
          var x2=sta2.indexOf(' ');
var x3=sta3.indexOf(' ');
    if(sta2!="" && x2>=0){
    document.getElementById("exampleInputEmail1").value="";
    document.getElementById("exampleInputEmail1").focus();
      alert("Space Not Allowed");
        }
        else if(sta3!="" && x3>=0){
    document.getElementById("exampleInputPassword1").value="";
    document.getElementById("exampleInputPassword1").focus();
      alert("Space Not Allowed");
        }

}
    </script>

	<title>Complainant Login</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

  <script src="https://kit.fontawesome.com/c5bfbf9daf.js" crossorigin="anonymous"></script>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho:wght@800&display=swap" rel="stylesheet">

  <link rel="icon" href="favicon.png">

  <style media="screen">
  body{
  font-family: 'Shippori Mincho', serif;
  background-image: url(user_login_page_bg.png);
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
  .dropdown:hover>.dropdown-menu {
    display: block;
  }

  .dropdown>.dropdown-toggle:active {
      pointer-events: none;
  }



           .btn-grad {background-image: linear-gradient(to right, #f79d00 0%, #64f38c  51%, #f79d00  100%)}
           .btn-grad {
              margin: 10px;
              padding: 15px 45px;
              text-align: center;
              text-transform: uppercase;
              transition: 0.5s;
              background-size: 200% auto;
              color: white;
              box-shadow: 0 0 20px #eee;
              border-radius: 10px;
              display: block;
            }

            .btn-grad:hover {
              background-position: right center; /* change the direction of the change here */
              color: #fff;
              text-decoration: none;
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


    <div  align="center">
   	<div class="form" style="margin-top: 3%" >
   		<form method="post">
        <img src="user_login_logo.png" class="img-fluid rounded-circle" alt="user" style="width: 100px;">
        <p class="h1" style="color: #fff">User Login</p>
          	<div class="form col-sm-9 col-md-6 col-lg-4" style="margin-bottom: 12%;background-color: #fff;">
          		<form method="post">
                <br>
                <div class="d-grid gap-2 col-9 mx-auto">
                 <button class="btn btn-danger">
                   <i class="fa fa-google-plus" style="padding-right: 10px;"></i>
                   | Login with google
                  </button>
                 </div>
              <h4>or</h4>
            <div class="form-group input-group" style="width: 90%">
              <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-user"></i></span>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" size="5" placeholder="Enter Email id" required name="email" onfocusout="f1()">
               </div>

            <div class="form-group input-group" style="width:90%;margin-bottom: 20px;margin-top: 10px;">
              <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-lock"></i></span>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required name="password" onfocusout="f1()">
            </div>

            <a href="#" class="forget_password" style="text-decoration: none"> Forgot Password? </a>

            <div class="d-grid gap-2 col-9 mx-auto">
             <button type="submit" class="btn btn-grad" name="s" onclick="f1()">Login</button>
             </div>
             <hr class="dropdown-divider" style="width: 70%">
             <div class="login_message">
                   <p style="color: #bbbbbb">Don’t have an account ? <a href="registration.php" style="text-decoration: none"> Sign up </a> </p>
                   <br>
             </div>
          </form>
          	</div>
          </div>

<div style="position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: rgba(0,0,0,0.7);
   color: white;
   text-align: center;">
  <h4 style="color: white;">&copy <b>Crime Portal 2021</b></h4>
</div>

</body>
</html>
