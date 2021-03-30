<!DOCTYPE html>
<html>
<head>

  <?php
    session_start();

    $conn=mysqli_connect("localhost","root","","crime_portal");
    if(!$conn)
    {
        die("could not connect".mysqli_error());
    }
    mysqli_select_db($conn,"crime_portal");


    if(!isset($_SESSION['x']))
        header("location:userlogin.php");


    $u_id=$_SESSION['u_id'];
    $c_id=$_SESSION['c_id'];

    $query="SELECT c_id,description,inc_status,pol_status from complaint natural join user where c_id='$c_id' and u_id='$u_id'";
    $result=mysqli_query($conn,$query);

    $res2=mysqli_query($conn,"SELECT d_o_u,case_update from update_case where c_id='$c_id'");
  ?>

	<title>Complaint Details</title>
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
            <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="complainer_page.php">Log New Complain</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="complainer_complain_history.php">Complaint History</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="complainer_complain_details.php">Complaints Details</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout &nbsp <i class="fa fa-sign-out" aria-hidden="true"></i></a>
        </li>
      </ul>
  </div>
  </nav>

  </div>
  </section>

  

        <div style="padding:50px;margin-top:10px;">
            <table class="table table-bordered">
            <thead class="thead-dark" style="background-color: black; color: white;">
                <tr>
                    <th scope="col">Complain Id</th>
                    <th scope="col">Description</th>
                    <th scope="col">Police Status</th>
                    <th scope="col">Case Status</th>
                </tr>
            </thead>
            <?php
              while($rows=mysqli_fetch_assoc($result)){
            ?>
             <tbody style="background-color: white; color: black;">
              <tr>
                <td><?php echo $rows['c_id']; ?></td>
                <td><?php echo $rows['description']; ?></td>
                <td><?php echo $rows['inc_status']; ?></td>
                <td><?php echo $rows['pol_status']; ?></td>
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

        <div style="position: fixed;
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
