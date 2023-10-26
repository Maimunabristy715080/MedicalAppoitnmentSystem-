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
    <title>patient-information</title>  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >

    
  </head>
  <body>
  <h1 style="text-align:center";> patient Information </h1> 
  <div class="container">
    <button class="btn btn-primary my-5"><a href="patientuser.php" class="text-light" >add patient</a></button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">sl</th>
      <th scope="col">name</th>
      <th scope="col">contact</th>
      <th scope="col">gender</th>
      <th scope="col">age</th>
    
     
      <th scope="col">operation</th>
    </tr>
  </thead>
  <tbody>


<?php

$sql="select * from patient ";
$result=mysqli_query($connect,$sql);
if($result){
while($row=mysqli_fetch_assoc($result)){
$id=$row['id'];
$name=$row['name'];
$contact=$row['contact'];
$gender=$row['gender'];
$age=$row['age'];



echo '  <tr>
<th scope="row">'.$id.'</th>
<td>'.$name.'</td>
<td>'.$contact.'</td>
<td>'.$gender.'</td>
<td>'.$age.'</td>



<td>
<button class="btn btn-primary"> <a href="patientupdate.php? updateid='.$id.'" class="text-light"> update</a></button>
<button class="btn btn-danger"> <a href="patientdelete.php? deleteid='.$id.'" class="text-light"> delete</a></button>

    </td>

</tr> ';
}



}

?>
  
  </tbody>
</table>

  
  </body>
</html>

