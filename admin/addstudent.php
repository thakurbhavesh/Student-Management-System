<?php

session_start();
        if ($_SESSION['uid']) {
            // echo $_SESSION['uid'];
        }
         else {
        header('location:admin/login.php');
            
        }
        
?>

<?php
include('header.php');
include('title.php');
?>
<style>
    b{
        color: aqua;
    }
</style>
<form action="addstudent.php" method="post" enctype="multipart/form-data" >
    <fieldset>
    <h1 class="text-center" style="text-shadow: 2px 2px 1px magenta;">Add Student Details</h1>
  <div class="mb-3 mt-3">
    <label for="name" class="form-label"><b class="px-2">Name:</b></label>
    <input type="text" class="form-control" required  id="email" placeholder="Enter full name" name="name">
  </div> 
  <div class="mb-3 mt-3">
    <label for="rollno" class="form-label"><b class="px-2">Roll No:</b></label>
    <input type="text" class="form-control" required  id="rollno" placeholder="Enter correct roll no" name="rollno">
  </div>
  <div class="mb-3 mt-3">
    <label for="city" class="form-label"><b class="px-2">City:</b></label>
    <input type="text" class="form-control" required  id="city" placeholder="Enter city" name="city">
  </div>
  <div class="mb-3 mt-3">
    <label for="prm" class="form-label"><b class="px-2">Parent Contact Form:</b></label>
    <input type="text" class="form-control" required  id="mobno" placeholder="Enter mobile number" name="pcon">
  </div>
  <div class="mb-3 mt-3">
    <label for="std" class="form-label"><b class="px-2">Standard:</b></label>
    <input type="text" class="form-control" required  id="stnd" placeholder="Enter standard" name="std">
  </div>
  <div class="mb-3 mt-3">
    <label for="img" class="form-label"><b class="px-2">Image:</b></label>
    <input type="file" class="form-control" required  id="img" placeholder="Enter file" name="simg">
  </div>
  <div class="mb-3 mt-3">
    
    <input type="submit" class="form-control bg-secondary text-light fs-3" id="submit"  name="submit" value="Submit">
  </div>
  
  
  
    </fieldset>
</form>
</body></html>
<?php
if(isset($_POST['submit'])){
    include('../dbcon.php');

    $rollno=$_POST['rollno'];
    $name=$_POST['name'];
    $city=$_POST['city'];
    $pcon=$_POST['pcon'];
    $std=$_POST['std'];
    $imagename=$_FILES['simg']['name'];
    $tempname=$_FILES['simg']['tmp_name'];

    move_uploaded_file($tempname,"../dataimg/$imagename");


  $qry="INSERT INTO `students`( `rollno`, `name`, `city`, `pcont`, `standard`,`image`) VALUES ('$rollno','$name','$city','$pcon','$std','$imagename')";
  $run=mysqli_query($conn,$qry);
  if($run==true){
      ?>
      <script>
          alert("Data Inserted Successfully ");
      </script>
      <?php
  }


}

?>