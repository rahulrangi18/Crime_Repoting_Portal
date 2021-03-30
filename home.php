<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Crime Portal</title>

<!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<!-- icon -->
    <script src="https://kit.fontawesome.com/c5bfbf9daf.js" crossorigin="anonymous"></script>
     <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho:wght@800&display=swap" rel="stylesheet">
    <link rel="icon" href="favicon.png">

<style>
body{
  font-family: 'Shippori Mincho', serif;
}
.nav-item{
   padding: 0 20px;
   font-size: 20px;
}
.welcome-text{
  font-size: 30px;
  color: #fff;
}
.complain-text{
  font-size: 50px;
  color: #fff;
}
.row{
  padding: 9% 0;
}
.fa-5x{
  color: #ef8d32;
  padding: 20px 10px;
}
.aboutUs{
  padding: 0px 30px;
}
#about_us{
  padding: 5% 3%;
  background-color: #ef8d32;
}
#login{
  text-align: center;
  padding: 8% 5%;
}
.btn{
  padding: 10px 40px;
}
#footer{
  text-align: center;
  padding: 3% 15%;
  background-color: #c7cfb7;
}

.lst-icn{
  padding: 0px 10px;
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
        <li class="nav-item">
            <a class="nav-link" href="#about_us">About Us</a>
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

<!-- image part -->

<section id="image_part">
  <div class="container-fluid" style="background-image: url(home_image.jpg);background-size: cover;background-position: center;">
    <div class="container-sm" style="padding:200px 12px">

  <p class="welcome-text">Welcome to Police Online FIR System</p>
  <p class="complain-text">HAVE A COMPLAIN?</p>
  <button type="button" class="btn btn-danger btn-lg" onclick="window.location.href='registration.php'"><i class="fas fa-exclamation-triangle"></i> Register Now</button>
  </div>
  </div>
</section>

  <section id="features">
<div class="container">
    <div class="row">
      <div class="col-lg-4 col-sm-12 col-md-12 text-center">
        <a><i class="fa fa-check-circle fa-5x" aria-hidden="true"></i></a>
        <br>
        <h3 class="features-headings">Simplified for Complains</h3>
      </div>
      <div class="col-lg-4 col-sm-12 col-md-12 text-center">
        <a><i class="fas fa-users fa-5x" aria-hidden="true"></i></a>
        <br>
        <h3 class="features-headings">No Queues and Delays</h3>
      </div>
      <div class="col-lg-4 col-sm-12 col-md-12 text-center">
        <a><i class="fas fa-stopwatch fa-5x" aria-hidden="true"></i></a>
        <br>
        <h3 class="features-headings">Quick Response</h3></h3>
      </div>
    </div>
</div>
  </section>

<section id="about_us">
  <div class="container-fluid">
    <p class="h2">ABOUT US</p>
    <p class="aboutUs">To address the challenges faced by the citizens of India, we, student of Indian
institute of information technology, Surat(Gujarat) had put together a team and
build a system.
We are probably living in the worst time our modern society has ever seen in
terms of women security. We aim to make citizens feel strong enough to fight the
odds, strong enough to protect themselves against any assaults. We aim
at giving power to those without whom we cease to exist. Our idea is to design
a system which shall re-establish how very gregarious mankind is.
We are focusing on building an effective, fast and reliant system to make the
citizens feel safe and empowered. Our platform will ace as 24/7 actice help
and companion for citizens so that they don't ever feel that they are alone in the middle
of a crisis situation. As it is 24/7, any person can signup/login anytime anywhere
and register complaint which will be seen by the police station and action will be
taken as soon as complaint will be registered. After action taken by the police
the person can see it on site that action is taken and the issue is solved.</p>

  </div>

</section>

<section id="login">
<div class="container" style="padding-bottom: 30px">

  <h3 class="last-heading">Sign Up or Login now for your safety anywhere and everywhere</h3>
  <div class="btn-group dropdown">
  <button type="button" class="btn btn-secondary btn-lg dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="margin-top:30px;margin-right:10px;"><i class="fas fa-user"></i>
    Login
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="userlogin.php">User Login</a></li>
    <li><hr class="dropdown-divider"></li>
    <li class="dropdown-item text-muted"><b>Official Login</b></li>
    <li><a class="dropdown-item" href="policelogin.php">Police Login</a></li>
    <li><a class="dropdown-item" href="inchargelogin.php">Incharge Login</a></li>
    <li><a class="dropdown-item" href="headlogin.php">HQ Login</a></li>
  </ul>
</div>
  <button type="button" class="btn btn-lg btn-outline-secondary" style="margin-top:30px;margin-left:10px" onclick="window.location.href='registration.php'"><i class="fas fa-user-plus"></i>Sign Up</button>
</div>
</section>


<footer id="footer">
<i class="lst-icn fab fa-twitter"></i><i class="lst-icn fab fa-facebook-f"></i><i class="lst-icn fab fa-instagram"></i><i class="lst-icn fas fa-envelope"></i>
<br>
  <p class="content">© Copyright 2021 Police</p>

</footer>
  </body>
</html>
