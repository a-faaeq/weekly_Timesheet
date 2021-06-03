<?php
 $filepath = realpath(dirname(__FILE__));
require_once($filepath . "/db.php");

if(isset($_POST['submit'])){
$qb=$_POST['qb'];
$payroll=$_POST['payroll'];
$pa_name=$_POST['pa_name'];
$Evv_Code=$_POST['Evv_Code'];
$Email=$_POST['Email'];
$name=$_POST['name'];
$Address=$_POST['Address'];

$mon_hour=$_POST['mon_hour'];
$tue_hour=$_POST['tue_hour'];
$wed_hour=$_POST['wed_hour'];
$thu_hour=$_POST['thu_hour'];
$fri_hour=$_POST['fri_hour'];
$sat_hour=$_POST['sat_hour'];
$sun_hour=$_POST['sun_hour'];

$mon_start=$_POST['mon_start'];
$tue_start=$_POST['tue_start'];
$wed_start=$_POST['wed_start'];
$thu_start=$_POST['thu_start'];
$fri_start=$_POST['fri_start'];
$sat_start=$_POST['sat_start'];
$sun_start=$_POST['sun_start'];

$mon_end=$_POST['mon_end'];
$tue_end=$_POST['tue_end'];
$wed_end=$_POST['wed_end'];
$thu_end=$_POST['thu_end'];
$fri_end=$_POST['fri_end'];
$sat_end=$_POST['sat_end'];
$sun_end=$_POST['sun_end'];

    
if (empty($mon_hour)) {
    $mon_hour=0;
    }    
if (empty($tue_hour)) {
    $tue_hour=0;
    }
if (empty($wed_hour)) {
    $wed_hour=0;
    }
if (empty($thu_hour)) {
    $thu_hour=0;
    }
if (empty($fri_hour)) {
    $fri_hour=0;
    }
if (empty($sat_hour)) {
    $sat_hour=0;
    }
if (empty($sun_hour)) {
    $sun_hour=0;
    }




$result=mysqli_query($conn,"INSERT INTO timesheet (name,qb,Address,Evv_Code,pa_name,payroll,Email,Daily_Hour_Mon,Daily_Hour_Tue,Daily_Hour_Wed,Daily_Hour_Thu,Daily_Hour_Fri,Daily_Hour_Sat,Daily_Hour_Sun,Start_Time_Mon,Start_Time_Tue,Start_Time_Wed,Start_Time_Thu,Start_Time_Fri,Start_Time_Sat,Start_Time_Sun,End_Time_Mon,End_Time_Tue,End_Time_Wed,End_Time_Thu,End_Time_Fri,End_Time_Sat,End_Time_Sun) VALUES ('$name','$qb','$Address','$Evv_Code','$pa_name','$payroll','$Email','$mon_hour','$tue_hour','$wed_hour','$thu_hour','$fri_hour','$sat_hour','$sun_hour','$mon_start','$tue_start','$wed_start','$thu_start','$fri_start','$sat_start','$sun_start','$mon_end','$tue_end','$wed_end','$thu_end','$fri_end','$sat_end','$sun_end')");

if($result){
  ?><script>
      alert("New Timesheet Created")
  </script>  
<?php  
}
else{
    ?>
    <script>
      alert("New Timesheet Not Created please Check")
  </script>  
 <?php 
}}



elseif(isset($_POST['delete'])){
$qb=$_POST['qb'];
$payroll=$_POST['payroll'];

$result1=mysqli_query($conn,"DELETE FROM timesheet WHERE qb LIKE '$qb' AND payroll LIKE '$payroll' "); 
$rowcount = mysqli_num_rows($result);
$row=mysqli_fetch_assoc($result);
if($result1 && $row){

?> <scrip>
    alert("Data has been Deleted")
    </scrip>
<?php
}
else {

?><script>
    alert("Not Deleted")
</script>
<?php
}
}

elseif(isset($_POST['update'])){

 $qb=$_POST['qb'];
    $payroll=$_POST['payroll'];
    $pa_name=$_POST['pa_name'];
    $Evv_Code=$_POST['Evv_Code'];
    $Email=$_POST['Email'];
    $name=$_POST['name'];
    $Address=$_POST['Address'];
    $new_payroll=$_POST['new_payroll'];
    
    $mon_hour=$_POST['mon_hour'];
    $tue_hour=$_POST['tue_hour'];
    $wed_hour=$_POST['wed_hour'];
    $thu_hour=$_POST['thu_hour'];
    $fri_hour=$_POST['fri_hour'];
    $sat_hour=$_POST['sat_hour'];
    $sun_hour=$_POST['sun_hour'];
    
    
    
    $mon_start=$_POST['mon_start'];
    $tue_start=$_POST['tue_start'];
    $wed_start=$_POST['wed_start'];
    $thu_start=$_POST['thu_start'];
    $fri_start=$_POST['fri_start'];
    $sat_start=$_POST['sat_start'];
    $sun_start=$_POST['sun_start'];
    
    $mon_end=$_POST['mon_end'];
    $tue_end=$_POST['tue_end'];
    $wed_end=$_POST['wed_end'];
    $thu_end=$_POST['thu_end'];
    $fri_end=$_POST['fri_end'];
    $sat_end=$_POST['sat_end'];
    $sun_end=$_POST['sun_end'];

$result1=mysqli_query($conn,"SELECT * FROM timesheet WHERE qb='$qb' AND payroll='$payroll'");
$row=mysqli_fetch_assoc($result1);
$result=mysqli_query($conn,"UPDATE timesheet set payroll='$new_payroll', Address='$Address', pa_name='$pa_name', Evv_Code='$Evv_Code',Email='$Email',Daily_Hour_Mon='$mon_hour',Daily_Hour_Tue='$tue_hour',Daily_Hour_Wed='$wed_hour',Daily_Hour_Thu='$thu_hour',Daily_Hour_Fri='$fri_hour',Daily_Hour_sat='$sat_hour',Daily_Hour_Sun='$sun_hour',Start_Time_Mon='$mon_start',Start_Time_Tue='$tue_start',Start_Time_Wed='$wed_start',Start_Time_Thu='$thu_start',Start_Time_Fri='$fri_start',Start_Time_Sat='$sat_start',Start_Time_Sun='$sun_start',End_Time_Mon='$mon_end',End_Time_Tue='$tue_end',End_Time_Wed='$wed_end',End_Time_Thu='$thu_end',End_Time_Fri='$fri_end',End_Time_Sat='$sat_end',End_Time_Sun='$sun_end' WHERE qb='$qb' AND payroll='$payroll'");
$rowcount = mysqli_num_rows($result);

if($row && $result && $result1){
?><script>
    window.alert("TimeSheet Has Been UPDATE")
</script>
<?php
}

else{
?>
    <script>
    window.alert("TimeSheet Not Updated")
</script>
<?php
}
}
elseif(isset($_POST['search'])){

$qb=$_POST['qb'];
$payroll=$_POST['payroll'];

$result=mysqli_query($conn,"SELECT * FROM timesheet WHERE qb LIKE '$qb' AND payroll LIKE '$payroll' ");
$rowcount = mysqli_num_rows($result);
$row=mysqli_fetch_assoc($result);

if ($row){
	?>
	<!--start HTML-->

<head>
	<meta charset="utf-8">
	<title>Update</title>
	<style type="text/css">
		body {
			font: normal 100.01%/137.5% "Helvetica Neue", Helvetica, Arial, sans-serif;
		}

		#signature {
			width: 100%;
			height: auto;
			border: 1px solid black;
		}
	</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
	<center>

		

	</tr>
			<!--start-->
<div class="container my-3">			
<form action="update.php" method="post" id="target" enctype="multipart/form-data">
				<table cellspacing="0" border="0" class="table">
					<colgroup width="69"></colgroup>
					<colgroup width="167"></colgroup>
					<colgroup width="99"></colgroup>
					<colgroup width="79"></colgroup>
					<colgroup width="71"></colgroup>
					<colgroup width="93"></colgroup>
					<colgroup width="320"></colgroup>
					<colgroup width="101"></colgroup>
					<colgroup width="104"></colgroup>
					<colgroup width="122"></colgroup>
					<colgroup width="84"></colgroup>
					<colgroup span="2" width="60"></colgroup>
					<tr>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=10 height="139" align="center" valign=top><b>
								<font face="Arial" size=4><a href="mailto:payroll@candthomecare.com">C and T Home Care Services, LLC
										TEL: 718-424-4200
										Please submit copy of fully completed and signed timesheet to PAYROLL@CANDTHOMECARE.COM by 11.59PM each Sunday.
										Timesheets received late, or incomplete may result in delayed processing.</a></font>
							</b></td>
						<td align="left" valign=top>
							<font color="#000000"><br></font>
						</td>
						<td align="left" valign=bottom>
							<font color="#000000"><br></font>
						</td>
						<td align="left" valign=bottom>
							<font color="#000000"><br></font>
						</td>
					</tr>
					<tr>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 height="23" align="left" valign=top><b>
								<font face="Arial" size=3>Consumer Name:</font>
							</b></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=top bgcolor="#FFFF00"><b>
								<font face="Arial" size=3><input name='name' size='40'><br><br><?php echo $row["name"] ?></font>
							</b></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left" valign=top bgcolor="#FFFF00"><b>
								<font face="Arial" size=3>QB ID</font>
							</b></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=top bgcolor="#FFFF00" sdval="162" sdnum="1033;0;0"><b>
								<font face="Arial" size=3 color="#000000" name='qb' ><input type="hidden" name='qb' value="<?php echo $row["qb"] ?>" size='5'><br><br><?php echo $row["qb"] ?></font>
							</b></td>
						
					</tr>
					<tr>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 height="23" align="left" valign=top><b>
								<font face="Arial" size=3>Consumer Address:</font>
							</b></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=top bgcolor="#FFFF00"><b>
								<font face="Arial" size=3><input name='Address' size='40'><br><br><?php echo $row["Address"] ?></font>
							</b></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left" valign=top bgcolor="#FFFF00"><b>
								<font face="Arial" size=3>EVV_Exemption_Code</font>
							</b></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=top bgcolor="#FFFF00" sdval="16238" sdnum="1033;0;0"><b>
								<font face="Arial" size=3 color="#000000"><input name='Evv_Code' size='5'><br><br><?php echo $row["Evv_Code"] ?></font>
							</b></td>
						
					</tr>
					<tr>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 height="23" align="left" valign=top><b>
								<font face="Arial" size=3>Personal Assistant Name:</font>
							</b></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=top bgcolor="#FFFF00"><b>
								<font face="Arial" size=3> <input name='pa_name' size='40'><br><br><?php echo $row["pa_name"] ?></font>
							</b></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=top bgcolor="#FFFF00"><b>
								<font face="Arial" size=3>Payroll ID</font>
							</b></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=top bgcolor="#FFFF00"><b>
								<font face="Arial" size=3 color="#000000"><input type="hidden" name='payroll' value="<?php echo $row["payroll"] ?>" size='5'><?php echo $row["payroll"] ?></font>
							</b></td>
						
					</tr>
					<tr>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 height="23" align="center" valign=top><b>
								<font face="Arial" size=3>Personal Assistant E-mail Address</font>
							</b></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=top bgcolor="#FFFF00"><b>
								<font face="Arial" size=3><input name='Email' size='40'><br><br><?php echo $row["Email"] ?></font>
							</b></td>
							<!--start-->
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left" valign=top bgcolor="#FFFF00"><b><font face="Arial" size=3>New_Payroll_ID</font></b></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=top bgcolor="#FFFF00"><b><font face="Arial" size=3 color="#000000"><input type="text" name="new_payroll" id="new_payroll" size='5'></font></b></td>
									   <!--end-->
						<td align="left" valign=bottom>
							<font color="#000000"><br></font>
						</td>
						<td align="left" valign=bottom>
							<font color="#000000"><br></font>
						</td>
						<td align="left" valign=bottom>
							<font color="#000000"><br></font>
						</td>
					</tr>
					<tr>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=10 height="93" align="left" valign=top>
							<font face="Arial" size=3>By signing below, the consumer and personal assistant both confirm that the below hours were actually worked by the personal assistant for the consumer, that this timesheet contains true, accurate, and complete information, that the consumer was an &ldquo;eligible person&rdquo; when the services were provided, that the personal assistant lives at the exact same residential address as the consumer and that the services provided were medically necessary or otherwise authorized under the Social Services Law when furnished by the personal assistant. </font>
						</td>
						<td align="left" valign=top>
							<font color="#000000"><br></font>
						</td>
						<td align="left" valign=bottom>
							<font color="#000000"><br></font>
						</td>
						<td align="left" valign=bottom>
							<font color="#000000"><br></font>
						</td>
					</tr>
					<tr>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 height="103" align="center" valign=middle>
							<font face="Arial" color="#000000">WRITE DATES&nbsp;WORKED (MM/DD/YY)</font>
						</td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b>
								<font face="Arial">DAILY HOURS APPROVED</font>
							</b></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b>
								<font face="Arial">ENTER<br>START TIME</font>
							</b></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b>
								<font face="Arial">ENTER<br>END<br>TIME</font>
							</b></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b>
								<font face="Arial">ENTER DAILY HOURS WORKED</font>
							</b></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b>
								<font face="Arial">PERSONAL ASSISTANT<br><br>SIGN BELOW FOR EACH DAY WORKED</font>
							</b></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=middle><b>
								<font face="Arial">CONSUMER<br><br>SIGN BELOW FOR EACH DAY WORKED</font>
							</b></td>

					</tr>
					<tr>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="32" align="center" valign=center><b>
								<font face="Arial" size=4>Mon.</font>
							</b></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle>
							<font face="Arial" color="#000000"></font>
						</td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=top sdval="10" sdnum="1033;0;0.0"><b>
								<font face="Arial" size=4 color="#000000"><input name='mon_hour' size='3'><br><br><?php echo $row["Daily_Hour_Mon"] ?></font>
							</b></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FCFCFD">
							<font face="Arial" color="#000000"><input name='mon_start' size='3'><br><br><?php echo $row["Start_Time_Mon"] ?></font>
						</td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FCFCFD">
							<font face="Arial" color="#000000"><input name='mon_end' size='3'><br><br><?php echo $row["End_Time_Mon"] ?></font>
						</td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FCFCFD" sdnum="1033;0;H:MM;@">
							<font face="Arial" color="#000000"><br>
                                </font>
						</td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FCFCFD" sdnum="1033;0;H:MM;@">
							<font face="Arial" color="#000000"><br></font>
							<div id="signature_mon_1"></div>
						</td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=middle bgcolor="#FCFCFD" sdnum="1033;0;H:MM;@">
							<font face="Arial" color="#000000"><br></font>
							<div id="signature_mon_2"></div>
						</td>

					</tr>
					<tr>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="32" align="center" valign=top><b>
								<font face="Arial" size=4>Tues.</font>
							</b></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle>
							<font face="Arial" color="#000000"></font>
						</td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=top sdval="10" sdnum="1033;0;0.0"><b>
								<font face="Arial" size=4 color="#000000"><input name='tue_hour' size='3'><br><br><?php echo $row["Daily_Hour_Tue"] ?></font>
							</b></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FCFCFD">
							<font face="Arial" color="#000000"><input name='tue_start' size='3'><br><br><?php echo $row["Start_Time_Tue"] ?></font>
						</td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FCFCFD">
							<font face="Arial" color="#000000"><input name='tue_end' size='3'><br><br><?php echo $row["End_Time_Tue"] ?></font>
						</td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle bgcolor="#FCFCFD">
							<font face="Arial" color="#000000"><br>
                               
                                 </font>
						</td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FCFCFD" sdnum="1033;0;H:MM;@">
							<font face="Arial" color="#000000"><br></font>
							<div id="signature_tue_1"></div>
						</td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=middle bgcolor="#FCFCFD" sdnum="1033;0;H:MM;@">
							<font face="Arial" color="#000000"><br></font>
							<div id="signature_tue_2"></div>
						</td>

					</tr>
					<tr>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="32" align="center" valign=top><b>
								<font face="Arial" size=4>Wed.</font>
							</b></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle>
							<font face="Arial" color="#000000"></font>
						</td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=top sdval="10" sdnum="1033;0;0.0"><b>
								<font face="Arial" size=4 color="#000000"><input name='wed_hour' size='3'><br><br><?php echo $row["Daily_Hour_Wed"] ?></font>
							</b></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FCFCFD">
							<font face="Arial" color="#000000"><input name='wed_start' size='3'><br><br><?php echo $row["Start_Time_Wed"] ?></font>
						</td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FCFCFD">
							<font face="Arial" color="#000000"><input name='wed_end' size='3'><br><br><?php echo $row["End_Time_Wed"] ?></font>
						</td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle bgcolor="#FCFCFD">
							<font face="Arial" color="#000000"><br>
                              </font>
						</td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FCFCFD" sdnum="1033;0;H:MM;@">
							<font face="Arial" color="#000000"><br></font>
							<div id="signature_wed_1"></div>
						</td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=middle bgcolor="#FCFCFD" sdnum="1033;0;H:MM;@">
							<font face="Arial" color="#000000"><br></font>
							<div id="signature_wed_2"></div>
						</td>

					</tr>
					<tr>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="32" align="center" valign=top><b>
								<font face="Arial" size=4>Thurs.</font>
							</b></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle>
							<font face="Arial" color="#000000"></font>
						</td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=top sdval="10" sdnum="1033;0;0.0"><b>
								<font face="Arial" size=4 color="#000000"><input name='thu_hour' size='3'><br><br><?php echo $row["Daily_Hour_Thu"] ?></font>
							</b></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FCFCFD">
							<font face="Arial" color="#000000"><input name='thu_start' size='3'><br><br><?php echo $row["Start_Time_Thu"] ?></font>
						</td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FCFCFD">
							<font face="Arial" color="#000000"><input name='thu_end' size='3'><br><br><?php echo $row["End_Time_Thu"] ?></font>
						</td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle bgcolor="#FCFCFD">
							<font face="Arial" color="#000000"><br>
                           </font>
						</td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FCFCFD" sdnum="1033;0;H:MM;@">
							<font face="Arial" color="#000000"><br></font>
							<div id="signature_thu_1"></div>
						</td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=middle bgcolor="#FCFCFD" sdnum="1033;0;H:MM;@">
							<font face="Arial" color="#000000"><br></font>
							<div id="signature_thu_2"></div>
						</td>

					</tr>
					<tr>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="32" align="center" valign=top><b>
								<font face="Arial" size=4>Fri.</font>
							</b></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle>
							<font face="Arial" color="#000000"></font>
						</td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=top sdval="10" sdnum="1033;0;0.0"><b>
								<font face="Arial" size=4 color="#000000"><input name='fri_hour' size='3'><br><br><?php echo $row["Daily_Hour_Fri"] ?></font>
							</b></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FCFCFD">
							<font face="Arial" color="#000000"><input name='fri_start' size='3'><br><br><?php echo $row["Start_Time_Fri"] ?></font>
						</td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FCFCFD">
							<font face="Arial" color="#000000"><input name='fri_end' size='3'><br><br><?php echo $row["End_Time_Fri"] ?></font>
						</td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle bgcolor="#FCFCFD">
							<font face="Arial" color="#000000"><br>
                                </font>
						</td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FCFCFD" sdnum="1033;0;H:MM;@">
							<font face="Arial" color="#000000"><br></font>
							<div id="signature_fri_1"></div>
						</td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=middle bgcolor="#FCFCFD" sdnum="1033;0;H:MM;@">
							<font face="Arial" color="#000000"><br></font>
							<div id="signature_fri_2"></div>
						</td>

					</tr>
					<tr>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="32" align="center" valign=top><b>
								<font face="Arial" size=4>Sat.</font>
							</b></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle>
							<font face="Arial" color="#000000"></font>
						</td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=top sdval="10" sdnum="1033;0;0.0"><b>
								<font face="Arial" size=4 color="#000000"><input name='sat_hour' size='3'><br><br><?php echo $row["Daily_Hour_Sat"] ?></font>
							</b></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FCFCFD">
							<font face="Arial" color="#000000"><input name='sat_start' size='3'><br><br><?php echo $row["Start_Time_Sat"] ?></font>
						</td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FCFCFD">
							<font face="Arial" color="#000000"><input name='sat_end' size='3'><br><br><?php echo $row["End_Time_Sat"] ?></font>
						</td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle bgcolor="#FCFCFD">
							<font face="Arial" color="#000000"><br>
                                </font>
						</td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FCFCFD" sdnum="1033;0;H:MM;@">
							<!-- Signature area -->
							<div id="signature_sat_1"></div>
						</td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=middle bgcolor="#FCFCFD" sdnum="1033;0;H:MM;@">
							<font face="Arial" color="#000000"><br></font>
							<div id="signature_sat_2"></div>
						</td>

					</tr>
					<tr>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="32" align="center" valign=top><b>
								<font face="Arial" size=4>Sun.</font>
							</b></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle>
							<font face="Arial" color="#000000"></font>
						</td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=top sdval="10" sdnum="1033;0;0.0"><b>
								<font face="Arial" size=4 color="#000000"><input name='sun_hour' size='3'><br><br><?php echo $row["Daily_Hour_Sun"] ?></font>
							</b></td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FCFCFD">
							<font face="Arial" color="#000000"><input name='sun_start' size='3'><br><br><?php echo $row["Start_Time_Sun"] ?></font>
						</td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FCFCFD">
							<font face="Arial" color="#000000"><input name='sun_end' size='3'><br><br><?php echo $row["End_Time_Sun"] ?></font>
						</td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle bgcolor="#FCFCFD">
							<font face="Arial" color="#000000"><br>
                            
                    </font>
						</td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FCFCFD" sdnum="1033;0;H:MM;@">
							<font face="Arial" color="#000000"><br></font>
							<div id="signature_sun_1"></div>
						</td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=middle bgcolor="#FCFCFD" sdnum="1033;0;H:MM;@">
							<font face="Arial" color="#000000"><br></font>
							<div id="signature_sun_2"></div>
						</td>

					</tr>

					<tr>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5 height="53" align="center" valign=middle>
							<font face="Arial" size=6 color="#000000">ENTER TOTAL WEEKLY HOURS*</font>
						</td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle bgcolor="#FCFCFD">
							<font face="Arial" color="#000000"><br></font>
						</td>
						<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=middle><b>
								<font face="Arial" size=4 color="#000000">* Total Weekly Hours Cannot Exceed The Maximum Weekly Plan Approved Hours Without Prior Authorization</font>
							</b></td>
						<td align="left" valign=middle>
							<font color="#000000"><br></font>
						</td>
						<td align="left" valign=bottom>
							<font color="#000000"><br></font>
						</td>
						<td align="left" valign=bottom>
							<font color="#000000"><br></font>
						</td>
					</tr>
				</table>

		<button type="submit" name='update' value='update' id="update" class="btn btn-info btn-lg">UPDATE</button>	
	</center>

</form>	
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>

<!--End HTML-->

	
<?php
}

else{
   ?><script>
       alert("Not Found")
   </script>
   
 <?php  
}

}


?>