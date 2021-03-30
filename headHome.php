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

    if(isset($_POST['s1']))
    {
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $cid=$_POST['c_id'];
        $_SESSION['c_id']=$cid;
        header("location:head_case_details.php");
    }
    }

    if(isset($_POST['s2']))
    {
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $loc=$_POST['loc'];
        $_SESSION['loc']=$loc;
        header("location:headHome1.php");
    }
    }


?>

	<title>HQ Homepage</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/c5bfbf9daf.js" crossorigin="anonymous"></script>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho:wght@800&display=swap" rel="stylesheet">
  <link rel="icon" href="favicon.png">



     <script>
     function f1()
        {

            var sta2=document.getElementById("ciid").value;




  var x2=sta2.indexOf(' ');





    if(sta2!="" && x2>=0){
    document.getElementById("ciid").value="";
          alert("Blank Field Not Allowed");
        }


}



    </script>

    <style media="screen">
    body{
    font-family: 'Shippori Mincho', serif;
    background-image: url(complainer_page.jpg);
    /* search1.jpeg */
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
       <a class="nav-link active" href="headHome.php">View Complaints</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="head_view_police_station.php">Police Station</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="headHome1.php">Complaints Details</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="h_logout.php">Logout &nbsp <i class="fa fa-sign-out" aria-hidden="true"></i></a>
     </li>
   </ul>
 </div>
 </nav>

 </div>
 </section>



 <div>
    <form style="margin-top: 10%; margin-left: 40%;" method="post">
      <input type="text" name="c_id" style="width: 250px; height: 30px;" placeholder="&nbsp Complaint Id" id="ciid" onfocusout="f1()" required>
        <div>
      <input class="btn btn-primary" type="submit" value="Search" name="s1" style="margin-top: 10px; margin-left: 11%;">
     </div>
     </form>

     <form style="margin-top: 3%; margin-left: 40%;" method="post">
     <select name="loc" class="form-control" style="width: 250px;">

						<?php
                        $loc=mysqli_query($conn,"SELECT location from police_station");
                        while($row=mysqli_fetch_array($loc))
                        {
                            ?>
                                	<option> <?php echo $row[0]; ?> </option>
                            <?php
                        }
                        ?>
     </select>

          <input class="btn btn-primary" type="submit" value="Search" name="s2" style="margin-top: 10px; margin-left: 11%;">
    </form>
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
