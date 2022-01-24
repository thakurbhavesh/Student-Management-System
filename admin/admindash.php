<?php

session_start();
        if ($_SESSION['uid']) {
            // echo $_SESSION['uid'];
        }
         else {
        header('location:../login.php');
            
        }
        
?>

<?php
include('header.php');
?>
<style>
.a{
    min-height:150px;
    border:1px solid black;
    padding-left:10px;
    margin-left:5rem;

}
a{
    text-decoration:none;
    line-height:150px;
    text-align:center;
}
*{
    text-shadow:2px 2px 1px magenta;
}
</style>

<div class="container-fluid">
    <div class="row bg-secondary my-1 py-5 text-light">
        <div class="col-sm-12">
        <h1  class="animate__animated animate__pulse text-center">Welcome to Admin Dashboard</h1>
        </div>
    </div>

</div>
<div class="container-fluid pt-5 pb-3">
  <div class="row">
    <div class="col-sm-3 a bg-primary">
      <a href="addstudent.php" class="text-light fs-3 ">Add <b>Student</b></a>
    </div>
    <div class="col-sm-3 a bg-dark ">
    <a href="updatestudent.php" class="text-light fs-3">Update <b>Student</b></a>

    </div>
    <div class="col-sm-3 a bg-secondary">
    <a href="deletestudent.php" class="text-light fs-3">Delete <b>Student</b></a>

    </div>
  </div>
  <div class="container mt-3 fs-1 text-center px-2 py-2 my-4 ">
      <div class="row" style="background-color:orange; width:95%;">
          <div class="col-sm-12">
        <a href="logout.php" >Logout</a>

          </div>
      </div>
  </div>
</div>

</body>
</html>