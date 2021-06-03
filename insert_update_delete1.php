<?php
 
   session_start();
   
if(isset($_SESSION["email"]) && isset($_SESSION["password"]) ){
  ?>  

<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<title>ADD/UPDATE/SEARCH</title>
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.9.2/themes/base/jquery-ui.min.css" integrity="sha512-YqF4f2cbm2jH7sEEu/iDJFjSQ/qUSzoiQIK2OQ3OFTsQQE5dxoCTYz1wZrTMv8ES8NYqOB5ChZU8jQdMaEv/yg==" crossorigin="anonymous" />
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>

<body>
	<div class="container my-5">
	    

			<center>


				<!--start-->
				<form action="insert_update_delete.php" method="post" id="target" enctype="multipart/form-data" target="_Blank">
					
					<table cellspacing="0" border="0" class="">
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
											<font face="Arial" size=4><a href="#"><h1>C and T Home Care</h1></h1C></a></font>
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
									<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="left" valign=top bgcolor="#FFFF00"><b>
											<font face="Arial" size=3><input type="text" name="name" id="name"></font>
										</b></td>
									<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left" valign=top bgcolor="#FFFF00"><b>
											<font face="Arial" size=3>QB ID</font>
										</b></td>
									<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=top bgcolor="#FFFF00" sdval="162" sdnum="1033;0;0"><b>
											<font face="Arial" size=3 color="#000000" name='qb'><input type="text" name="qb" id="qb"></font>
										</b></td>
									
								</tr>

						
					
					
								<tr>
									<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 height="23" align="left" valign=top><b>
											<font face="Arial" size=3>Consumer Address:</font>
										</b></td>
									<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="left" valign=top bgcolor="#FFFF00"><b>
											<font face="Arial" size=3><input type="text" name="Address" id="address"></font>
										</b></td>
									<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left" valign=top bgcolor="#FFFF00"><b>
											<font face="Arial" size=3>EVV Code</font>
										</b></td>
									<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=top bgcolor="#FFFF00" sdval="16238" sdnum="1033;0;0"><b>
											<font face="Arial" size=3 color="#000000"><input type="text" name="Evv_Code" id="evv_code"></font>
										</b></td>
									
								</tr>

						
								<tr>
									<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 height="23" align="left" valign=top><b>
											<font face="Arial" size=3>Personal Assistant Name:</font>
										</b></td>
									<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="left" valign=top bgcolor="#FFFF00"><b>
											<font face="Arial" size=3><input type="text" name="pa_name" id="pa_name"></font>
										</b></td>
									<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left" valign=top bgcolor="#FFFF00"><b>
											<font face="Arial" size=3>Payroll ID</font>
										</b></td>
									<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=top bgcolor="#FFFF00"><b>
											<font face="Arial" size=3 color="#000000"><input type="text" name="payroll" id="payroll"></font>
										</b></td>
									
								</tr>

							</div>
						</div>
					
									<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 height="23" align="left" valign=top><b><font face="Arial" size=3>Personal Assistant E-mail Address</font></b></td>
									<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" colspan=4 align="left" valign=top bgcolor="#FFFF00"><b><font face="Arial" size=3><input type="text" name="Email" id="email"></font></b></td>
									   <!--start-->
										   <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left" valign=top bgcolor="#FFFF00"><b><font face="Arial" size=3>New_Payroll_ID</font></b></td>
										   <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=top bgcolor="#FFFF00"><b><font face="Arial" size=3 color="#000000"><input type="text" name="new_payroll" id="new_payroll"></font></b></td>
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
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  align="center" valign=middle><b>
									<font face="Arial">PERSONAL ASSISTANT SIGN</font>
								</b></td>
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=middle><b>
									<font face="Arial">CONSUMER SIGN</font>
								</b></td>
	
						</tr>
						<tr>
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="32" align="center" valign=top><b>
									<font face="Arial" size=4>Mon.</font>
								</b></td>
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle>
								<font face="Arial" color="#000000"></font>
							</td>
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=top sdval="10" sdnum="1033;0;0.0"><b>
									<font face="Arial" size=4 color="#000000"><input type="text" name="mon_hour" id="mon_hour"></font>
								</b></td>
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FCFCFD">
								<font face="Arial" color="#000000"><input type="text" name="mon_start" id="mon_start"></font>
							</td>
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FCFCFD">
								<font face="Arial" color="#000000"><input type="text" name="mon_end" id="mon_end"></font>
							</td>
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FCFCFD" sdnum="1033;0;H:MM;@">
								<font face="Arial" color="#000000"><br>
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
									<font face="Arial" size=4 color="#000000"><input type="text" name="tue_hour" id="tue_hour"></font>
								</b></td>
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FCFCFD">
								<font face="Arial" color="#000000"><input type="text" name="tue_start" id="tue_start"></font>
							</td>
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FCFCFD">
								<font face="Arial" color="#000000"><input type="text" name="tue_end" id="tue_end"></font>
							</td>
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle bgcolor="#FCFCFD">
								<font face="Arial" color="#000000"><br>
								   
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
									<font face="Arial" size=4 color="#000000"><input type="text" name="wed_hour" id="wed_hour"></font>
								</b></td>
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FCFCFD">
								<font face="Arial" color="#000000"><input type="text" name="wed_start" id="wed_start"></font>
							</td>
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FCFCFD">
								<font face="Arial" color="#000000"><input type="text" name="wed_end" id="wed_end"></font>
							</td>
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle bgcolor="#FCFCFD">
								<font face="Arial" color="#000000"><br>
								
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
									<font face="Arial" size=4 color="#000000"><input type="text" name="thu_hour" id="thu_hour"></font>
								</b></td>
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FCFCFD">
								<font face="Arial" color="#000000"><input type="text" name="thu_start" id="thu_start"></font>
							</td>
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FCFCFD">
								<font face="Arial" color="#000000"><input type="text" name="thu_end" id="thu_end"></font>
							</td>
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle bgcolor="#FCFCFD">
								<font face="Arial" color="#000000"><br>
								  
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
									<font face="Arial" size=4 color="#000000"><input type="text" name="fri_hour" id="fri_hour"></font>
								</b></td>
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FCFCFD">
								<font face="Arial" color="#000000"><input type="text" name="fri_start" id="fri_start"></font>
							</td>
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FCFCFD">
								<font face="Arial" color="#000000"><input type="text" name="fri_end" id="fri_end"></font>
							</td>
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle bgcolor="#FCFCFD">
								<font face="Arial" color="#000000"><br>
									
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
									<font face="Arial" size=4 color="#000000"><input type="text" name="sat_hour" id="sat_hour"></font>
								</b></td>
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FCFCFD">
								<font face="Arial" color="#000000"><input type="text" name="sat_start" id="sat_start"></font>
							</td>
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FCFCFD">
								<font face="Arial" color="#000000"><input type="text" name="sat_end" id="sat_end"></font>
							</td>
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle bgcolor="#FCFCFD">
								<font face="Arial" color="#000000"><br>
								 
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
									<font face="Arial" size=4 color="#000000"><input type="text" name="sun_hour" id="sun_hour"></font>
								</b></td>
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FCFCFD">
								<font face="Arial" color="#000000"><input type="text" name="sun_start" id="sun_start"></font>
							</td>
							<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FCFCFD">
								<font face="Arial" color="#000000"><input type="text" name="sun_end" id="sun_end"></font>
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
	
			
			
					
					
					<button type="submit" name='submit' value='submit' id="submit" class="btn btn-success btn-lg my-2">INSERT</button>
					
					<!--<button type="submit" name='delete' value='delete' id="delete" class="btn btn-danger btn-lg">DELETE</button>-->
					
					<button type="submit" name='search' value='search' id="search" class="btn btn-primary btn-lg">SEARCH</button>
				</form>
			
	
		</center>
	 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	
	
</div>



</body>

</html>

<?php
}
else{
    
    header("Location:https://shakal.tech/employee_login.html");
    
}
?>
