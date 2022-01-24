<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>STUDENT MANAGEMENT SYSTEM</title>
    <link rel="icon" type="image/x-icon" href="images/icon.jpg">
    <style>
h1,h3{
    text-shadow:2px 2px 1px magenta;
}

    </style>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<link href="css/style.css">
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <style>
      .a:hover{
text-shadow: 2px 2px 1px magenta;
transform: scale(1.1);
font-size: 22px;
      }
  </style>
</head>
<body>
    <h1 class="animate__animated animate__heartBeat text-center pt-2">STUDENT MANAGEMENT SYSTEM</h1>
    <button type="button" class="mx-3" ><a href="login.php" >Admin Login</a></button><br>
    
    <fieldset style="border: 0.5px solid black;width: 80%;text-align: center;margin-left: 8%; margin-top:2%;  background-color: aquamarine;">
        <h3 class="text-center">Student Information </h3><br>
        <label class="fw-bold text-primary ">Choose Standard</label><br>
        <form action="index.php" method="post">
            <select class="form-select mt-2" aria-label="Default select example" name="std">
                <option value="0" class="disabled"></option>
                <option value="1">1st</option>
                <option value="2">2nd</option>
                <option value="3">3rd</option>
                <option value="4">4th</option>
                <option value="5">5th</option>
                <option value="6">6th</option>
            </select>
            <div class="mb-3">
                <label for="exampleInputText1" class="form-label text-primary fw-bold mt-2">Enter Roll Number</label>
                <input type="text" class="form-control "placeholder="Enter Roll Number Here"  id="exampleInputText1" aria-describedby="textHelp" name="rollno">
                <div id="textHelp" class="form-text">We'll never share your Rollno with anyone else.</div>
            </div><br>
            <input type="submit" class="form-control mb-3 bg-primary text-light text-center my-1 px-5 mx-5 a" name="submit" value="ShowInfo" style="width: max-content;">

        </form>
    </fieldset>

<?php

if(isset($_POST['submit'])){

    $standard=$_POST['std'];
    $rollno=$_POST['rollno'];

    include('dbcon.php');
    include('function.php');

    showdetails($standard,$rollno);
}
?><br><hr>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>