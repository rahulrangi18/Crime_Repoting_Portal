<!DOCTYPE html>
<html>
<head>
    <?php
    session_start();
    if(!isset($_SESSION['x']))
        header("location:headlogin.php");
    $conn=mysqli_connect("localhost","root","","crime_portal");
    if(!$conn)
    {
        die("could not connect".mysqli_error());
    }
    mysqli_select_db($conn,"crime_portal");

    $query="SELECT i_id,i_name,location from police_station";
    $result=mysqli_query($conn,$query);
    ?>

	<title>Head View Police Station</title>
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
       <a class="nav-link active" href="head_view_police_station.php">Police Station</a>
     </li>
     <li class="nav-item">
       <a class="nav-link " href="headHome1.php">Complaints Details</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="h_logout.php">Logout &nbsp <i class="fa fa-sign-out" aria-hidden="true"></i></a>
     </li>
   </ul>
 </div>
 </nav>

 </div>
 </section>




 <div  style="margin-top: 10%;margin-left: 45%">

   <a href="police_station_add.php" class="btn btn-primary">Add Police Station</a>
 </div>

<div style="padding:50px;">
   <table class="table table-bordered">
    <thead class="thead-dark" style="background-color: black; color: white;">
      <tr>
        <th scope="col">Incharge Id</th>
        <th scope="col">Incharge Name</th>
        <th scope="col">Location of Police Station</th>
      </tr>
    </thead>

<?php
      while($rows=mysqli_fetch_assoc($result)){
    ?>

    <tbody style="background-color: white; color: black;">
      <tr>
        <td><?php echo $rows['i_id']; ?></td>
        <td><?php echo $rows['i_name']; ?></td>
        <td><?php echo $rows['location']; ?></td>
      </tr>
    </tbody>

    <?php
    }
    ?>

</table>
 </div>


 <div style="position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: rgba(0,0,0,0.5);
    color: white;
    text-align: center;">
   <h4 style="color: white;">&copy <b>Crime Portal 2021</b></h4>
 </div>

 <div style="position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: rgba(0,0,0,0.5);
    color: white;
    text-align: center;">
   <h4 style="color: white;">&copy <b>Crime Portal 2021</b></h4>
 </div>


 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
