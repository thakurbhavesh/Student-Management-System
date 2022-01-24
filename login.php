<?php

session_start();
if (isset($_SESSION['uid']) ) {
    header('location:admin/admindash.php');

}


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Admin Login</title>
    <style>
   label{
       text-align: center;
   }
   b{
       padding-left: 10px;
   }
   body{
	   background-color:#7fffd4;
   }
    </style>
</head>
<body>
<fieldset style="border:1px solid black;background-color: aquamarine;" class="mb-3">
<form action="login.php" method="post">
    <h1 class="text-center">Admin Login</h1>
  <div class="mb-3 mt-3">
    <label for="email" class="form-label"><b>Username:</b></label>
    <input type="text" class="form-control" id="email" placeholder="Enter Username" name="uname">
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label"><b>Password:</b></label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pass">
  </div>
 
  <button type="submit" class="btn btn-primary mb-3 mx-2 px-5" name="login">Login</button>
</form>  
</fieldset>

<?php

include('dbcon.php');
if(isset($_POST['login'])){
    $username=$_POST['uname'];
    $password=$_POST['pass'];

    $qry="SELECT * FROM `admins` WHERE `username`='$username' AND `password`='$password';";
    $run=mysqli_query($conn,$qry);
    $row=mysqli_num_rows($run);
    
    if($row<1){
      ?>

      <script>
      alert("Username Or Password Not Matched !!");
      window.open('login.php','_self');
	  

      </script>
      <?php
    }
    else{
      $data=mysqli_fetch_assoc($run);
      $id=$data['username'];
      
	  
	  $_SESSION['uid']=$id;
	  header('location:admin/admindash.php');
    }

}
?>


    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body></html>
