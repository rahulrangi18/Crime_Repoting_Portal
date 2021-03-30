<!DOCTYPE html>
<html>
<head>

    <?php
    session_start();
    if(!isset($_SESSION['x']))
        header("location:policelogin.php");
    $conn=mysqli_connect("localhost","root","","crime_portal");
    if(!$conn)
    {
        die("could not connect".mysqli_error());
    }
    mysqli_select_db($conn,"crime_portal");

    $cid=$_SESSION['c_id'];
    $p_id=$_SESSION['pol'];

    $query="SELECT c_id,type_crime,d_o_c,description,mob,u_addr from complaint natural join user where c_id='$cid' and p_id='$p_id'";
    $result=mysqli_query($conn,$query);

    if(isset($_POST['status'])){
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $upd=$_POST['update'];
            $qu1=mysqli_query($conn,"INSERT into update_case(c_id,case_update) values('$cid','$upd')");
        }
    }

    if(isset($_POST['close'])){
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $up=$_POST['final_report'];
            $qu2=mysqli_query($conn,"INSERT into update_case(c_id,case_update) values('$cid','$up')");
            $q2=mysqli_query($conn,"UPDATE complaint set pol_status='ChargeSheet Filed' where c_id='$cid'");

        }
    }
     $res2=mysqli_query($conn,"SELECT d_o_u,case_update from update_case where c_id='$cid'");

    ?>

	<title>Incharge Homepage</title>
	<script>
     function f1()
        {
        var sta2=document.getElementById("ciid").value;
        var x2=sta2.indexOf(' ');
        if(sta2=="" && x2>=0){
          document.getElementById("ciid").value="";
          alert("Blank FIeld Not Allowed");
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
 <div class="container-fluid" style="padding-left: 0px;padding-right: 0px;padding-right: 0px">

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
         <a class="nav-link active" href="police_complainDetails.php">Complaints Details</a>
     </li>
     <li class="nav-item">
       <a class="nav-link " href="police_pending_complain.php">Pending Complaints</a>
     </li>
     <!-- <li class="nav-item">
       <a class="nav-link" href="police_complete.php">Solved Cases</a>
     </li> -->
     <li class="nav-item">
       <a class="nav-link" href="p_logout.php">Logout &nbsp <i class="fa fa-sign-out" aria-hidden="true"></i></a>
     </li>
   </ul>
 </div>
 </nav>

 </div>
 </section>
<div style="padding:50px; margin-top:10px;">
   <table class="table table-bordered">
    <thead class="thead-dark" style="background-color: black; color: white;">
    <tr>
      <th scope="col">Complaint Id</th>
      <th scope="col">Type of Crime</th>
      <th scope="col">Date of Crime</th>
      <th scope="col">Description</th>
        <th scope="col">Complainant Mobile</th>
        <th scope="col">Complainant Address</th>
    </tr>
       </thead>
      <?php
              while($rows=mysqli_fetch_assoc($result)){
             ?>
    <tbody style="background-color: white; color: black;">
       <tr>
        <td><?php echo $rows['c_id']; ?></td>
        <td><?php echo $rows['type_crime']; ?></td>
        <td><?php echo $rows['d_o_c']; ?></td>
        <td><?php echo $rows['description']; ?></td>
        <td><?php echo $rows['mob']; ?></td>
        <td><?php echo $rows['u_addr']; ?></td>
      </tr>
       </tbody>
       <?php
}
?>

</table>
 </div>

<div style="padding:50px; margin-top:8px;">
   <table class="table table-bordered">
        <thead class="thead-dark" style="background-color: black; color: white;">
    <tr>
      <th scope="col">Date Of Update</th>
      <th scope="col">Case Update</th>
    </tr>
       </thead>
      <?php
              while($rows1=mysqli_fetch_assoc($res2)){
             ?>
       <tbody style="background-color: white; color: black;">
    <tr>

      <td><?php echo $rows1['d_o_u']; ?></td>
      <td><?php echo $rows1['case_update']; ?></td>


    </tr>
       </tbody>
       <?php
}
?>

</table>
 </div>

  <div style="width: 100%; height: 250px;">

    <div style="width: 50%;float: left;height: 250px; ">

     <form method="post">

      <!-- <h5 style="text-align: center;"><b>Complaint ID</b></h5>
      <input type="text" name="c_id" style="margin-left: 47%; width: 50px;" disabled value="<?php echo "$cid" ?>"> -->


      <select class="form-control" style="align-content: center;margin-top: 20px; margin-left: 35%; width: 180px;background-color: black;" name="update">
          <option>Criminal Verified</option>
          <option>Criminal Caught</option>
          <option>Criminal Interrogated</option>
          <option>Criminal Accepted the Crime</option>
          <option>Criminal Charged</option>
      </select>

      <input class="btn btn-primary btn-sm" type="submit" value="Update Case Status" name="status" style="margin-top: 10px; margin-left: 40%;">

    </form>
    </div>
     <div style="width: 50%;float: right;height: 250px; ">
     <form method="post">
     <textarea name="final_report" cols="40" rows="5" placeholder="Final Report" style="margin-top: 20px;margin-left: 20px; background-color: black;" id="ciid" onfocusout="f1()" required></textarea>
     <div>
      <input  class="btn btn-danger" type="submit" value="Close Case" name="close" style="margin-left: 20px; margin-top: 10px; margin-bottom:20px;">
       </div>
    </form>
  </div>

 </div>
    <div style="position: relative;
    float: left;
    margin-bottom: 0px;
   left: 0;
   bottom: 0;
   width: 100%;
   height: 30px;
   background-color: rgba(0,0,0,0.8);
   color: white;
   text-align: center;">
  <h4 style="color: white;">&copy <b>Crime Portal 2021</b></h4>
</div>

 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
