<?php

include 'connect.php';

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from doctor where id=$id";

    $result=mysqli_query($connect,$sql);
    if ($result){
        //echo "deleted succeccfully";

        header('location:display.php');

    }
    else{
        die(mysqli_error($connect));
    }
}