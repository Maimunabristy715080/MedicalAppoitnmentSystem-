<?php
include 'C:\xampp\htdocs\doctor\connect.php';
include 'header.php';


if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $specilization=$_POST['specilization'];
    $schedule=$_POST['schedule'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $designation=$_POST['designation'];
  
$sql="insert into doctor(name,specilization,schedule,email,designation,mobile) 
values('$name','$specilization','$schedule', '$email', '$mobile', '$designation')";

$result=mysqli_query($connect,$sql);

if($result){
    //echo "data inserted successfully";
header('location:display.php');

}

else{
    die(mysql_error($connect));
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

    <title>doctor information</title>
  </head>
  
  <body>
    <h1 style="text-align:center";> Add Doctor Information </h1> 
    <div class="container  my-5">

    <form  method="post">
  <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control"  placeholder="Enter  name" name="name"   autocomple="off">
   
  </div>
  <div class="form-group">
    <label >specilization</label>
    <input type="text" class="form-control"  placeholder="Enter  doctor specilization" name="specilization"   autocomple="off">
   
  </div>
  <div class="form-group">
    <label >schedule</label>
    <input type="text" class="form-control"  placeholder="Enter  schedule" name="schedule"   autocomple="off">
   
  </div>

  <div class="form-group">
    <label >email</label>
    <input type="email" class="form-control"  placeholder="Enter  mail" name="email" autocomple="off">
   
  </div>

  <div class="form-group">
    <label >designation</label>
    <input type="text" class="form-control"  placeholder="Enter  designation" name="designation" autocomple="off">
  
  </div>
  <div class="form-group">
    <label >mobile</label>
    <input type="text" class="form-control"  placeholder="Enter  mobile number" name="mobile" autocomple="off">
  </div>
  <button type="submit" class="btn btn-primary"  name="submit">Submit</button>
</form>
</div>
</body>
</html>

