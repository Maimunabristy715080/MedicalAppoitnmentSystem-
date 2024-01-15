<?php
include 'connect.php';

include 'header.php';

if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $contact=$_POST['contact'];
    $gender=$_POST['gender'];
    $age=$_POST['age'];
    

  
$sql="insert into appoinment(name,contact,gender,age) 
values('$name', '$contact', '$gender', '$age')";

$result=mysqli_query($connect,$sql);

if($result){
    //echo "data inserted successfully";
header('location:patientdisplay.php');

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

    <title>Fixed Appointment</title>
  </head>
  
  <body>
    <h1 style="text-align:center";> Fixed Appointment </h1> 
    <div class="container  my-5">

    <form  method="post">
  <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control"  placeholder="Enter  name" name="name"   autocomple="off">
   
  </div>

  <div class="form-group">
    <label >contact</label>
    <input type="text" class="form-control"  placeholder="Enter contact number" name="contact" autocomple="off">
   
  </div>

  <div class="form-group">
    <label >gender</label>
    <input type="text" class="form-control"  placeholder="Enter your gender" name="gender" autocomple="off">
  
  </div>
  <div class="form-group">
    <label >age</label>
    <input type="text" class="form-control"  placeholder="Enter your age" name="age" autocomple="off">
  
  </div>
  
  <button type="submit" class="btn btn-primary"  name="submit">Fixed Appointment</button>
</form>
</div>
</body>
</html>

