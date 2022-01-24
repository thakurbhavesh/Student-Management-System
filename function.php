<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Record</title>
    <style>

th{
    color:magenta;
    padding-left:20px;
    margin-bottom:10px;
}
tr{
    border:1px solid black;
}th{
    border:1px solid black;
}
        </style>
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<link href="css/style.css">
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

</head>
<body>
<?php

function showdetails($standard,$rollno){
    include('dbcon.php');

    $sql="SELECT * FROM `students` WHERE `rollno`='$rollno' AND `standard`='$standard'";
    $run=mysqli_query($conn,$sql);

    if (mysqli_num_rows($run)>0) {
        $data=mysqli_fetch_assoc($run);

        ?>

<table border="1" style="width:70%;margin-top:20px;background-color:gray;color:whitesmoke" align="center">
<tr>
    <th colspan="3"> <h1 style="color:black">Student Details</h1></th>
</tr>

<tr>
    <!-- <td rowspan="5"><img src="dataimg/<?php echo $data['image'];?> " style="max-height:150px;max-width:120px;"></td> -->
    <th>Roll No</th>
    <td><?php echo $data['rollno']?></td>
</tr>

<tr>
    <th>Name</th>
    <td><?php echo $data['name']?></td>
</tr>

<tr>
    <th>Standard</th>
    <td><?php echo $data['standard']?></td>
</tr>

<tr>
    <th>Parents Contact Number</th>
    <td><?php echo $data['pcont']?></td>
</tr>

<tr>
    <th>City</th>
    <td><?php echo $data['city']?></td>
</tr>


</table>


<?php
    } 
    
    
    
    else {
        echo "<script>alert('No Student Found !');</script>";
    }
    
    

   


}


?>

</body>
</html>