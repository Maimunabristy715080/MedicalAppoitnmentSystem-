<?php 

  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>


<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iut medical system</title>
    <link rel="stylesheet" href="style2.css">
	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">  <!-- Linking the external stylesheet -->
</head>
<body>
<header>
<h1>Iut<span>Medical</span></h1>
  <!-- <div class="navbar"> -->
  <nav>
		
	
		<ul> 
    
           
           
           
    
	<li><a href="http://localhost/doctor/display.php"> <span>Doctor</span> </a> </li>
	<li> <a href="http://localhost/doctor/patientdisplay.php"> <span>Patient</span> </a> </li>
	<li> <a href="http://localhost/doctor/index.php"> <span>Home</span> </a> </li>
	<li> <a href="http://localhost/doctor/mkapnt.php"> <span>Make Appointment</span> </a> </li>
	<li><a href="index.php?logout='1'" style="color: red;">LogOut</a> </li>
       
	   </ul>
		
	</nav>

      
   <!-- </div> -->
<!--
<div style="padding: 16px; display: flex; align-items: center;">
    <img src="piller.jpg" alt="iut five piller image" style="width: 40%; margin-right: 80px;">
    <p style="text-align: right; font-size: 80px; color: green; font-weight: bold; font-style:normal;">welcome iut medical</p>
</div>  -->



</header>

<body >
		<div class="headerP" style="width: 15%;margin-top: 60px;color: white;background: #39ca74;text-align: center;border-radius: 10px 10px 5px 5px;border-bottom: none; border :1px solid #39ca74;padding: 10px;margin-left:-4px   ">
	<h2>My Information</h2>
</div>




<form method="post" action="index.php"  class="infoP" style="margin-left:-1px; margin-top:0px ;width: 40%;padding: 20px;border :3px solid #39ca74 ;background: white; border-radius: 10px 10px 10px 10px;">

    




<div class="contentP" style="font-weight: bold;">



	<label>ID: <?php echo "" .isset($_SESSION['UserID']);?></label>

	 	   <br>
	 	   <br>
	 	   <label> Email : <?php echo $col['Email']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Name : <?php echo $col['Name']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Address : <?php echo $col['Address']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Contact Number : <?php echo $col['ContactNumber']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Blood Type : <?php echo $col['Bloodtype']; ?></label>
	 	   	 	   <br>
	 	   <br>
    

	 	   </div>
    
	

	 	   	<div class="input-group">
		<button type="submit" name="treatmentHistory" class="btn" style=" border-radius: 5px;margin-left: 80%; border:none;padding: 10px 20px 10px 20px">MyTreatment History</button>
        
           
	
</div>
	<div class="input-group">
		<button type="submit" name="feedback" class="btn" style=" border-radius: 5px;margin-left: 80%; border:none;padding: 10px 30px 10px 30px">Send Feedback</button>
	</div>

  
</form>

	<?php  


	  if (isset($_POST['feedback'])) {
?>
<form method="post" action="index.php" class="infoP" style="margin-left:500px; margin-top:0px ;width: 40%;padding: 20px ;
border:none ;background: white; ">
<div class="input-group">
		<div  class="header" style="width: 78%;height: 25px;margin-top:-450px;color: white;background: #39ca74;text-align: center;border-radius: 10px 10px 5px 5px;border-bottom: none; border :1px solid #39ca74;padding: 10px 13px 10px 13px;margin-left:60%  ">
	<h2>Feed Back</h2>
</div>
<textarea name="feedx" placeholder="Write something.." style="height:300px;width: 500px ; margin-top:0px;margin-left: 60%;border:2px solid #39ca74;border-radius: 10px" ></textarea>
<button type="submit" name="sendfeedback" class="btn" style=" border-radius: 15px 15px 15px 15px;margin-left: 60.5%; margin-top: 1px; border:1px solid #80DA9D ;padding: 10px 230px 10px 230px ; text-align: center;" >Send</button>


	
</div>


 <?php  }
 

?>
</form>





</body>
</html>




	
  <!--  </div> -->
	<!-- Welcome to iut medical system	-->
   <!--<div class="content"> -->
  	<!-- notification message -->
  	<!-- <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?> --> 

    <!-- logged in user information -->
   <!-- <?php  if (isset($_SESSION['username'])) : ?>
    	<p>you are successfully login.Welcome  to IUT Medical system <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p style="text-align:right;"> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>  --> 




