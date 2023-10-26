<?php
include 'connect.php';

include 'header.php';

$id = $_GET['updateid'];

$sql="select *from patient where id=$id";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($result);

$name=$row['name'];
$contact=$row['contact'];
$gender=$row['gender'];
$age=$row['age'];


if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $contact=$_POST['contact'];
    $gender=$_POST['gender'];
    $age=$_POST['age'];
  
   
$sql="update patient set id=$id, name='$name', contact='$contact', gender='$gender', age='$age'  where id=$id";

$result=mysqli_query($connect,$sql);

if($result){
    //echo "data inserted successfully";
header('location:patientdisplay.php');

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

    <title>patient-information</title>
  </head>
  <body>
  <h1 style="text-align:center";> update patient Information </h1> 
    <div class="container  my-5">

    <form  method="post">
  <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control"  placeholder="Enter  name" name="name"   autocomple="off" value=<?php 
    echo $name;?>>
   
  </div>

  <div class="form-group">
    <label >contact </label>
    <input type="text" class="form-control"  placeholder="Enter contact" name="contact" autocomple="off"value=<?php 
    echo $contact;?>>
   
  </div>

  <div class="form-group">
    <label >gender</label>
    <input type="text" class="form-control"  placeholder="Enter gender" name="gender" autocomple="off" value=<?php 
    echo $gender;?>>
   
  </div>

  
  <div class="form-group">
    <label >age</label>
    <input type="text" class="form-control"  placeholder="Enter age" name="age" autocomple="off" value=<?php 
    echo $age;?>>
   
  </div>

  <button type="submit" class="btn btn-primary"  name="submit">update</button>
</form>


</div>

  </body>
</html>

