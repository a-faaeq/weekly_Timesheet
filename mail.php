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
$subject = "This is a timesheet Please click the link below".$row['pa_name'];
echo($to);
$message = "
<html>
<head>
<title>Time Sheet</title>
</head>
<body>
<p>
Hello,<br>Please be advised that your EVV clock in/out was unsuccessful or missed.
In order to confirm your hours,please click on the 'Time Sheet' link below to complete the missing dates shown.Please note that the link can be used only one time.If you make a mistake when submitting the form please contact us at 718-424-4200<br> 
<a href='https://candthomecare.us/timesheet/index.php?random=$random'>Time Sheet</a>
</p>

</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "Reply-To: candt@techdepartment.com\r\n";
$headers .= "Return-Path: candt@techdepartment.com\r\n";

// More headers
$headers .= 'From: <candt@techdepartment.com>' . "\r\n";
$headers .= 'Cc: toukir5@live.com' . "\r\n";
$headers .= "X-Priority: 3\r\n";
 $headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;
if(mail($to,$subject,$message,$headers)){
    
 echo("done");   
}



?>


