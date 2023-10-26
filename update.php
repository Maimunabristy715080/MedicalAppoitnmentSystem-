<?php
include 'connect.php';

include 'header.php';

$id = $_GET['updateid'];

$sql="select *from doctor where id=$id";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($result);

$name=$row['name'];
$specilization=$row['specilization'];
$schedule=$row['schedule'];
$email=$row['email'];
$designation=$row['designation'];
$mobile=$row['mobile'];


if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $specilization=$_POST['specilization'];
    $schedule=$_POST['schedule'];

    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $designation=$_POST['designation'];
   
$sql="update doctor set id=$id, name='$name',specilization='$specilization',schedule='$schedule', email='$email', mobile='$mobile',
 designation='$designation'  where id=$id";

$result=mysqli_query($connect,$sql);

if($result){
    //echo "data inserted successfully";
header('location:display.php');

}else{
    die(mysqli_error($con));
}

}


?> 



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>doctor-information</title>
  </head>
  <body>
  <h1 style="text-align:center";> update Doctor Information </h1> 
    <div class="container  my-5">

    <form  method="post">
  <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control"  placeholder="Enter  name" name="name"   autocomple="off" value=<?php 
    echo $name;?>>
   
  </div>
  <div class="form-group">
    <label >specilization</label>
    <input type="text" class="form-control"  placeholder="Enter  specilization" name="specilization"   autocomple="off" value=<?php 
    echo $specilization;?>>
   
  </div>
  <div class="form-group">
    <label >schedule</label>
    <input type="text" class="form-control"  placeholder="Enter  schedule" name="schedule"   autocomple="off" value=<?php 
    echo $schedule;?>>
   
  </div>

  <div class="form-group">
    <label >email</label>
    <input type="email" class="form-control"  placeholder="Enter  mail" name="email" autocomple="off"value=<?php 
    echo $email;?>>
   
  </div>

  <div class="form-group">
    <label >designation</label>
    <input type="text" class="form-control"  placeholder="Enter  designation" name="designation" autocomple="off" value=<?php 
    echo $designation;?>>
   
  </div>

  <div class="form-group">
    <label >mobile</label>
    <input type="text" class="form-control"  placeholder="Enter your mobile number" name="mobile" autocomple="off" value=<?php 
    echo $mobile;?>>
   
  </div>


  
  <button type="submit" class="btn btn-primary"  name="submit">update</button>
</form>


</div>

  </body>
</html>

