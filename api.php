<?php
session_start();

 $filepath = realpath(dirname(__FILE__));
	
 require_once($filepath . "/db.php");
$qb=$_POST['qb'];
$pay=$_POST['payroll'];

$random=rand(1000,10000);
$flag=0;
$date=date("Y/m/d");
$time=date("h:i:sa");
$result=mysqli_query($conn,"SELECT * FROM timesheet WHERE qb like '$qb' AND payroll like '$pay'");
$update=mysqli_query($conn,"UPDATE timesheet SET random=$random, flag=$flag WHERE qb like '$qb' AND payroll like '$pay'");
$row=mysqli_fetch_assoc($result);
$_SESSION["flag"]=$row['flag'];

$email=$_SESSION['email'];

$result1=mysqli_query($conn,"SELECT * FROM employee WHERE email like '$email'");
$row1=mysqli_fetch_assoc($result1);
$name=$row1['name'];
$result2=mysqli_query($conn,"INSERT INTO person (name,email,qb,payroll)  VALUES ('$name','$email','$qb','$pay')");



$to = $row['Email'];
$subject =$row['pa_name'];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>TimeSheets</title>
   
  </head>
  <body class="text-center">
      
      
    <form class="form-signin" method="post" action="https://shakal.tech/mail.php" enctype="multipart/form-data">
     <input type="hidden" name="to" id="to" value="<?php echo $to?>">
     <input type="hidden" name="random" id="qb" value="<?php echo $random?>">
     <input type="hidden" name="pa_name" id="qb" value="<?php echo $subject?>">
  
      <button class="btn btn-lg btn-primary btn-block" type="submit">Enter</button>
    
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

