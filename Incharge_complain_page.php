<!DOCTYPE html>
<html>
<head>

    <?php
    session_start();
    if(!isset($_SESSION['x']))
        header("location:inchargelogin.php");

    $conn=mysqli_connect("localhost","root","","crime_portal");
    if(!$conn)
    {
        die("could not connect".mysqli_error());
    }
    mysqli_select_db($conn,"crime_portal");

    $i_id=$_SESSION['email'];
    $result1=mysqli_query($conn,"SELECT location FROM police_station where i_id='$i_id'");
    $q2=mysqli_fetch_assoc($result1);
    $location=$q2['location'];

    if(isset($_POST['s2']))
    {
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $cid=$_POST['cid'];

        $_SESSION['cid']=$cid;
        $qu=mysqli_query($conn,"SELECT inc_status,location from complaint where c_id='$cid'");

        $q=mysqli_fetch_assoc($qu);
        $inc_st=$q['inc_status'];
        $loc=$q['location'];

        if(strcmp("$loc","$location")!=0)
        {
           // $msg="Case Not of your Location";
            //echo "<script type='text/javascript'>alert('$msg');</script>";
            header("location:incharge_complain_details1.php");
        }
        else if(strcmp("$inc_st","Unassigned")==0)
        {
            header("location:Incharge_complain_details.php");

        }
        else{
            header("location:incharge_complain_details1.php");
        }
    }
    }

    $query=" SELECT c_id,type_crime,d_o_c,location,inc_status,p_id from complaint where location='$location' order by c_id desc";
    $result=mysqli_query($conn,$query);
    ?>

	<title>Incharge Homepage</title>

    <script>
     function f1()
        {
          var sta2=document.getElementById("ciid").value;
          var x2=sta2.indexOf(' ');
     if(sta2!="" && x2>=0)
     {
        document.getElementById("ciid").value="";
        alert("Blank Field not Allowed");
      }
}
</script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/c5bfbf9daf.js" crossorigin="anonymous"></script>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho:wght@800&display=swap" rel="stylesheet">
<link rel="icon" href="favicon.png">

	<link href="complainer_page.css" rel="stylesheet" type="text/css" media="all" />

<style media="screen">
   body{
  font-family: 'Shippori Mincho', serif;
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
         <a class="nav-link active" href="Incharge_complain_page.php">View Complaints</a>
     </li>
     <li class="nav-item">
       <a class="nav-link " href="Incharge_complain_details1.php">Complaints Details</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="incharge_complain_details.php">Assign Case</a>
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



    <form style="margin-top: 7%; margin-left: 40%;" method="post">
      <input type="text" name="cid" style="width: 250px; height: 30px; background-color:white;" placeholder="&nbsp Complaint Id" id="ciid" onfocusout="f1()" required>
        <div>
      <input class="btn btn-primary" type="submit" value="Search" name="s2" style="margin-top: 10px; margin-left: 11%;">
        </div>
    </form>



 <div style="padding:50px;">
   <table class="table table-bordered">
    <thead class="thead-dark" style="background-color: black; color: white;">
      <tr>
        <th scope="col">Complaint Id</th>
        <th scope="col">Type of Crime</th>
        <th scope="col">Date of Crime</th>
        <th scope="col">Location</th>
        <th scope="col">Complaint Status</th>
          <th scope="col">Police ID</th>
      </tr>
    </thead>

            <?php
              while($rows=mysqli_fetch_assoc($result)){

             ?>

            <tbody style="background-color: white; color: black;">
      <tr>
        <td><?php echo $rows['c_id'];?></td>
        <td><?php echo $rows['type_crime'];?></td>
        <td><?php echo $rows['d_o_c'];?></td>
          <td><?php echo $rows['location'];?></td>
          <td><?php echo $rows['inc_status']; ?></td>
          <td><?php echo $rows['p_id']; ?></td>
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
   height: 30px;
   background-color: rgba(0,0,0,0.8);
   color: white;
   text-align: center;">
  <h4 style="color: white;">&copy <b>2021 Crime Portal | All Right Reserved</b></h4>
</div>

 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
