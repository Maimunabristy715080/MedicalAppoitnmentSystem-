<?php
include 'connect.php';
include 'header.php';

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>make Appointment</title>  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >

    
  </head>
  <body>
    
  <h1 style="text-align:center";>  See Doctor which one is now avaiable </h1> 
  <div class="container">
  <button class="btn btn-primary my-5"></button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">sl</th>
      <th scope="col">name</th>
      <th scope="col">specilization</th>
      <th scope="col">schedule</th>
      <th scope="col">designation</th>
     
      <th scope="col">operation</th>
    </tr>
  </thead>
  <tbody>


<?php

$sql="select * from doctor ";
$result=mysqli_query($connect,$sql);
if($result){
while($row=mysqli_fetch_assoc($result)){
$id=$row['id'];
$name=$row['name'];
$specilization=$row['specilization'];
$schedule=$row['schedule'];

$designation=$row['designation'];



echo '  <tr>
<th scope="row">'.$id.'</th>
<td>'.$name.'</td>
<td>'.$specilization.'</td>
<td>'.$schedule.'</td>

<td>'.$designation.'</td>



<td>
<button class="btn btn-primary"> <a href="sumbittapnt.php? updateid='.$id.'" class="text-light"> Make Appointment</a></button>


    </td>

</tr> ';
}



}

?>
  
  </tbody>
</table>

  
  </body>
</html>

