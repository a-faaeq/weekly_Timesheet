<?php
 
   session_start();
   
if(SESSION["flag"]==0){
    
  ?> 

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.9.2/themes/base/jquery-ui.min.css" integrity="sha512-YqF4f2cbm2jH7sEEu/iDJFjSQ/qUSzoiQIK2OQ3OFTsQQE5dxoCTYz1wZrTMv8ES8NYqOB5ChZU8jQdMaEv/yg==" crossorigin="anonymous" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="css/modal.css">
  <title>TimeSheet</title>
  <!--<script src="js/cal.js"> </script>-->
  <style type="text/css">
    body {
      font: normal 100.01%/135.5% "Helvetica Neue", Helvetica, Arial, sans-serif;
    }

    #signature {
      width: 50%;
      height: 100%;
      border: 1px solid black;
    }
 
    
  </style>
</head>

<body>

<?php
		 $random = $_GET['random'];
		 
	
		// echo "a is " . is_string($userid) . "<br>";
		$filepath = realpath(dirname(__FILE__));
		// require_once($filepath . "/db_connect.php");
		require_once($filepath . "/db.php");

		// Connecting to database 
		// $db = new DB_CONNECT();
		// $conn = $db->connect();


		$result = mysqli_query($conn, "select * from timesheet where random like '$random'");
		$row = mysqli_fetch_assoc($result);
		$flag=$row['flag'];


		if (($result) && ($flag==0)) {
			echo ("");
		

		//while ($row = mysqli_fetch_assoc($result)) {

		?>

  <div class="container">

    <div class="row">
       
     <div class="col-xs">
        
       <form action="send_viewdata.php" method="POST" id="timesheet" enctype="multipart/form-data">

       <input type="hidden" name="qb" id="qb" value="<?php echo $row["qb"]?>">
			    	<input type="hidden" name="payroll" id="payroll" value="<?php echo $row["payroll"]?>">
			    	<input type="hidden" name="pa_name" id="pa_name" value="<?php echo $row["pa_name"]?>">
			    	<input type="hidden" name="evv_code" id="evv_code" value="<?php echo $row["Evv_Code"]?>">
			    	<input type="hidden" name="email" id="email" value="<?php echo $row["Email"]?>">
			    	<input type="hidden" name="name" id="name" value="<?php echo $row["name"]?>">
			    	<input type="hidden" name="address" id="address" value="<?php echo $row["Address"]?>">
			    	<!--daily hour approve-->
			    	<input type="hidden" name="mon_hour" id="mon_hour" value="<?php echo $row["Daily_Hour_Mon"] ?>">
			    	<input type="hidden" name="tue_hour" id="tue_hour" value="<?php echo $row["Daily_Hour_Tue"] ?>">
			    	<input type="hidden" name="wed_hour" id="wed_hour" value="<?php echo $row["Daily_Hour_Wed"] ?>">
			    	<input type="hidden" name="thu_hour" id="thu_hour" value="<?php echo $row["Daily_Hour_Thu"] ?>">
			    	<input type="hidden" name="fri_hour" id="fri_hour" value="<?php echo $row["Daily_Hour_Fri"] ?>">
			    	<input type="hidden" name="sat_hour" id="sat_hour" value="<?php echo $row["Daily_Hour_Sat"] ?>">
			    	<input type="hidden" name="sun_hour" id="sun_hour" value="<?php echo $row["Daily_Hour_Sun"] ?>">
			    
			    	<!--ee-->
			    		<!--start number-->
			    	<input type="hidden" name="mon_start" id="mon_start" value="<?php echo $row["Start_Time_Mon"] ?>">
			    	<input type="hidden" name="tue_start" id="tue_start" value="<?php echo $row["Start_Time_Tue"] ?>">
			    	<input type="hidden" name="wed_start" id="wed_start" value="<?php echo $row["Start_Time_Wed"] ?>">
			    	<input type="hidden" name="thu_start" id="thu_start" value="<?php echo $row["Start_Time_Thu"] ?>">
			    	<input type="hidden" name="fri_start" id="fri_start" value="<?php echo $row["Start_Time_Fri"] ?>">
			    	<input type="hidden" name="sat_start" id="sat_start" value="<?php echo $row["Start_Time_Sat"] ?>">
			    	<input type="hidden" name="sun_start" id="sun_start" value="<?php echo $row["Start_Time_Sun"] ?>">
			    	<!--ee-->
			    		<!--start number-->
			    	<input type="hidden" name="mon_end" id="mon_end" value="<?php echo $row["End_Time_Mon"] ?>">
			    	<input type="hidden" name="tue_end" id="tue_end" value="<?php echo $row["End_Time_Tue"] ?>">
			    	<input type="hidden" name="wed_end" id="wed_end" value="<?php echo $row["End_Time_Wed"] ?>">
			    	<input type="hidden" name="thu_end" id="thu_end" value="<?php echo $row["End_Time_Thu"] ?>">
			    	<input type="hidden" name="fri_end" id="fri_end" value="<?php echo $row["End_Time_Fri"] ?>">
			    	<input type="hidden" name="sat_end" id="sat_end" value="<?php echo $row["End_Time_Sat"] ?>">
			    	<input type="hidden" name="sun_end" id="sun_end" value="<?php echo $row["End_Time_Sun"] ?>">
			    	<input type="hidden" name="random" id="random" value="<?php echo $random ?>">
         
         
      <table class="table table-bordered">
        
          <thead>
            <tr>
              <th scope="col" class="text-center border-bottom border-dark" colspan="8">C and T Home Care Services, LLC
                TEL: 718-424-4200 Please submit copy of fully completed and signed timesheet to
                PAYROLL@CANDTHOMECARE.COM by 11.59PM each Sunday. Timesheets received late, or incomplete may result in
                delayed processing.</th>

            </tr>
          </thead>

          <tbody>
            <tr class="bg-warning">
              <th scope="row" class="border-right border-dark" colspan='3'>Consumer Name:</th>
              <td class="border-right border-dark" colspan='3'><?php echo $row["name"] ?></td>
              <th scope="row" class="border-right border-dark" colspan='1'>QB ID</th>
              <td class="border-right border-dark" colspan="1"><?php echo $row["qb"] ?></td>
            </tr>
            <tr class="bg-warning">
              <th scope="row" class="border-right border-dark" colspan='3'>Consumer Address:</th>
              <td class="border-right border-dark" colspan='3'><?php echo $row["Address"] ?></td>
              <th scope="row" class="border-right border-dark" colspan='1'>EVV Code</th>
              <td class="border-right border-dark" colspan="1"><?php echo $row["Evv_Code"] ?></td>
            </tr>
            <tr class="bg-warning">
              <th scope="row" class="border-right border-dark" colspan='3'>Personal Assistant Name:</th>
              <td class="border-right border-dark" colspan='3'><?php echo $row["pa_name"] ?></td>
              <th scope="row" class="border-right border-dark" colspan='1'>Payroll ID</th>
              <td class="border-right border-dark" colspan="1"><?php echo $row["payroll"] ?></td>
            </tr>
            <tr class="bg-warning">
              <th scope="row" class="border-right border-dark" colspan='3'>Personal Assistant E-mail Address</th>
              <td class="border-right border-dark" colspan='3'><?php echo $row["Email"] ?></td>
              <th scope="row" class="border-right border-dark" colspan='1'><b>Submitted By</b></th>
              <td class="border-right border-dark" colspan="1"><input type="text" name="new_payroll" id="new_payroll" required></td>
            </tr>
            <tr>
              <th scope="row" class="border-right border-dark" colspan="8">By signing below, the consumer and personal
                assistant both confirm that the below hours were actually worked by the personal assistant for the
                consumer, that this timesheet contains true, accurate, and complete information, that the consumer was
                an “eligible person” when the services were provided, that the personal assistant lives at the exact
                same residential address as the consumer and that the services provided were medically necessary or
                otherwise authorized under the Social Services Law when furnished by the personal assistant.</th>

            </tr>
            <tr>
              <th scope="row" class="border-right border-dark" colspan="2">WRITE DATES WORKED (MM/DD/YY)</th>
              <th scope="row" class="border-right border-dark" colspan="1">DAILY HOURS APPROVED</th>
              <th scope="row" class="border-right border-dark">ENTER START TIME</th>
              <th scope="row" class="border-right border-dark">ENTER END TIME</th>
              <th scope="row" class="border-right border-dark">ENTER DAILY HOURS WORKED</th>
              <th scope="row" class="border-right border-dark">PERSONAL ASSISTANT SIGN BELOW FOR EACH DAY WORKED</th>
              <th scope="row" class="border-right border-dark" colspan="8">CONSUMER SIGN BELOW FOR EACH DAY WORKED</th>
        


            </tr>
            <tr>
              <th scope="row" class="border-right border-dark">MON</th>
                 <?php
 
              if($row["Daily_Hour_Mon"]>=1){
    
               ?> 
              <td class="border-right border-dark" align="center"><input type="text" name="monday"  id="monday" size="16" autocomplete="off" required onkeydown="return false;" onchange="day1()"> </td>
              <td class="border-right border-dark" align="center"><?php echo $row["Daily_Hour_Mon"] ?></td>
              <td class="border-right border-dark" align="center">
                  HH:<br><select name="starth" id="starth" onchange="One ()" required>
                  <option value=""></option>
                  <option value="01">01</option>
                  <option value="02">02</option>
                  <option value="03">03</option>	
                  <option value="04">04</option>	
                  <option value="05">05</option>	
                  <option value="06">06</option>	
                  <option value="07">07</option>	
                  <option value="08">08</option>	
                  <option value="09">09</option>	
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  </select>
                  <br><br>
                 MM: <select name="startm" id="startm" onchange="One ()" required>
                  <option value=""></option>
                  <option value="00">00</option>
                  <option value="01">01</option>
                  <option value="02">02</option>
                  <option value="03">03</option>	
                  <option value="04">04</option>
                  <option value="05">05</option>	
                  <option value="06">06</option>	
                  <option value="07">07</option>	
                  <option value="08">08</option>	
                  <option value="09">09</option>	
                  <option value="10">10</option>	
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>	
                  <option value="17">17</option>	
                  <option value="18">18</option>	
                  <option value="19">19</option>	
                  <option value="20">20</option>	
                  <option value="21">21</option>	
                  <option value="22">22</option>	
                  <option value="23">23</option>
                  <option value="24">24</option>	
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>	
                  <option value="29">29</option>	
                  <option value="30">30</option>	
                  <option value="31">31</option>	
                  <option value="32">32</option>	
                  <option value="33">33</option>	
                  <option value="34">34</option>	
                  <option value="35">35</option>
                  <option value="36">36</option>	
                  <option value="37">37</option>
                  <option value="38">38</option>
                  <option value="39">39</option>
                  <option value="40">40</option>	
                  <option value="41">41</option>	
                  <option value="42">42</option>	
                  <option value="43">43</option>	
                  <option value="44">44</option>	
                  <option value="45">45</option>	
                  <option value="46">46</option>	
                  <option value="47">47</option>
                  <option value="48">48</option>	
                  <option value="49">49</option>
                  <option value="50">50</option>
                  <option value="51">51</option>
                  <option value="52">52</option>	
                  <option value="53">53</option>	
                  <option value="54">54</option>	
                  <option value="55">55</option>	
                  <option value="56">56</option>	
                  <option value="57">57</option>	
                  <option value="58">58</option>	
                  <option value="59">59</option>
                  </select>
                  <br><br>
                  AM/PM: <select name="starta" id="starta" onchange="One ()" required>
                  <option value=""></option>
                  <option value="am">AM</option>
                  <option value="pm">PM</option>
                  </select>
             </td>
              <td class="border-right border-dark" align="center">
                HH: <select name="endh" id="endh" onchange="One ()" required>
                  <option value="111"></option>
                  <option value="01">01</option>
                  <option value="02">02</option>
                  <option value="03">03</option>	
                  <option value="04">04</option>	
                  <option value="05">05</option>	
                  <option value="06">06</option>	
                  <option value="07">07</option>	
                  <option value="08">08</option>	
                  <option value="09">09</option>	
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  </select>
                  <br><br>
                  MM: <select name="endm" id="endm" onchange="One ()" required>
                  <option value="111"></option>
                  <option value="00">00</option>
                  <option value="01">01</option>
                  <option value="02">02</option>
                  <option value="03">03</option>	
                  <option value="04">04</option>
                  <option value="05">05</option>	
                  <option value="06">06</option>	
                  <option value="07">07</option>	
                  <option value="08">08</option>	
                  <option value="09">09</option>	
                  <option value="10">10</option>	
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>	
                  <option value="17">17</option>	
                  <option value="18">18</option>	
                  <option value="19">19</option>	
                  <option value="20">20</option>	
                  <option value="21">21</option>	
                  <option value="22">22</option>	
                  <option value="23">23</option>
                  <option value="24">24</option>	
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>	
                  <option value="29">29</option>	
                  <option value="30">30</option>	
                  <option value="31">31</option>	
                  <option value="32">32</option>	
                  <option value="33">33</option>	
                  <option value="34">34</option>	
                  <option value="35">35</option>
                  <option value="36">36</option>	
                  <option value="37">37</option>
                  <option value="38">38</option>
                  <option value="39">39</option>
                  <option value="40">40</option>	
                  <option value="41">41</option>	
                  <option value="42">42</option>	
                  <option value="43">43</option>	
                  <option value="44">44</option>	
                  <option value="45">45</option>	
                  <option value="46">46</option>	
                  <option value="47">47</option>
                  <option value="48">48</option>	
                  <option value="49">49</option>
                  <option value="50">50</option>
                  <option value="51">51</option>
                  <option value="52">52</option>	
                  <option value="53">53</option>	
                  <option value="54">54</option>	
                  <option value="55">55</option>	
                  <option value="56">56</option>	
                  <option value="57">57</option>	
                  <option value="58">58</option>	
                  <option value="59">59</option>	
                  </select>
                  <br><br>
                  AM/PM: <select name="enda" id="enda" onchange="One ()" required>
                  <option value=""></option>
                  <option value="am">AM</option>
                  <option value="pm">PM</option>
        
                  </select>
              </td>
              <td class="border-right border-dark"><h6  id="span1"></h6><input type="text" name="span" id="span" hidden>
                </td>

              <td class="border-right border-dark">
              <!--<div id="signature_sat_1"></div>-->
              <!--   Button trigger modal-->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
                  Click For Sign
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog pr">
                    <div class="modal-content">
                      <div class="modal-header">
                          
                        <h5 class="modal-title" id="exampleModalLabel1">PERSONAL ASSISTANT SIGN</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                        
                      <div class="modal-body pr">
                        <div id="signature_mon_1" class="border border-dark"></div>
                        
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
                        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                      </div>
                    </div>
                  </div>
                </div>
              </td>

              <td class="border-right border-dark">
                <!--<div id="signature_sat_1"></div>-->
                <!--   Button trigger modal-->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">
                    Click For Sign
                  </button>
  
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel2">CONSUMER SIGN</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div id="signature_mon_2" class="border border-dark"></div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
                          <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
               <?php
                     
                    }
                    else{
                        
                     
               ?>
                  <td class="border-right border-dark"><input type="text" name="mon"  id="monday" size="16" autocomplete="off" disabled></td>
                  <td class="border-right border-dark"></td>
                  <td class="border-right border-dark"></td>
                  <td class="border-right border-dark"></td>
                  <td class="border-right border-dark"></td>
                  <td class="border-right border-dark"></td>
                  <td class="border-right border-dark"></td>
                  <?php
                    }
                  ?>
              
            </tr>
            <tr>
              <th scope="row" class="border-right border-dark">TUE</th>
                                       <?php
 
  if($row["Daily_Hour_Tue"]>=1){
    
   ?> 
              <td class="border-right border-dark" align="center"><input type="text" name="tuesday"  id="tuesday" size="16" autocomplete="off" required onkeydown="return false;" onchange="day2()"></td>
              <td class="border-right border-dark" align="center"><?php echo $row["Daily_Hour_Tue"] ?></td>
              <td class="border-right border-dark" align="center">HH:<br><select name="starth1" id="starth1" onchange="Two ()" required>
                <option value=""></option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>	
                <option value="04">04</option>	
                <option value="05">05</option>	
                <option value="06">06</option>	
                <option value="07">07</option>	
                <option value="08">08</option>	
                <option value="09">09</option>	
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                </select>
                <br><br>
               MM: <select name="startm1" id="startm1" onchange="Two ()" required>
                <option value=""></option>
                <option value="00">00</option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>	
                <option value="04">04</option>
                <option value="05">05</option>	
                <option value="06">06</option>	
                <option value="07">07</option>	
                <option value="08">08</option>	
                <option value="09">09</option>	
                <option value="10">10</option>	
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>	
                <option value="17">17</option>	
                <option value="18">18</option>	
                <option value="19">19</option>	
                <option value="20">20</option>	
                <option value="21">21</option>	
                <option value="22">22</option>	
                <option value="23">23</option>
                <option value="24">24</option>	
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>	
                <option value="29">29</option>	
                <option value="30">30</option>	
                <option value="31">31</option>	
                <option value="32">32</option>	
                <option value="33">33</option>	
                <option value="34">34</option>	
                <option value="35">35</option>
                <option value="36">36</option>	
                <option value="37">37</option>
                <option value="38">38</option>
                <option value="39">39</option>
                <option value="40">40</option>	
                <option value="41">41</option>	
                <option value="42">42</option>	
                <option value="43">43</option>	
                <option value="44">44</option>	
                <option value="45">45</option>	
                <option value="46">46</option>	
                <option value="47">47</option>
                <option value="48">48</option>	
                <option value="49">49</option>
                <option value="50">50</option>
                <option value="51">51</option>
                <option value="52">52</option>	
                <option value="53">53</option>	
                <option value="54">54</option>	
                <option value="55">55</option>	
                <option value="56">56</option>	
                <option value="57">57</option>	
                <option value="58">58</option>	
                <option value="59">59</option>
                </select>
                <br><br>
                AM/PM: <select name="starta1" id="starta1" onchange="Two ()" required>
                <option value=""></option>
                <option value="am">AM</option>
                <option value="pm">PM</option>
                </select>
           </td>
            <td class="border-right border-dark" align="center">
              HH: <select name="endh1" id="endh1" onchange="Two ()" required>
                <option value="111"></option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>	
                <option value="04">04</option>	
                <option value="05">05</option>	
                <option value="06">06</option>	
                <option value="07">07</option>	
                <option value="08">08</option>	
                <option value="09">09</option>	
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                </select>
                <br><br>
                MM: <select name="endm1" id="endm1" onchange="Two ()" required>
                <option value="111"></option>
                <option value="00">00</option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>	
                <option value="04">04</option>
                <option value="05">05</option>	
                <option value="06">06</option>	
                <option value="07">07</option>	
                <option value="08">08</option>	
                <option value="09">09</option>	
                <option value="10">10</option>	
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>	
                <option value="17">17</option>	
                <option value="18">18</option>	
                <option value="19">19</option>	
                <option value="20">20</option>	
                <option value="21">21</option>	
                <option value="22">22</option>	
                <option value="23">23</option>
                <option value="24">24</option>	
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>	
                <option value="29">29</option>	
                <option value="30">30</option>	
                <option value="31">31</option>	
                <option value="32">32</option>	
                <option value="33">33</option>	
                <option value="34">34</option>	
                <option value="35">35</option>
                <option value="36">36</option>	
                <option value="37">37</option>
                <option value="38">38</option>
                <option value="39">39</option>
                <option value="40">40</option>	
                <option value="41">41</option>	
                <option value="42">42</option>	
                <option value="43">43</option>	
                <option value="44">44</option>	
                <option value="45">45</option>	
                <option value="46">46</option>	
                <option value="47">47</option>
                <option value="48">48</option>	
                <option value="49">49</option>
                <option value="50">50</option>
                <option value="51">51</option>
                <option value="52">52</option>	
                <option value="53">53</option>	
                <option value="54">54</option>	
                <option value="55">55</option>	
                <option value="56">56</option>	
                <option value="57">57</option>	
                <option value="58">58</option>	
                <option value="59">59</option>	
                </select>
                <br><br>
                AM/PM: <select name="enda1" id="enda1" onchange="Two ()" required>
                <option value=""></option>
                <option value="am">AM</option>
                <option value="pm">PM</option>
      
                </select></td>
              <td class="border-right border-dark"><h6  id="span2"></h6><input type="text" name="span1" id="span1" hidden>
   
              </td>
              
              <td class="border-right border-dark">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3">
                  Click For Sign
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel3">PERSONAL ASSISTANT SIGN</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div id="signature_tue_1" class="border border-dark my-5"></div>

                      </div>
                      <div class="modal-footer">
                     <button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
                        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                      </div>
                    </div>
                  </div>
                </div>
              </td>

              <td class="border-right border-dark">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal4">
                  Click For Sign
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel4">CONSUMER SIGN</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div id="signature_tue_2" class="border border-dark"></div>

                      </div>
                      <div class="modal-footer">
                       <button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
                        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                      </div>
                    </div>
                  </div>
                </div>
              </td>
                  <?php
                     
                    }
                    
                    else{
                        
                     
               ?>
              
                  <td class="border-right border-dark"><input type="text" name="tues"  id="tuesday" size="16" autocomplete="off" disabled></td>
                  <td class="border-right border-dark"></td>
                  <td class="border-right border-dark"></td>
                  <td class="border-right border-dark"></td>
                  <td class="border-right border-dark"></td>
                  <td class="border-right border-dark"></td>
                  <td class="border-right border-dark"></td>
                  <?php
                    }
                  ?>
              
              

            </tr>
            <tr>
              <th scope="row" class="border-right border-dark">WED</th>
<?php
 
  if($row["Daily_Hour_Wed"]>=1){
    
   ?> 
   <td class="border-right border-dark" align="center"><input type="text" name="wednesday"  id="wednesday" size="16" autocomplete="off" required onkeydown="return false;" onchange="day3()"></td>
    <td class="border-right border-dark" align="center"><?php echo $row["Daily_Hour_Wed"] ?></td>
    <td class="border-right border-dark" align="center">HH:<br><select name="starth2" id="starth2" onchange="three ()" required>

                <option value=""></option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>	
                <option value="04">04</option>	
                <option value="05">05</option>	
                <option value="06">06</option>	
                <option value="07">07</option>	
                <option value="08">08</option>	
                <option value="09">09</option>	
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                </select>
                <br><br>
               MM: <select name="startm2" id="startm2" onchange="three ()" required>
                <option value=""></option>
                <option value="00">00</option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>	
                <option value="04">04</option>
                <option value="05">05</option>	
                <option value="06">06</option>	
                <option value="07">07</option>	
                <option value="08">08</option>	
                <option value="09">09</option>	
                <option value="10">10</option>	
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>	
                <option value="17">17</option>	
                <option value="18">18</option>	
                <option value="19">19</option>	
                <option value="20">20</option>	
                <option value="21">21</option>	
                <option value="22">22</option>	
                <option value="23">23</option>
                <option value="24">24</option>	
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>	
                <option value="29">29</option>	
                <option value="30">30</option>	
                <option value="31">31</option>	
                <option value="32">32</option>	
                <option value="33">33</option>	
                <option value="34">34</option>	
                <option value="35">35</option>
                <option value="36">36</option>	
                <option value="37">37</option>
                <option value="38">38</option>
                <option value="39">39</option>
                <option value="40">40</option>	
                <option value="41">41</option>	
                <option value="42">42</option>	
                <option value="43">43</option>	
                <option value="44">44</option>	
                <option value="45">45</option>	
                <option value="46">46</option>	
                <option value="47">47</option>
                <option value="48">48</option>	
                <option value="49">49</option>
                <option value="50">50</option>
                <option value="51">51</option>
                <option value="52">52</option>	
                <option value="53">53</option>	
                <option value="54">54</option>	
                <option value="55">55</option>	
                <option value="56">56</option>	
                <option value="57">57</option>	
                <option value="58">58</option>	
                <option value="59">59</option>
                </select>
                <br><br>
                AM/PM: <select name="starta2" id="starta2" onchange="three ()" required>
                <option value=""></option>
                <option value="am">AM</option>
                <option value="pm">PM</option>
                </select>
           </td>
            <td class="border-right border-dark" align="center">
              HH: <select name="endh2" id="endh2" onchange="three ()" required>
                <option value="111"></option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>	
                <option value="04">04</option>	
                <option value="05">05</option>	
                <option value="06">06</option>	
                <option value="07">07</option>	
                <option value="08">08</option>	
                <option value="09">09</option>	
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                </select>
                <br><br>
                MM: <select name="endm2" id="endm2" onchange="three ()" required>
                <option value="111"></option>
                <option value="00">00</option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>	
                <option value="04">04</option>
                <option value="05">05</option>	
                <option value="06">06</option>	
                <option value="07">07</option>	
                <option value="08">08</option>	
                <option value="09">09</option>	
                <option value="10">10</option>	
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>	
                <option value="17">17</option>	
                <option value="18">18</option>	
                <option value="19">19</option>	
                <option value="20">20</option>	
                <option value="21">21</option>	
                <option value="22">22</option>	
                <option value="23">23</option>
                <option value="24">24</option>	
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>	
                <option value="29">29</option>	
                <option value="30">30</option>	
                <option value="31">31</option>	
                <option value="32">32</option>	
                <option value="33">33</option>	
                <option value="34">34</option>	
                <option value="35">35</option>
                <option value="36">36</option>	
                <option value="37">37</option>
                <option value="38">38</option>
                <option value="39">39</option>
                <option value="40">40</option>	
                <option value="41">41</option>	
                <option value="42">42</option>	
                <option value="43">43</option>	
                <option value="44">44</option>	
                <option value="45">45</option>	
                <option value="46">46</option>	
                <option value="47">47</option>
                <option value="48">48</option>	
                <option value="49">49</option>
                <option value="50">50</option>
                <option value="51">51</option>
                <option value="52">52</option>	
                <option value="53">53</option>	
                <option value="54">54</option>	
                <option value="55">55</option>	
                <option value="56">56</option>	
                <option value="57">57</option>	
                <option value="58">58</option>	
                <option value="59">59</option>	
                </select>
                <br><br>
                AM/PM: <select name="enda2" id="enda2" onchange="three ()" required>
                <option value=""></option>
                <option value="am">AM</option>
                <option value="pm">PM</option>
      
                </select></td>
              <td class="border-right border-dark"><h6  id="span3"></h6><input type="text" name="span2" id="span2" hidden>
   
              </td>
              <td class="border-right border-dark">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal5">
                  Click For Sign
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel5">PERSONAL ASSISTANT SIGN</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div id="signature_wed_1" class="border border-dark"></div>

                      </div>
                      <div class="modal-footer">
                       <button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
                        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                      </div>
                    </div>
                  </div>
                </div>
              </td>
              <td class="border-right border-dark">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal6">
                  Click For Sign
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel6">CONSUMER SIGN</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div id="signature_wed_2" class="border border-dark"></div>

                      </div>
                      <div class="modal-footer">
                 <button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
                        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                      </div>
                    </div>
                  </div>
                </div>
              </td>
              
                  <?php
                     
                    }
                    else{
                        
                     
               ?> 
                  <td class="border-right border-dark"><input type="text" name="wed"  id="wednesday" size="16" autocomplete="off" disabled></td>
                  <td class="border-right border-dark"></td>
                  <td class="border-right border-dark"></td>
                  <td class="border-right border-dark"></td>
                  <td class="border-right border-dark"></td>
                  <td class="border-right border-dark"></td>
                  <td class="border-right border-dark"></td>
                  <?php
                    }
                  ?>
              

            </tr>
            <tr>
              <th scope="row" class="border-right border-dark">THU</th>
                           
                                                   <?php
 
  if($row["Daily_Hour_Thu"]>=1){
    
   ?> 
              <td class="border-right border-dark" align="center"><input type="text" name="thursday"  id="thursday" size="16" required onkeydown="return false;" onchange="day4()"></td>
              <td class="border-right border-dark" align="center"><?php echo $row["Daily_Hour_Thu"] ?></td>
              <td class="border-right border-dark" align="center"> HH:<br><select name="starth3" id="starth3" onchange="four ()" required>
                <option value=""></option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>	
                <option value="04">04</option>	
                <option value="05">05</option>	
                <option value="06">06</option>	
                <option value="07">07</option>	
                <option value="08">08</option>	
                <option value="09">09</option>	
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                </select>
                <br><br>
               MM: <select name="startm3" id="startm3" onchange="four ()" required>
                <option value=""></option>
                <option value="00">00</option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>	
                <option value="04">04</option>
                <option value="05">05</option>	
                <option value="06">06</option>	
                <option value="07">07</option>	
                <option value="08">08</option>	
                <option value="09">09</option>	
                <option value="10">10</option>	
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>	
                <option value="17">17</option>	
                <option value="18">18</option>	
                <option value="19">19</option>	
                <option value="20">20</option>	
                <option value="21">21</option>	
                <option value="22">22</option>	
                <option value="23">23</option>
                <option value="24">24</option>	
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>	
                <option value="29">29</option>	
                <option value="30">30</option>	
                <option value="31">31</option>	
                <option value="32">32</option>	
                <option value="33">33</option>	
                <option value="34">34</option>	
                <option value="35">35</option>
                <option value="36">36</option>	
                <option value="37">37</option>
                <option value="38">38</option>
                <option value="39">39</option>
                <option value="40">40</option>	
                <option value="41">41</option>	
                <option value="42">42</option>	
                <option value="43">43</option>	
                <option value="44">44</option>	
                <option value="45">45</option>	
                <option value="46">46</option>	
                <option value="47">47</option>
                <option value="48">48</option>	
                <option value="49">49</option>
                <option value="50">50</option>
                <option value="51">51</option>
                <option value="52">52</option>	
                <option value="53">53</option>	
                <option value="54">54</option>	
                <option value="55">55</option>	
                <option value="56">56</option>	
                <option value="57">57</option>	
                <option value="58">58</option>	
                <option value="59">59</option>
                </select>
                <br><br>
                AM/PM: <select name="starta3" id="starta3" onchange="four ()" required>
                <option value=""></option>
                <option value="am">AM</option>
                <option value="pm">PM</option>
                </select>
           </td>
            <td class="border-right border-dark" align="center">
              HH: <select name="endh3" id="endh3" onchange="four ()" required>
                <option value="111"></option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>	
                <option value="04">04</option>	
                <option value="05">05</option>	
                <option value="06">06</option>	
                <option value="07">07</option>	
                <option value="08">08</option>	
                <option value="09">09</option>	
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                </select>
                <br><br>
                MM: <select name="endm3" id="endm3" onchange="four ()" required>
                <option value="111"></option>
                <option value="00">00</option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>	
                <option value="04">04</option>
                <option value="05">05</option>	
                <option value="06">06</option>	
                <option value="07">07</option>	
                <option value="08">08</option>	
                <option value="09">09</option>	
                <option value="10">10</option>	
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>	
                <option value="17">17</option>	
                <option value="18">18</option>	
                <option value="19">19</option>	
                <option value="20">20</option>	
                <option value="21">21</option>	
                <option value="22">22</option>	
                <option value="23">23</option>
                <option value="24">24</option>	
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>	
                <option value="29">29</option>	
                <option value="30">30</option>	
                <option value="31">31</option>	
                <option value="32">32</option>	
                <option value="33">33</option>	
                <option value="34">34</option>	
                <option value="35">35</option>
                <option value="36">36</option>	
                <option value="37">37</option>
                <option value="38">38</option>
                <option value="39">39</option>
                <option value="40">40</option>	
                <option value="41">41</option>	
                <option value="42">42</option>	
                <option value="43">43</option>	
                <option value="44">44</option>	
                <option value="45">45</option>	
                <option value="46">46</option>	
                <option value="47">47</option>
                <option value="48">48</option>	
                <option value="49">49</option>
                <option value="50">50</option>
                <option value="51">51</option>
                <option value="52">52</option>	
                <option value="53">53</option>	
                <option value="54">54</option>	
                <option value="55">55</option>	
                <option value="56">56</option>	
                <option value="57">57</option>	
                <option value="58">58</option>	
                <option value="59">59</option>	
                </select>
                <br><br>
                AM/PM: <select name="enda3" id="enda3" onchange="four ()" required>
                <option value=""></option>
                <option value="am">AM</option>
                <option value="pm">PM</option>
      
                </select></td>
              <td class="border-right border-dark"><h6  id="span4"></h6><input type="text" name="span3" id="span3" hidden>
   
              </td>
              <td class="border-right border-dark">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal7">
                  Click For Sign
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel7">PERSONAL ASSISTANT SIGN
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div id="signature_thu_1" class="border border-dark"></div>

                      </div>
                      <div class="modal-footer">
                      <button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
                        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                      </div>
                    </div>
                  </div>
                </div>
              </td>
              <td class="border-right border-dark">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal8">
                  Click For Sign
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal8" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel8">CONSUMER SIGN</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div id="signature_thu_2" class="border border-dark"></div>

                      </div>
                      <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
                        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                      </div>
                    </div>
                  </div>
                </div>
              </td>
              
                 
                  <?php
                     
                    }
                    else{
                        
                     
               ?>  
                  <td class="border-right border-dark"><input type="text" name="thu"  id="thursday" size="16" autocomplete="off" disabled></td>
                  <td class="border-right border-dark"></td>
                  <td class="border-right border-dark"></td>
                  <td class="border-right border-dark"></td>
                  <td class="border-right border-dark"></td>
                  <td class="border-right border-dark"></td>
                  <td class="border-right border-dark"></td>
                  <?php
                    }
                  ?>
              

            </tr>
            <tr>
              <th scope="row" class="border-right border-dark">FRI</th>
                                                            <?php
 
  if($row["Daily_Hour_Fri"]>=1){
    
   ?> 
         
              <td class="border-right border-dark" align="center"><input type="text" name="friday"  id="friday" size="16" required onkeydown="return false;" onchange="day5()"></td>
              <td class="border-right border-dark" align="center"><?php echo $row["Daily_Hour_Fri"] ?></td>
              <td class="border-right border-dark" align="center">HH:<br><select name="starth4" id="starth4" onchange="five ()" required>
                <option value=""></option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>	
                <option value="04">04</option>	
                <option value="05">05</option>	
                <option value="06">06</option>	
                <option value="07">07</option>	
                <option value="08">08</option>	
                <option value="09">09</option>	
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                </select>
                <br><br>
               MM: <select name="startm4" id="startm4" onchange="five ()" required>
                <option value=""></option>
                <option value="00">00</option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>	
                <option value="04">04</option>
                <option value="05">05</option>	
                <option value="06">06</option>	
                <option value="07">07</option>	
                <option value="08">08</option>	
                <option value="09">09</option>	
                <option value="10">10</option>	
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>	
                <option value="17">17</option>	
                <option value="18">18</option>	
                <option value="19">19</option>	
                <option value="20">20</option>	
                <option value="21">21</option>	
                <option value="22">22</option>	
                <option value="23">23</option>
                <option value="24">24</option>	
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>	
                <option value="29">29</option>	
                <option value="30">30</option>	
                <option value="31">31</option>	
                <option value="32">32</option>	
                <option value="33">33</option>	
                <option value="34">34</option>	
                <option value="35">35</option>
                <option value="36">36</option>	
                <option value="37">37</option>
                <option value="38">38</option>
                <option value="39">39</option>
                <option value="40">40</option>	
                <option value="41">41</option>	
                <option value="42">42</option>	
                <option value="43">43</option>	
                <option value="44">44</option>	
                <option value="45">45</option>	
                <option value="46">46</option>	
                <option value="47">47</option>
                <option value="48">48</option>	
                <option value="49">49</option>
                <option value="50">50</option>
                <option value="51">51</option>
                <option value="52">52</option>	
                <option value="53">53</option>	
                <option value="54">54</option>	
                <option value="55">55</option>	
                <option value="56">56</option>	
                <option value="57">57</option>	
                <option value="58">58</option>	
                <option value="59">59</option>
                </select>
                <br><br>
                AM/PM: <select name="starta4" id="starta4" onchange="five ()" required>
                <option value=""></option>
                <option value="am">AM</option>
                <option value="pm">PM</option>
                </select>
           </td>
            <td class="border-right border-dark" align="center">
              HH: <select name="endh4" id="endh4" onchange="five ()" required>
                <option value="111"></option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>	
                <option value="04">04</option>	
                <option value="05">05</option>	
                <option value="06">06</option>	
                <option value="07">07</option>	
                <option value="08">08</option>	
                <option value="09">09</option>	
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                </select>
                <br><br>
                MM: <select name="endm4" id="endm4" onchange="five ()" required>
                <option value="111"></option>
                <option value="00">00</option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>	
                <option value="04">04</option>
                <option value="05">05</option>	
                <option value="06">06</option>	
                <option value="07">07</option>	
                <option value="08">08</option>	
                <option value="09">09</option>	
                <option value="10">10</option>	
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>	
                <option value="17">17</option>	
                <option value="18">18</option>	
                <option value="19">19</option>	
                <option value="20">20</option>	
                <option value="21">21</option>	
                <option value="22">22</option>	
                <option value="23">23</option>
                <option value="24">24</option>	
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>	
                <option value="29">29</option>	
                <option value="30">30</option>	
                <option value="31">31</option>	
                <option value="32">32</option>	
                <option value="33">33</option>	
                <option value="34">34</option>	
                <option value="35">35</option>
                <option value="36">36</option>	
                <option value="37">37</option>
                <option value="38">38</option>
                <option value="39">39</option>
                <option value="40">40</option>	
                <option value="41">41</option>	
                <option value="42">42</option>	
                <option value="43">43</option>	
                <option value="44">44</option>	
                <option value="45">45</option>	
                <option value="46">46</option>	
                <option value="47">47</option>
                <option value="48">48</option>	
                <option value="49">49</option>
                <option value="50">50</option>
                <option value="51">51</option>
                <option value="52">52</option>	
                <option value="53">53</option>	
                <option value="54">54</option>	
                <option value="55">55</option>	
                <option value="56">56</option>	
                <option value="57">57</option>	
                <option value="58">58</option>	
                <option value="59">59</option>	
                </select>
                <br><br>
                AM/PM: <select name="enda4" id="enda4" onchange="five ()" required>
                <option value=""></option>
                <option value="am">AM</option>
                <option value="pm">PM</option>
      
                </select></td>
              <td class="border-right border-dark"><h6  id="span5"></h6><input type="text" name="span4" id="span4" hidden>
   
              </td>
              <td class="border-right border-dark">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal9">
                  Click For Sign
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal9" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel9">PERSONAL ASSISTANT SIGN
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div id="signature_fri_1" class="border border-dark"></div>

                      </div>
                      <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
                        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                      </div>
                    </div>
                  </div>
                </div>
              </td>
              <td class="border-right border-dark">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal10">
                  Click For Sign
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal10" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel10">CONSUMER SIGN</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div id="signature_fri_2" class="border border-dark"></div>

                      </div>
                      <div class="modal-footer">
                 <button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
                        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                      </div>
                    </div>
                  </div>
                </div>
              </td>
              
                   
                 
                  <?php
                     
                    }
                    else{
                        
                     
               ?>
                  <td class="border-right border-dark"><input type="text" name="fri"  id="friday" size="16" autocomplete="off" disabled></td>
                  <td class="border-right border-dark"></td>
                  <td class="border-right border-dark"></td>
                  <td class="border-right border-dark"></td>
                  <td class="border-right border-dark"></td>
                  <td class="border-right border-dark"></td>
                  <td class="border-right border-dark"></td>
                  <?php
                    }
                  ?>
              

            </tr>
            <tr>
              <th scope="row" class="border-right border-dark">SAT</th>
                                                             
                                                   <?php
 
  if($row["Daily_Hour_Sat"]>=1){
    
   ?> 
       
              <td class="border-right border-dark" align="center"><input type="text" name="saturday"  id="saturday" size="16" required onkeydown="return false;" onchange="day6()"></td>
              <td class="border-right border-dark" align="center"><?php echo $row["Daily_Hour_Sat"] ?></td>
              <td class="border-right border-dark" align="center"> HH:<br><select name="starth5" id="starth5" onchange="six ()" required>
                <option value=""></option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>	
                <option value="04">04</option>	
                <option value="05">05</option>	
                <option value="06">06</option>	
                <option value="07">07</option>	
                <option value="08">08</option>	
                <option value="09">09</option>	
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                </select>
                <br><br>
               MM: <select name="startm5" id="startm5" onchange="six ()" required>
                <option value=""></option>
                <option value="00">00</option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>	
                <option value="04">04</option>
                <option value="05">05</option>	
                <option value="06">06</option>	
                <option value="07">07</option>	
                <option value="08">08</option>	
                <option value="09">09</option>	
                <option value="10">10</option>	
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>	
                <option value="17">17</option>	
                <option value="18">18</option>	
                <option value="19">19</option>	
                <option value="20">20</option>	
                <option value="21">21</option>	
                <option value="22">22</option>	
                <option value="23">23</option>
                <option value="24">24</option>	
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>	
                <option value="29">29</option>	
                <option value="30">30</option>	
                <option value="31">31</option>	
                <option value="32">32</option>	
                <option value="33">33</option>	
                <option value="34">34</option>	
                <option value="35">35</option>
                <option value="36">36</option>	
                <option value="37">37</option>
                <option value="38">38</option>
                <option value="39">39</option>
                <option value="40">40</option>	
                <option value="41">41</option>	
                <option value="42">42</option>	
                <option value="43">43</option>	
                <option value="44">44</option>	
                <option value="45">45</option>	
                <option value="46">46</option>	
                <option value="47">47</option>
                <option value="48">48</option>	
                <option value="49">49</option>
                <option value="50">50</option>
                <option value="51">51</option>
                <option value="52">52</option>	
                <option value="53">53</option>	
                <option value="54">54</option>	
                <option value="55">55</option>	
                <option value="56">56</option>	
                <option value="57">57</option>	
                <option value="58">58</option>	
                <option value="59">59</option>
                </select>
                <br><br>
                AM/PM: <select name="starta5" id="starta5" onchange="six ()" required>
                <option value=""></option>
                <option value="am">AM</option>
                <option value="pm">PM</option>
                </select>
           </td>
            <td class="border-right border-dark" align="center">
              HH: <select name="endh5" id="endh5" onchange="six ()" required>
                <option value="111"></option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>	
                <option value="04">04</option>	
                <option value="05">05</option>	
                <option value="06">06</option>	
                <option value="07">07</option>	
                <option value="08">08</option>	
                <option value="09">09</option>	
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                </select>
                <br><br>
                MM: <select name="endm5" id="endm5" onchange="six ()" required>
                <option value="111"></option>
                <option value="00">00</option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>	
                <option value="04">04</option>
                <option value="05">05</option>	
                <option value="06">06</option>	
                <option value="07">07</option>	
                <option value="08">08</option>	
                <option value="09">09</option>	
                <option value="10">10</option>	
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>	
                <option value="17">17</option>	
                <option value="18">18</option>	
                <option value="19">19</option>	
                <option value="20">20</option>	
                <option value="21">21</option>	
                <option value="22">22</option>	
                <option value="23">23</option>
                <option value="24">24</option>	
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>	
                <option value="29">29</option>	
                <option value="30">30</option>	
                <option value="31">31</option>	
                <option value="32">32</option>	
                <option value="33">33</option>	
                <option value="34">34</option>	
                <option value="35">35</option>
                <option value="36">36</option>	
                <option value="37">37</option>
                <option value="38">38</option>
                <option value="39">39</option>
                <option value="40">40</option>	
                <option value="41">41</option>	
                <option value="42">42</option>	
                <option value="43">43</option>	
                <option value="44">44</option>	
                <option value="45">45</option>	
                <option value="46">46</option>	
                <option value="47">47</option>
                <option value="48">48</option>	
                <option value="49">49</option>
                <option value="50">50</option>
                <option value="51">51</option>
                <option value="52">52</option>	
                <option value="53">53</option>	
                <option value="54">54</option>	
                <option value="55">55</option>	
                <option value="56">56</option>	
                <option value="57">57</option>	
                <option value="58">58</option>	
                <option value="59">59</option>	
                </select>
                <br><br>
                AM/PM: <select name="enda5" id="enda5" onchange="six ()" required>
                <option value=""></option>
                <option value="am">AM</option>
                <option value="pm">PM</option>
      
                </select></td>
              <td class="border-right border-dark"><h6  id="span6"></h6><input type="text" name="span5" id="span5" hidden>
   
              </td>
              <td class="border-right border-dark">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal11">
                  Click For Sign
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal11" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel11">PERSONAL ASSISTANT SIGN
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div id="signature_sat_1" class="border border-dark"></div>

                      </div>
                      <div class="modal-footer">
                     <button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
                        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                      </div>
                    </div>
                  </div>
                </div>
              </td>
              <td class="border-right border-dark">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal12">
                  Click For Sign
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal12" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel12">CONSUMER SIGN</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div id="signature_sat_2" class="border border-dark"></div>

                      </div>
                      <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
                        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                      </div>
                    </div>
                  </div>
                </div>
              </td>
              
                     
                  <?php
                     
                    }
                    else{
                        
                     
               ?> 
                <td class="border-right border-dark"><input type="text" name="sat"  id="saturday" size="16" autocomplete="off" disabled></td>
                  <td class="border-right border-dark"></td>
                  <td class="border-right border-dark"></td>
                  <td class="border-right border-dark"></td>
                  <td class="border-right border-dark"></td>
                  <td class="border-right border-dark"></td>
                  <td class="border-right border-dark"></td>
                  <?php
                    }
                  ?>

            </tr>
            <tr>
              <th scope="row" class="border-right border-dark">SUN</th>
                                                                            <?php
 
  if($row["Daily_Hour_Sun"]>=1){
    
   ?> 
              <td class="border-right border-dark" align="center"><input type="text" name="sunday"  id="sunday" size="16" required onkeydown="return false;" onchange="day7()"></td>
              <td class="border-right border-dark" align="center"><?php echo $row["Daily_Hour_Sun"] ?></td>
              <td class="border-right border-dark" align="center">HH:<br><select name="starth6" id="starth6" onchange="seven ()" required>
                <option value=""></option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>	
                <option value="04">04</option>	
                <option value="05">05</option>	
                <option value="06">06</option>	
                <option value="07">07</option>	
                <option value="08">08</option>	
                <option value="09">09</option>	
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                </select>
                <br><br>
               MM: <select name="startm6" id="startm6" onchange="seven ()" required>
                <option value=""></option>
                <option value="00">00</option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>	
                <option value="04">04</option>
                <option value="05">05</option>	
                <option value="06">06</option>	
                <option value="07">07</option>	
                <option value="08">08</option>	
                <option value="09">09</option>	
                <option value="10">10</option>	
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>	
                <option value="17">17</option>	
                <option value="18">18</option>	
                <option value="19">19</option>	
                <option value="20">20</option>	
                <option value="21">21</option>	
                <option value="22">22</option>	
                <option value="23">23</option>
                <option value="24">24</option>	
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>	
                <option value="29">29</option>	
                <option value="30">30</option>	
                <option value="31">31</option>	
                <option value="32">32</option>	
                <option value="33">33</option>	
                <option value="34">34</option>	
                <option value="35">35</option>
                <option value="36">36</option>	
                <option value="37">37</option>
                <option value="38">38</option>
                <option value="39">39</option>
                <option value="40">40</option>	
                <option value="41">41</option>	
                <option value="42">42</option>	
                <option value="43">43</option>	
                <option value="44">44</option>	
                <option value="45">45</option>	
                <option value="46">46</option>	
                <option value="47">47</option>
                <option value="48">48</option>	
                <option value="49">49</option>
                <option value="50">50</option>
                <option value="51">51</option>
                <option value="52">52</option>	
                <option value="53">53</option>	
                <option value="54">54</option>	
                <option value="55">55</option>	
                <option value="56">56</option>	
                <option value="57">57</option>	
                <option value="58">58</option>	
                <option value="59">59</option>
                </select>
                <br><br>
                AM/PM: <select name="starta6" id="starta6" onchange="seven ()" required>
                <option value=""></option>
                <option value="am">AM</option>
                <option value="pm">PM</option>
                </select>
           </td>
            <td class="border-right border-dark" align="center">
              HH: <select name="endh6" id="endh6" onchange="seven ()" required>
                <option value="111"></option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>	
                <option value="04">04</option>	
                <option value="05">05</option>	
                <option value="06">06</option>	
                <option value="07">07</option>	
                <option value="08">08</option>	
                <option value="09">09</option>	
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                </select>
                <br><br>
                MM: <select name="endm6" id="endm6" onchange="seven ()" required>
                <option value="111"></option>
                <option value="00">00</option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>	
                <option value="04">04</option>
                <option value="05">05</option>	
                <option value="06">06</option>	
                <option value="07">07</option>	
                <option value="08">08</option>	
                <option value="09">09</option>	
                <option value="10">10</option>	
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>	
                <option value="17">17</option>	
                <option value="18">18</option>	
                <option value="19">19</option>	
                <option value="20">20</option>	
                <option value="21">21</option>	
                <option value="22">22</option>	
                <option value="23">23</option>
                <option value="24">24</option>	
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>	
                <option value="29">29</option>	
                <option value="30">30</option>	
                <option value="31">31</option>	
                <option value="32">32</option>	
                <option value="33">33</option>	
                <option value="34">34</option>	
                <option value="35">35</option>
                <option value="36">36</option>	
                <option value="37">37</option>
                <option value="38">38</option>
                <option value="39">39</option>
                <option value="40">40</option>	
                <option value="41">41</option>	
                <option value="42">42</option>	
                <option value="43">43</option>	
                <option value="44">44</option>	
                <option value="45">45</option>	
                <option value="46">46</option>	
                <option value="47">47</option>
                <option value="48">48</option>	
                <option value="49">49</option>
                <option value="50">50</option>
                <option value="51">51</option>
                <option value="52">52</option>	
                <option value="53">53</option>	
                <option value="54">54</option>	
                <option value="55">55</option>	
                <option value="56">56</option>	
                <option value="57">57</option>	
                <option value="58">58</option>	
                <option value="59">59</option>	
                </select>
                <br><br>
                AM/PM: <select name="enda6" id="enda6" onchange="seven ()" required>
                <option value=""></option>
                <option value="am">AM</option>
                <option value="pm">PM</option>
      
                </select></td>
              <td class="border-right border-dark"><h6  id="span7"></h6><input type="text" name="span6" id="span6" hidden>
   
              </td>
              <td class="border-right border-dark">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal13">
                  Click For Sign
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal13" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel13">PERSONAL ASSISTANT SIGN
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div id="signature_sun_1" class="border border-dark"></div>

                      </div>
                      <div class="modal-footer">
                       <button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
                        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                      </div>
                    </div>
                  </div>
                </div>
              </td>
              <td class="border-right border-dark">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal14">
                  Click For Sign
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal14" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel14">CONSUMER SIGN</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div id="signature_sun_2" class="border border-dark"></div>

                      </div>
                      <div class="modal-footer">
                     <button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
                        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                      </div>
                    </div>
                  </div>
                </div>
              </td>
                    <?php
                     
                    }
                    else{
                        
                     
               ?> 
                   
                   <td class="border-right border-dark"><input type="text" name="sun"  id="sunday" size="16" autocomplete="off" disabled></td>
                  <td class="border-right border-dark"></td>
                  <td class="border-right border-dark"></td>
                  <td class="border-right border-dark"></td>
                  <td class="border-right border-dark"></td>
                  <td class="border-right border-dark"></td>
                  <td class="border-right border-dark"></td>
               
                  <?php
                    }
                  ?>

            </tr>




          </tbody>


 
      <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <p id="text">Your total claimed hours exceed your weekly approved hours. Please choose from the below options:</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Revise Entries</button>
          <button type="submit" id="submit" form="timesheet" value="Submit" class="btn btn-primary"  >Submit Without Changes</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>



<!--      <div class="modal fade" id="myModal1" role="dialog">-->
<!--    <div class="modal-dialog">-->
    
      <!-- Modal content-->
<!--      <div class="modal-content">-->
<!--        <div class="modal-header">-->
<!--          <button type="button" class="close" data-dismiss="modal">&times;</button>-->
<!--          <h4 class="modal-title">Modal Header</h4>-->
<!--        </div>-->
<!--        <div class="modal-body">-->
<!--          <p>Your total claimed hours exceed your weekly approved hours</p>-->
<!--        </div>-->
<!--        <div class="modal-footer">-->
<!--          <button type="button" class="btn btn-primary" data-dismiss="modal">Revise Entries</button>-->
<!--          <button type="submit" id="submit" form="timesheet" value="Submit" class="btn btn-primary"  >Submit Without Changes</button>-->
<!--        </div>-->
<!--      </div>-->
      
<!--    </div>-->
<!--  </div>-->
  
<!--</div>-->


   

    </table>
    <input type="hidden" name="data_sun_1" id="data_sun_1">
				<input type="hidden" name="data_sun_2" id="data_sun_2">
				<input type="hidden" name="data_mon_1" id="data_mon_1">
				<input type="hidden" name="data_mon_2" id="data_mon_2">
				<input type="hidden" name="data_tue_1" id="data_tue_1">
				<input type="hidden" name="data_tue_2" id="data_tue_2">
				<input type="hidden" name="data_wed_1" id="data_wed_1">
				<input type="hidden" name="data_wed_2" id="data_wed_2">
				<input type="hidden" name="data_thu_1" id="data_thu_1">
				<input type="hidden" name="data_thu_2" id="data_thu_2">
				<input type="hidden" name="data_fri_1" id="data_fri_1">
				<input type="hidden" name="data_fri_2" id="data_fri_2">
				<input type="hidden" name="data_sat_1" id="data_sat_1">
				<input type="hidden" name="data_sat_2" id="data_sat_2">
               <div class="row">
                   <div class="col" style="margin-left: 500px;">
                    <button type="button" id="ss" class="btn btn-success" onclick='app_hour()'>SUBMIT</button>
                   </div>
               </div>
                
    </form> 
    <?php
		}}		
		?> 
     </div> 
  </div>

  </div>


  

  

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/datepicker/1.0.10/datepicker.min.js"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js" integrity="sha512-cViKBZswH231Ui53apFnPzem4pvG8mlCDrSyZskDE9OK2gyUd/L08e1AC0wjJodXYZ1wmXEuNimN1d3MWG7jaQ==" crossorigin="anonymous"></script>
	<script src="libs/jSignature.min.js"></script>
	<script src="libs/modernizr.js"></script>
	<script src="js/daypilot-modal.min-3.10.1.js"></script>
    

		

<script>


var mon_min=0;
var tue_min=0;
var wed_min=0;
var thu_min=0;
var fri_min=0;
var sat_min=0;
var sun_min=0;

var mon_hours=0;
var tue_hours=0;
var wed_hours=0;
var thu_hours=0;
var fri_hours=0;
var sat_hours=0;
var sun_hours=0;

var submit="0";

var mon=0
var tue=0
var wed=0
var thu=0
var fri=0
var sat=0
var sun=0


var y=0;

function app_hour(){

     mon=parseInt(document.getElementById("mon_hour").value);
     tue=parseInt(document.getElementById("tue_hour").value);
     wed=parseInt(document.getElementById("wed_hour").value);
     thu=parseInt(document.getElementById("thu_hour").value);
     fri=parseInt(document.getElementById("fri_hour").value);
     sat=parseInt(document.getElementById("sat_hour").value);
     sun=parseInt(document.getElementById("sun_hour").value);
   
   
    var result=mon+tue+wed+thu+fri+sat+sun;
   
         
    var total_min= (mon_min+tue_min+wed_min+fri_min+sat_min+sun_min+thu_min)/60;
    var total_work= (mon_hours+tue_hours+wed_hours+fri_hours+sat_hours+sun_hours+thu_hours)+total_min;
    
          
 
    
    alert(total_work);
    alert(result);
   
   
  if (result<total_work){
      
  $('#ss').click(function(){
    
    var mymodal = $('#myModal');
    mymodal.find('.modal-body').text('Your total claimed hours exceed your weekly approved hours. Please choose from the below options:');
    mymodal.modal('show');

  });
   
  
  //document.getElementById("submit").onclick = app_hour;
  alert(total_work);
  alert(result);
  $('#submit').click(function() {
    $('#myModal').modal('hide');
});

     
  }
  
 
  
  else {

  $('#ss').click(function(){
    
    var mymodal = $('#myModal');
    mymodal.find('.modal-body').text('Are you sure you want to submit');
    mymodal.modal('show');

  });
   
      

  
  
  }
    
  
  
  
}




function One () {
			
      var startHSelect = document.getElementById("starth");
      var startMSelect = document.getElementById("startm");
      var startASelect = document.getElementById("starta").value;
  
      var endHSelect   = document.getElementById("endh");
  
  
      var endMSelect   = document.getElementById("endm");
  
      var endASelect   = document.getElementById("enda").value;
      var elapsedSpan = document.getElementById ("span1");
      var elapsed2  = document.getElementById("span");
      var inn_am_pm=document.getElementById("starta").value;
      var out_am_pm=document.getElementById("enda").value;
      
    //   var varin = document.getElementById("sunday").value;
//       var varout = document.getElementById("monday").value;
//       var varin1 = document.getElementById("tuesday").value;
//       var varout2 = document.getElementById("wednesday").value;
//       var varin3 = document.getElementById("thursday").value;
//       var varout4 = document.getElementById("friday").value;
//       var varin5 = document.getElementById("saturday").value;
    
//       var varindate=new Date(varin);
//       var varoutdate=new Date(varout); 
//       var varinday=varindate.getDate(); 
//       var varoutday=varoutdate.getDate(); 
//       var result = Math.abs(varoutday-varinday); 
//   // 			alert(result); 
  
  
      var startH = parseInt (startHSelect.value);
  
      var startM = parseInt (startMSelect.value); 
      
      var startA = startASelect.toString();
  
      
      let time = startH +':'+startM +' '+startA;
  
  
      
      var hours = Number(time.match(/^(\d+)/)[1]);
      
      
      // window.alert(hours)
      var minutes = Number(time.match(/:(\d+)/)[1]);
      
      // window.alert(minutes)
      var AMPM = time.match(/\s(.*)$/)[1].toLowerCase();
  
      if (AMPM == "pm" && hours < 12) hours = hours + 12;
      if (AMPM == "am" && hours == 12) hours = hours - 12;
  
      
      var sHours = hours.toString();
      
      var sMinutes = minutes.toString();
  
      if (hours < 10) sHours = "0" + sHours;
      if (minutes < 10) sMinutes = "0" + sMinutes;
  
      
  
      var date1 = new Date();
      date1.setHours(sHours );
      date1.setMinutes(sMinutes);
      //alert(date1);
  
      var endH = parseInt (endHSelect.value);
      
      var endM = parseInt (endMSelect.value); 
      // alert(startM);
      var endA = endASelect.toString();
  
  
      let time1 = endH +':'+endM +' '+endA;
  
      var hours1 = Number(time1.match(/^(\d+)/)[1]);
      var minutes1 = Number(time1.match(/:(\d+)/)[1]);
      var AMPM1 = time1.match(/\s(.*)$/)[1].toLowerCase();
  
      if (AMPM1 == "pm" && hours1 < 12) hours1 = hours1 + 12;
      if (AMPM1 == "am" && hours1 == 12) hours1 = hours1 - 12;
  
      var sHours1 = hours1.toString();
      var sMinutes1 = minutes1.toString();
  
      if (hours1 < 10) sHours1 = "0" + sHours1;
      if (minutes1 < 10) sMinutes1 = "0" + sMinutes1;
     var date2 = new Date();
  
     date2.setHours(sHours1 );
     date2.setMinutes(sMinutes1);
  
     var diff = date2.getTime() - date1.getTime();
  
  
     var hours = Math.floor(diff / (1000 * 60 * 60));
     diff -= hours * (1000 * 60 * 60);
     if (hours < 0) {hours +=12*2}
   
  
     var mins = Math.floor(diff / (1000 * 60));
     diff -= mins * (1000 * 60);
     if(mins < 0 ) { mins += 24 * 60 }
     
     mon_hours=hours;
     mon_min=mins; 
    
    // if(hours==0 && mins==0){hours=24}
    
    
              
              
                  if(inn_am_pm=="pm" && out_am_pm=="am"){
                     
                      
                      elapsed2.value = "Invalid Time OR Date";
  
                    elapsedSpan.innerHTML = "<span style='color: red;'>Invalid Date or Time</span>"; 
                    var button=document.getElementById('ss');
                    button.disabled=true;
                     return (elapsedSpan.innerHTML) 
                  }
                  
                      else if((endM==111 && endH==111) && ((out_am_pm=="pm")||(out_am_pm=="am"))){
              
               elapsed2.value = "Please Enter END TIME";
               elapsedSpan.innerHTML = "<span style='color: red;'>Please Enter END TIME</span>";
               var button=document.getElementById('ss');
                button.disabled=true;
              
          }
           else if((endM==111 && endH==111)){
              
               elapsed2.value = "Please Enter END TIME";
               elapsedSpan.innerHTML = "<span style='color: red;'>Please Enter END TIME</span>";
               var button=document.getElementById('ss');
                button.disabled=true;
              
          }
                  
            else if((inn_am_pm=="pm" && out_am_pm=="pm") ||((inn_am_pm=="am" && out_am_pm=="am")) ){
                if((startH==endH) && (startM>0 ||endM>0) &&(endM>startM)){
                    elapsed2.value = hours + ':' + ((mins<=9) ? ('0'+mins) : mins);
                   elapsedSpan.innerHTML = ( hours + " HOUR:<br> " + mins + " MINUTES " );
                   var button=document.getElementById('ss');
                    button.disabled=false;
                }
              
                
                
                else if((startH==11 && endH==12)&&((startM>0 &&startM<=59)||(endM>0 &&endM<=59)) ){
                
                    elapsed2.value = "Invalid Time OR Date";
                    elapsedSpan.innerHTML = "<span style='color: red;'>Invalid Date or Time</span>";
                    
                    var button=document.getElementById('ss');
                    button.disabled=true;
                }
                else if((startH==12 && endH==12)||(endH==12)||(startH<=11&&(endH<startH))||(startH==endH)){
                    
                    elapsed2.value = "Invalid Time OR Date";
  
                    //elapsedSpan.innerHTML = elapsed2.value;
                     elapsedSpan.innerHTML = "<span style='color: red;'>Invalid Date or Time</span>";
                    var button=document.getElementById('ss');
                    button.disabled=true;
                    
                }
            else
          {
          elapsed2.value = hours + ':' + ((mins<=9) ? ('0'+mins) : mins);
          elapsedSpan.innerHTML = ( hours + " HOUR:<br>  " + mins + " MINUTES " );
              var button=document.getElementById('ss');
                    button.disabled=false;
          }
                
            }
            
            
          
            
                  
                  
          else
          {
              
          elapsed2.value = hours + ':' + ((mins<=9) ? ('0'+mins) : mins);
          elapsedSpan.innerHTML = ( hours + " HOUR:<br>  " + mins + " MINUTES " );
               var button=document.getElementById('ss');
                    button.disabled=false;
          }
     
  
  
   
  
  
  
      
      
  
  }
  
   function Two () {
			
      var startHSelect = document.getElementById("starth1");
      var startMSelect = document.getElementById("startm1");
      var startASelect = document.getElementById("starta1").value;
  
      var endHSelect   = document.getElementById("endh1");
  
  
      var endMSelect   = document.getElementById("endm1");
  
      var endASelect   = document.getElementById("enda1").value;
      var elapsedSpan = document.getElementById ("span2");
      var elapsed2  = document.getElementById("span1");
      var inn_am_pm=document.getElementById("starta1").value;
      var out_am_pm=document.getElementById("enda1").value;
      
// //   var varin = document.getElementById("sunday").value;
//       var varout = document.getElementById("monday").value;
// //       var varin1 = document.getElementById("tuesday").value;
// //       var varout2 = document.getElementById("wednesday").value;
// //       var varin3 = document.getElementById("thursday").value;
// //       var varout4 = document.getElementById("friday").value;
// //       var varin5 = document.getElementById("saturday").value;
//       var varindate=new Date(varin);
//       var varoutdate=new Date(varout); 
//       var varinday=varindate.getDate(); 
//       var varoutday=varoutdate.getDate(); 
//       var result = Math.abs(varoutday-varinday); 
//   // 			alert(result); 
  
  
      var startH = parseInt (startHSelect.value);
  
      var startM = parseInt (startMSelect.value); 
      
      var startA = startASelect.toString();
  
      
      let time = startH +':'+startM +' '+startA;
  
  
      
      var hours = Number(time.match(/^(\d+)/)[1]);
      
      
      // window.alert(hours)
      var minutes = Number(time.match(/:(\d+)/)[1]);
      
      // window.alert(minutes)
      var AMPM = time.match(/\s(.*)$/)[1].toLowerCase();
  
      if (AMPM == "pm" && hours < 12) hours = hours + 12;
      if (AMPM == "am" && hours == 12) hours = hours - 12;
  
      
      var sHours = hours.toString();
      
      var sMinutes = minutes.toString();
  
      if (hours < 10) sHours = "0" + sHours;
      if (minutes < 10) sMinutes = "0" + sMinutes;
  
      
  
      var date1 = new Date();
      date1.setHours(sHours );
      date1.setMinutes(sMinutes);
      //alert(date1);
  
      var endH = parseInt (endHSelect.value);
      
      var endM = parseInt (endMSelect.value); 
      // alert(startM);
      var endA = endASelect.toString();
  
  
      let time1 = endH +':'+endM +' '+endA;
  
      var hours1 = Number(time1.match(/^(\d+)/)[1]);
      var minutes1 = Number(time1.match(/:(\d+)/)[1]);
      var AMPM1 = time1.match(/\s(.*)$/)[1].toLowerCase();
  
      if (AMPM1 == "pm" && hours1 < 12) hours1 = hours1 + 12;
      if (AMPM1 == "am" && hours1 == 12) hours1 = hours1 - 12;
  
      var sHours1 = hours1.toString();
      var sMinutes1 = minutes1.toString();
  
      if (hours1 < 10) sHours1 = "0" + sHours1;
      if (minutes1 < 10) sMinutes1 = "0" + sMinutes1;
     var date2 = new Date();
  
     date2.setHours(sHours1 );
     date2.setMinutes(sMinutes1);
  
     var diff = date2.getTime() - date1.getTime();
  
  
     var hours = Math.floor(diff / (1000 * 60 * 60));
     diff -= hours * (1000 * 60 * 60);
     if (hours < 0) {hours +=12*2}
   
  
     var mins = Math.floor(diff / (1000 * 60));
     diff -= mins * (1000 * 60);
     if(mins < 0 ) { mins += 24 * 60 }
     
     tue_hours=hours;
     tue_min=mins; 

     
    // if(hours==0 && mins==0){hours=24}
    
    
              
                  if(inn_am_pm=="pm" && out_am_pm=="am"){
                     
                      
                      elapsed2.value = "Invalid Time OR Date";
  
                    elapsedSpan.innerHTML = "<span style='color: red;'>Invalid Date or Time</span>"; 
                    var button=document.getElementById('ss');
                    button.disabled=true;
                     return (elapsedSpan.innerHTML) 
                  }
                  
                      else if((endM==111 && endH==111) && ((out_am_pm=="pm")||(out_am_pm=="am"))){
              
               elapsed2.value = "Please Enter END TIME";
               elapsedSpan.innerHTML = "<span style='color: red;'>Please Enter END TIME</span>";
               var button=document.getElementById('ss');
                button.disabled=true;
              
          }
           else if((endM==111 && endH==111)){
              
               elapsed2.value = "Please Enter END TIME";
               elapsedSpan.innerHTML = "<span style='color: red;'>Please Enter END TIME</span>";
               var button=document.getElementById('ss');
                button.disabled=true;
              
          }
                  
            else if((inn_am_pm=="pm" && out_am_pm=="pm") ||((inn_am_pm=="am" && out_am_pm=="am")) ){
                if((startH==endH) && (startM>0 ||endM>0) &&(endM>startM)){
                    elapsed2.value = hours + ':' + ((mins<=9) ? ('0'+mins) : mins);
                   elapsedSpan.innerHTML = ( hours + " HOUR:<br> " + mins + " MINUTES " );
                   var button=document.getElementById('ss');
                    button.disabled=false;
                }
              
                
                
                else if((startH==11 && endH==12)&&((startM>0 &&startM<=59)||(endM>0 &&endM<=59)) ){
                
                    elapsed2.value = "Invalid Time OR Date";
                    elapsedSpan.innerHTML = "<span style='color: red;'>Invalid Date or Time</span>";
                    
                    var button=document.getElementById('ss');
                    button.disabled=true;
                }
                else if((startH==12 && endH==12)||(endH==12)||(startH<=11&&(endH<startH))||(startH==endH)){
                    
                    elapsed2.value = "Invalid Time OR Date";
  
                    //elapsedSpan.innerHTML = elapsed2.value;
                     elapsedSpan.innerHTML = "<span style='color: red;'>Invalid Date or Time</span>";
                    var button=document.getElementById('ss');
                    button.disabled=true;
                    
                }
            else
          {
          elapsed2.value = hours + ':' + ((mins<=9) ? ('0'+mins) : mins);
          elapsedSpan.innerHTML = ( hours + " HOUR:<br>  " + mins + " MINUTES " );
              var button=document.getElementById('ss');
                    button.disabled=false;
          }
                
            }
            
            
          
            
                  
                  
          else
          {
              
          elapsed2.value = hours + ':' + ((mins<=9) ? ('0'+mins) : mins);
          elapsedSpan.innerHTML = ( hours + " HOUR:<br>  " + mins + " MINUTES " );
               var button=document.getElementById('ss');
                    button.disabled=false;
          }
     
  
  }




  function three () {
			
      var startHSelect = document.getElementById("starth2");
      var startMSelect = document.getElementById("startm2");
      var startASelect = document.getElementById("starta2").value;
  
      var endHSelect   = document.getElementById("endh2");
  
  
      var endMSelect   = document.getElementById("endm2");
  
      var endASelect   = document.getElementById("enda2").value;
      var elapsedSpan = document.getElementById ("span3");
      var elapsed2  = document.getElementById("span2");
      var inn_am_pm=document.getElementById("starta2").value;
      var out_am_pm=document.getElementById("enda2").value;
      
//     //  var varin = document.getElementById("sunday").value;
//     //   var varout = document.getElementById("monday").value;
//     //   var varin1 = document.getElementById("tuesday").value;
//     //   var varout2 = document.getElementById("wednesday").value;
//     //   var varin3 = document.getElementById("thursday").value;
//     //   var varout4 = document.getElementById("friday").value;
//     //   var varin5 = document.getElementById("saturday").value;
//       var varindate=new Date(varin);
//       var varoutdate=new Date(varout); 
//       var varinday=varindate.getDate(); 
//       var varoutday=varoutdate.getDate(); 
//       var result = Math.abs(varoutday-varinday); 
//   // 			alert(result); 
  
  
      var startH = parseInt (startHSelect.value);
  
      var startM = parseInt (startMSelect.value); 
      
      var startA = startASelect.toString();
  
      
      let time = startH +':'+startM +' '+startA;
  
  
      
      var hours = Number(time.match(/^(\d+)/)[1]);
      
      
      // window.alert(hours)
      var minutes = Number(time.match(/:(\d+)/)[1]);
      
      // window.alert(minutes)
      var AMPM = time.match(/\s(.*)$/)[1].toLowerCase();
  
      if (AMPM == "pm" && hours < 12) hours = hours + 12;
      if (AMPM == "am" && hours == 12) hours = hours - 12;
  
      
      var sHours = hours.toString();
      
      var sMinutes = minutes.toString();
  
      if (hours < 10) sHours = "0" + sHours;
      if (minutes < 10) sMinutes = "0" + sMinutes;
  
      
  
      var date1 = new Date();
      date1.setHours(sHours );
      date1.setMinutes(sMinutes);
      //alert(date1);
  
      var endH = parseInt (endHSelect.value);
      
      var endM = parseInt (endMSelect.value); 
      // alert(startM);
      var endA = endASelect.toString();
  
  
      let time1 = endH +':'+endM +' '+endA;
  
      var hours1 = Number(time1.match(/^(\d+)/)[1]);
      var minutes1 = Number(time1.match(/:(\d+)/)[1]);
      var AMPM1 = time1.match(/\s(.*)$/)[1].toLowerCase();
  
      if (AMPM1 == "pm" && hours1 < 12) hours1 = hours1 + 12;
      if (AMPM1 == "am" && hours1 == 12) hours1 = hours1 - 12;
  
      var sHours1 = hours1.toString();
      var sMinutes1 = minutes1.toString();
  
      if (hours1 < 10) sHours1 = "0" + sHours1;
      if (minutes1 < 10) sMinutes1 = "0" + sMinutes1;
     var date2 = new Date();
  
     date2.setHours(sHours1 );
     date2.setMinutes(sMinutes1);
  
     var diff = date2.getTime() - date1.getTime();
  
  
     var hours = Math.floor(diff / (1000 * 60 * 60));
     diff -= hours * (1000 * 60 * 60);
     if (hours < 0) {hours +=12*2}
   
  
     var mins = Math.floor(diff / (1000 * 60));
     diff -= mins * (1000 * 60);
     if(mins < 0 ) { mins += 24 * 60 }
     
     wed_hours=hours;
     wed_min=mins; 
     
    // if(hours==0 && mins==0){hours=24}
    
    
              
              
                  if(inn_am_pm=="pm" && out_am_pm=="am"){
                     
                      
                      elapsed2.value = "Invalid Time OR Date";
  
                    elapsedSpan.innerHTML = "<span style='color: red;'>Invalid Date or Time</span>"; 
                    var button=document.getElementById('ss');
                    button.disabled=true;
                     return (elapsedSpan.innerHTML) 
                  }
                  
                      else if((endM==111 && endH==111) && ((out_am_pm=="pm")||(out_am_pm=="am"))){
              
               elapsed2.value = "Please Enter END TIME";
               elapsedSpan.innerHTML = "<span style='color: red;'>Please Enter END TIME</span>";
               var button=document.getElementById('ss');
                button.disabled=true;
              
          }
           else if((endM==111 && endH==111)){
              
               elapsed2.value = "Please Enter END TIME";
               elapsedSpan.innerHTML = "<span style='color: red;'>Please Enter END TIME</span>";
               var button=document.getElementById('ss');
                button.disabled=true;
              
          }
                  
            else if((inn_am_pm=="pm" && out_am_pm=="pm") ||((inn_am_pm=="am" && out_am_pm=="am")) ){
                if((startH==endH) && (startM>0 ||endM>0) &&(endM>startM)){
                    elapsed2.value = hours + ':' + ((mins<=9) ? ('0'+mins) : mins);
                   elapsedSpan.innerHTML = ( hours + " HOUR:<br> " + mins + " MINUTES " );
                   var button=document.getElementById('ss');
                    button.disabled=false;
                }
              
                
                
                else if((startH==11 && endH==12)&&((startM>0 &&startM<=59)||(endM>0 &&endM<=59)) ){
                
                    elapsed2.value = "Invalid Time OR Date";
                    elapsedSpan.innerHTML = "<span style='color: red;'>Invalid Date or Time</span>";
                    
                    var button=document.getElementById('ss');
                    button.disabled=true;
                }
                else if((startH==12 && endH==12)||(endH==12)||(startH<=11&&(endH<startH))||(startH==endH)){
                    
                    elapsed2.value = "Invalid Time OR Date";
  
                    //elapsedSpan.innerHTML = elapsed2.value;
                     elapsedSpan.innerHTML = "<span style='color: red;'>Invalid Date or Time</span>";
                    var button=document.getElementById('ss');
                    button.disabled=true;
                    
                }
            else
          {
          elapsed2.value = hours + ':' + ((mins<=9) ? ('0'+mins) : mins);
          elapsedSpan.innerHTML = ( hours + " HOUR:<br>  " + mins + " MINUTES " );
              var button=document.getElementById('ss');
                    button.disabled=false;
          }
                
            }
            
            
          
            
                  
                  
          else
          {
              
          elapsed2.value = hours + ':' + ((mins<=9) ? ('0'+mins) : mins);
          elapsedSpan.innerHTML = ( hours + " HOUR:<br>  " + mins + " MINUTES " );
               var button=document.getElementById('ss');
                    button.disabled=false;
          }
     
  
  }
  
  function four () {
			
      var startHSelect = document.getElementById("starth3");
      var startMSelect = document.getElementById("startm3");
      var startASelect = document.getElementById("starta3").value;
  
      var endHSelect   = document.getElementById("endh3");
  
  
      var endMSelect   = document.getElementById("endm3");
  
      var endASelect   = document.getElementById("enda3").value;
      var elapsedSpan = document.getElementById ("span4");
      var elapsed2  = document.getElementById("span3");
      var inn_am_pm=document.getElementById("starta3").value;
      var out_am_pm=document.getElementById("enda3").value;
      
//       var varin = document.getElementById("sunday").value;
//       var varout = document.getElementById("monday").value;
//       var varin1 = document.getElementById("tuesday").value;
//       var varout2 = document.getElementById("wednesday").value;
//       var varin3 = document.getElementById("thursday").value;
//       var varout4 = document.getElementById("friday").value;
//       var varin5 = document.getElementById("saturday").value;
//       var varindate=new Date(varin);
//       var varoutdate=new Date(varout); 
//       var varinday=varindate.getDate(); 
//       var varoutday=varoutdate.getDate(); 
//       var result = Math.abs(varoutday-varinday); 
//   // 			alert(result); 
  
  
      var startH = parseInt (startHSelect.value);
  
      var startM = parseInt (startMSelect.value); 
      
      var startA = startASelect.toString();
  
      
      let time = startH +':'+startM +' '+startA;
  
  
      
      var hours = Number(time.match(/^(\d+)/)[1]);
      
      
      // window.alert(hours)
      var minutes = Number(time.match(/:(\d+)/)[1]);
      
      // window.alert(minutes)
      var AMPM = time.match(/\s(.*)$/)[1].toLowerCase();
  
      if (AMPM == "pm" && hours < 12) hours = hours + 12;
      if (AMPM == "am" && hours == 12) hours = hours - 12;
  
      
      var sHours = hours.toString();
      
      var sMinutes = minutes.toString();
  
      if (hours < 10) sHours = "0" + sHours;
      if (minutes < 10) sMinutes = "0" + sMinutes;
  
      
  
      var date1 = new Date();
      date1.setHours(sHours );
      date1.setMinutes(sMinutes);
      //alert(date1);
  
      var endH = parseInt (endHSelect.value);
      
      var endM = parseInt (endMSelect.value); 
      // alert(startM);
      var endA = endASelect.toString();
  
  
      let time1 = endH +':'+endM +' '+endA;
  
      var hours1 = Number(time1.match(/^(\d+)/)[1]);
      var minutes1 = Number(time1.match(/:(\d+)/)[1]);
      var AMPM1 = time1.match(/\s(.*)$/)[1].toLowerCase();
  
      if (AMPM1 == "pm" && hours1 < 12) hours1 = hours1 + 12;
      if (AMPM1 == "am" && hours1 == 12) hours1 = hours1 - 12;
  
      var sHours1 = hours1.toString();
      var sMinutes1 = minutes1.toString();
  
      if (hours1 < 10) sHours1 = "0" + sHours1;
      if (minutes1 < 10) sMinutes1 = "0" + sMinutes1;
     var date2 = new Date();
  
     date2.setHours(sHours1 );
     date2.setMinutes(sMinutes1);
  
     var diff = date2.getTime() - date1.getTime();
  
  
     var hours = Math.floor(diff / (1000 * 60 * 60));
     diff -= hours * (1000 * 60 * 60);
     if (hours < 0) {hours +=12*2}
   
  
     var mins = Math.floor(diff / (1000 * 60));
     diff -= mins * (1000 * 60);
     if(mins < 0 ) { mins += 24 * 60 }
     
     thu_hours=hours;
     thu_min=mins; 
      
    // if(hours==0 && mins==0){hours=24}
    
    
              
              
                  if(inn_am_pm=="pm" && out_am_pm=="am"){
                     
                      
                      elapsed2.value = "Invalid Time OR Date";
  
                    elapsedSpan.innerHTML = "<span style='color: red;'>Invalid Date or Time</span>"; 
                    var button=document.getElementById('ss');
                    button.disabled=true;
                     return (elapsedSpan.innerHTML) 
                  }
                  
                      else if((endM==111 && endH==111) && ((out_am_pm=="pm")||(out_am_pm=="am"))){
              
               elapsed2.value = "Please Enter END TIME";
               elapsedSpan.innerHTML = "<span style='color: red;'>Please Enter END TIME</span>";
               var button=document.getElementById('ss');
                button.disabled=true;
              
          }
           else if((endM==111 && endH==111)){
              
               elapsed2.value = "Please Enter END TIME";
               elapsedSpan.innerHTML = "<span style='color: red;'>Please Enter END TIME</span>";
               var button=document.getElementById('ss');
                button.disabled=true;
              
          }
                  
            else if((inn_am_pm=="pm" && out_am_pm=="pm") ||((inn_am_pm=="am" && out_am_pm=="am")) ){
                if((startH==endH) && (startM>0 ||endM>0) &&(endM>startM)){
                    elapsed2.value = hours + ':' + ((mins<=9) ? ('0'+mins) : mins);
                   elapsedSpan.innerHTML = ( hours + " HOUR:<br> " + mins + " MINUTES " );
                   var button=document.getElementById('ss');
                    button.disabled=false;
                }
              
                
                
                else if((startH==11 && endH==12)&&((startM>0 &&startM<=59)||(endM>0 &&endM<=59)) ){
                
                    elapsed2.value = "Invalid Time OR Date";
                    elapsedSpan.innerHTML = "<span style='color: red;'>Invalid Date or Time</span>";
                    
                    var button=document.getElementById('ss');
                    button.disabled=true;
                }
                else if((startH==12 && endH==12)||(endH==12)||(startH<=11&&(endH<startH))||(startH==endH)){
                    
                    elapsed2.value = "Invalid Time OR Date";
  
                    //elapsedSpan.innerHTML = elapsed2.value;
                     elapsedSpan.innerHTML = "<span style='color: red;'>Invalid Date or Time</span>";
                    var button=document.getElementById('ss');
                    button.disabled=true;
                    
                }
            else
          {
          elapsed2.value = hours + ':' + ((mins<=9) ? ('0'+mins) : mins);
          elapsedSpan.innerHTML = ( hours + " HOUR:<br>  " + mins + " MINUTES " );
              var button=document.getElementById('ss');
                    button.disabled=false;
          }
                
            }
            
            
          
            
                  
                  
          else
          {
              
          elapsed2.value = hours + ':' + ((mins<=9) ? ('0'+mins) : mins);
          elapsedSpan.innerHTML = ( hours + " HOUR:<br>  " + mins + " MINUTES " );
               var button=document.getElementById('ss');
                    button.disabled=false;
          }
     
  
  
   
  
  
  
      
      
  
  }
  
  function five () {
			
      var startHSelect = document.getElementById("starth4");
      var startMSelect = document.getElementById("startm4");
      var startASelect = document.getElementById("starta4").value;
  
      var endHSelect   = document.getElementById("endh4");
  
  
      var endMSelect   = document.getElementById("endm4");
  
      var endASelect   = document.getElementById("enda4").value;
      var elapsedSpan = document.getElementById ("span5");
      var elapsed2  = document.getElementById("span4");
      var inn_am_pm=document.getElementById("starta4").value;
      var out_am_pm=document.getElementById("enda4").value;
      
//     var varin = document.getElementById("sunday").value;
//       var varout = document.getElementById("monday").value;
//       var varin1 = document.getElementById("tuesday").value;
//       var varout2 = document.getElementById("wednesday").value;
//       var varin3 = document.getElementById("thursday").value;
//       var varout4 = document.getElementById("friday").value;
//       var varin5 = document.getElementById("saturday").value;
//       var varindate=new Date(varin);
//       var varoutdate=new Date(varout); 
//       var varinday=varindate.getDate(); 
//       var varoutday=varoutdate.getDate(); 
//       var result = Math.abs(varoutday-varinday); 
//   // 			alert(result); 
  
  
      var startH = parseInt (startHSelect.value);
  
      var startM = parseInt (startMSelect.value); 
      
      var startA = startASelect.toString();
  
      
      let time = startH +':'+startM +' '+startA;
  
  
      
      var hours = Number(time.match(/^(\d+)/)[1]);
      
      
      // window.alert(hours)
      var minutes = Number(time.match(/:(\d+)/)[1]);
      
      // window.alert(minutes)
      var AMPM = time.match(/\s(.*)$/)[1].toLowerCase();
  
      if (AMPM == "pm" && hours < 12) hours = hours + 12;
      if (AMPM == "am" && hours == 12) hours = hours - 12;
  
      
      var sHours = hours.toString();
      
      var sMinutes = minutes.toString();
  
      if (hours < 10) sHours = "0" + sHours;
      if (minutes < 10) sMinutes = "0" + sMinutes;
  
      
  
      var date1 = new Date();
      date1.setHours(sHours );
      date1.setMinutes(sMinutes);
      //alert(date1);
  
      var endH = parseInt (endHSelect.value);
      
      var endM = parseInt (endMSelect.value); 
      // alert(startM);
      var endA = endASelect.toString();
  
  
      let time1 = endH +':'+endM +' '+endA;
  
      var hours1 = Number(time1.match(/^(\d+)/)[1]);
      var minutes1 = Number(time1.match(/:(\d+)/)[1]);
      var AMPM1 = time1.match(/\s(.*)$/)[1].toLowerCase();
  
      if (AMPM1 == "pm" && hours1 < 12) hours1 = hours1 + 12;
      if (AMPM1 == "am" && hours1 == 12) hours1 = hours1 - 12;
  
      var sHours1 = hours1.toString();
      var sMinutes1 = minutes1.toString();
  
      if (hours1 < 10) sHours1 = "0" + sHours1;
      if (minutes1 < 10) sMinutes1 = "0" + sMinutes1;
     var date2 = new Date();
  
     date2.setHours(sHours1 );
     date2.setMinutes(sMinutes1);
  
     var diff = date2.getTime() - date1.getTime();
  
  
     var hours = Math.floor(diff / (1000 * 60 * 60));
     diff -= hours * (1000 * 60 * 60);
     if (hours < 0) {hours +=12*2}
   
  
     var mins = Math.floor(diff / (1000 * 60));
     diff -= mins * (1000 * 60);
     if(mins < 0 ) { mins += 24 * 60 }
     
     fri_hours=hours;
     fri_min=mins; 
     
    // if(hours==0 && mins==0){hours=24}
    
    
              
              
                  if(inn_am_pm=="pm" && out_am_pm=="am"){
                     
                      
                      elapsed2.value = "Invalid Time OR Date";
  
                    elapsedSpan.innerHTML = "<span style='color: red;'>Invalid Date or Time</span>"; 
                    var button=document.getElementById('ss');
                    button.disabled=true;
                     return (elapsedSpan.innerHTML) 
                  }
                  
                      else if((endM==111 && endH==111) && ((out_am_pm=="pm")||(out_am_pm=="am"))){
              
               elapsed2.value = "Please Enter END TIME";
               elapsedSpan.innerHTML = "<span style='color: red;'>Please Enter END TIME</span>";
               var button=document.getElementById('ss');
                button.disabled=true;
              
          }
           else if((endM==111 && endH==111)){
              
               elapsed2.value = "Please Enter END TIME";
               elapsedSpan.innerHTML = "<span style='color: red;'>Please Enter END TIME</span>";
               var button=document.getElementById('ss');
                button.disabled=true;
              
          }
                  
            else if((inn_am_pm=="pm" && out_am_pm=="pm") ||((inn_am_pm=="am" && out_am_pm=="am")) ){
                if((startH==endH) && (startM>0 ||endM>0) &&(endM>startM)){
                    elapsed2.value = hours + ':' + ((mins<=9) ? ('0'+mins) : mins);
                   elapsedSpan.innerHTML = ( hours + " HOUR:<br> " + mins + " MINUTES " );
                   var button=document.getElementById('ss');
                    button.disabled=false;
                }
              
                
                
                else if((startH==11 && endH==12)&&((startM>0 &&startM<=59)||(endM>0 &&endM<=59)) ){
                
                    elapsed2.value = "Invalid Time OR Date";
                    elapsedSpan.innerHTML = "<span style='color: red;'>Invalid Date or Time</span>";
                    
                    var button=document.getElementById('ss');
                    button.disabled=true;
                }
                else if((startH==12 && endH==12)||(endH==12)||(startH<=11&&(endH<startH))||(startH==endH)){
                    
                    elapsed2.value = "Invalid Time OR Date";
  
                    //elapsedSpan.innerHTML = elapsed2.value;
                     elapsedSpan.innerHTML = "<span style='color: red;'>Invalid Date or Time</span>";
                    var button=document.getElementById('ss');
                    button.disabled=true;
                    
                }
            else
          {
          elapsed2.value = hours + ':' + ((mins<=9) ? ('0'+mins) : mins);
          elapsedSpan.innerHTML = ( hours + " HOUR:<br>  " + mins + " MINUTES " );
              var button=document.getElementById('ss');
                    button.disabled=false;
          }
                
            }
            
            
          
            
                  
                  
          else
          {
              
          elapsed2.value = hours + ':' + ((mins<=9) ? ('0'+mins) : mins);
          elapsedSpan.innerHTML = ( hours + " HOUR:<br>  " + mins + " MINUTES " );
               var button=document.getElementById('ss');
                    button.disabled=false;
          }
     
  
  
   
  
  
  
      
      
  
  }
  
  
  
  function six () {
			
      var startHSelect = document.getElementById("starth5");
      var startMSelect = document.getElementById("startm5");
      var startASelect = document.getElementById("starta5").value;
  
      var endHSelect   = document.getElementById("endh5");
  
  
      var endMSelect   = document.getElementById("endm5");
  
      var endASelect   = document.getElementById("enda5").value;
      var elapsedSpan = document.getElementById ("span6");
      var elapsed2  = document.getElementById("span5");
      var inn_am_pm=document.getElementById("starta5").value;
      var out_am_pm=document.getElementById("enda5").value;
      
//     var varin = document.getElementById("sunday").value;
//       var varout = document.getElementById("monday").value;
//       var varin1 = document.getElementById("tuesday").value;
//       var varout2 = document.getElementById("wednesday").value;
//       var varin3 = document.getElementById("thursday").value;
//       var varout4 = document.getElementById("friday").value;
//       var varin5 = document.getElementById("saturday").value;
//       var varindate=new Date(varin);
//       var varoutdate=new Date(varout); 
//       var varinday=varindate.getDate(); 
//       var varoutday=varoutdate.getDate(); 
//       var result = Math.abs(varoutday-varinday); 
//   // 			alert(result); 
  
  
      var startH = parseInt (startHSelect.value);
  
      var startM = parseInt (startMSelect.value); 
      
      var startA = startASelect.toString();
  
      
      let time = startH +':'+startM +' '+startA;
  
  
      
      var hours = Number(time.match(/^(\d+)/)[1]);
      
      
      // window.alert(hours)
      var minutes = Number(time.match(/:(\d+)/)[1]);
      
      // window.alert(minutes)
      var AMPM = time.match(/\s(.*)$/)[1].toLowerCase();
  
      if (AMPM == "pm" && hours < 12) hours = hours + 12;
      if (AMPM == "am" && hours == 12) hours = hours - 12;
  
      
      var sHours = hours.toString();
      
      var sMinutes = minutes.toString();
  
      if (hours < 10) sHours = "0" + sHours;
      if (minutes < 10) sMinutes = "0" + sMinutes;
  
      
  
      var date1 = new Date();
      date1.setHours(sHours );
      date1.setMinutes(sMinutes);
      //alert(date1);
  
      var endH = parseInt (endHSelect.value);
      
      var endM = parseInt (endMSelect.value); 
      // alert(startM);
      var endA = endASelect.toString();
  
  
      let time1 = endH +':'+endM +' '+endA;
  
      var hours1 = Number(time1.match(/^(\d+)/)[1]);
      var minutes1 = Number(time1.match(/:(\d+)/)[1]);
      var AMPM1 = time1.match(/\s(.*)$/)[1].toLowerCase();
  
      if (AMPM1 == "pm" && hours1 < 12) hours1 = hours1 + 12;
      if (AMPM1 == "am" && hours1 == 12) hours1 = hours1 - 12;
  
      var sHours1 = hours1.toString();
      var sMinutes1 = minutes1.toString();
  
      if (hours1 < 10) sHours1 = "0" + sHours1;
      if (minutes1 < 10) sMinutes1 = "0" + sMinutes1;
     var date2 = new Date();
  
     date2.setHours(sHours1 );
     date2.setMinutes(sMinutes1);
  
     var diff = date2.getTime() - date1.getTime();
  
  
     var hours = Math.floor(diff / (1000 * 60 * 60));
     diff -= hours * (1000 * 60 * 60);
     if (hours < 0) {hours +=12*2}
   
  
     var mins = Math.floor(diff / (1000 * 60));
     diff -= mins * (1000 * 60);
     if(mins < 0 ) { mins += 24 * 60 }
     
     sat_hours=hours;
     sat_min=mins; 
     
    // if(hours==0 && mins==0){hours=24}
    
    
              
              
                  if(inn_am_pm=="pm" && out_am_pm=="am"){
                     
                      
                      elapsed2.value = "Invalid Time OR Date";
  
                    elapsedSpan.innerHTML = "<span style='color: red;'>Invalid Date or Time</span>"; 
                    var button=document.getElementById('ss');
                    button.disabled=true;
                     return (elapsedSpan.innerHTML) 
                  }
                  
                      else if((endM==111 && endH==111) && ((out_am_pm=="pm")||(out_am_pm=="am"))){
              
               elapsed2.value = "Please Enter END TIME";
               elapsedSpan.innerHTML = "<span style='color: red;'>Please Enter END TIME</span>";
               var button=document.getElementById('ss');
                button.disabled=true;
              
          }
           else if((endM==111 && endH==111)){
              
               elapsed2.value = "Please Enter END TIME";
               elapsedSpan.innerHTML = "<span style='color: red;'>Please Enter END TIME</span>";
               var button=document.getElementById('ss');
                button.disabled=true;
              
          }
                  
            else if((inn_am_pm=="pm" && out_am_pm=="pm") ||((inn_am_pm=="am" && out_am_pm=="am")) ){
                if((startH==endH) && (startM>0 ||endM>0) &&(endM>startM)){
                    elapsed2.value = hours + ':' + ((mins<=9) ? ('0'+mins) : mins);
                   elapsedSpan.innerHTML = ( hours + " HOUR:<br> " + mins + " MINUTES " );
                   var button=document.getElementById('ss');
                    button.disabled=false;
                }
              
                
                
                else if((startH==11 && endH==12)&&((startM>0 &&startM<=59)||(endM>0 &&endM<=59)) ){
                
                    elapsed2.value = "Invalid Time OR Date";
                    elapsedSpan.innerHTML = "<span style='color: red;'>Invalid Date or Time</span>";
                    
                    var button=document.getElementById('ss');
                    button.disabled=true;
                }
                else if((startH==12 && endH==12)||(endH==12)||(startH<=11&&(endH<startH))||(startH==endH)){
                    
                    elapsed2.value = "Invalid Time OR Date";
  
                    //elapsedSpan.innerHTML = elapsed2.value;
                     elapsedSpan.innerHTML = "<span style='color: red;'>Invalid Date or Time</span>";
                    var button=document.getElementById('ss');
                    button.disabled=true;
                    
                }
            else
          {
          elapsed2.value = hours + ':' + ((mins<=9) ? ('0'+mins) : mins);
          elapsedSpan.innerHTML = ( hours + " HOUR:<br>  " + mins + " MINUTES " );
              var button=document.getElementById('ss');
                    button.disabled=false;
          }
                
            }
            
            
          
            
                  
                  
          else
          {
              
          elapsed2.value = hours + ':' + ((mins<=9) ? ('0'+mins) : mins);
          elapsedSpan.innerHTML = ( hours + " HOUR:<br>  " + mins + " MINUTES " );
               var button=document.getElementById('ss');
                    button.disabled=false;
          }
     
  
  
   
  
  
  
      
      
  
  }
  
    
  function seven () {
			
      var startHSelect = document.getElementById("starth6");
      var startMSelect = document.getElementById("startm6");
      var startASelect = document.getElementById("starta6").value;
  
      var endHSelect   = document.getElementById("endh6");
  
  
      var endMSelect   = document.getElementById("endm6");
  
      var endASelect   = document.getElementById("enda6").value;
      var elapsedSpan = document.getElementById ("span7");
      var elapsed2  = document.getElementById("span6");
      var inn_am_pm=document.getElementById("starta6").value;
      var out_am_pm=document.getElementById("enda6").value;
      
//   var varin = document.getElementById("sunday").value;
//       var varout = document.getElementById("monday").value;
//       var varin1 = document.getElementById("tuesday").value;
//       var varout2 = document.getElementById("wednesday").value;
//       var varin3 = document.getElementById("thursday").value;
//       var varout4 = document.getElementById("friday").value;
//       var varin5 = document.getElementById("saturday").value;
//       var varindate=new Date(varin);
//       var varoutdate=new Date(varout); 
//       var varinday=varindate.getDate(); 
//       var varoutday=varoutdate.getDate(); 
//       var result = Math.abs(varoutday-varinday); 
//   // 			alert(result); 
  
  
      var startH = parseInt (startHSelect.value);
  
      var startM = parseInt (startMSelect.value); 
      
      var startA = startASelect.toString();
  
      
      let time = startH +':'+startM +' '+startA;
  
  
      
      var hours = Number(time.match(/^(\d+)/)[1]);
      
      
      // window.alert(hours)
      var minutes = Number(time.match(/:(\d+)/)[1]);
      
      // window.alert(minutes)
      var AMPM = time.match(/\s(.*)$/)[1].toLowerCase();
  
      if (AMPM == "pm" && hours < 12) hours = hours + 12;
      if (AMPM == "am" && hours == 12) hours = hours - 12;
  
      
      var sHours = hours.toString();
      
      var sMinutes = minutes.toString();
  
      if (hours < 10) sHours = "0" + sHours;
      if (minutes < 10) sMinutes = "0" + sMinutes;
  
      
  
      var date1 = new Date();
      date1.setHours(sHours );
      date1.setMinutes(sMinutes);
      //alert(date1);
  
      var endH = parseInt (endHSelect.value);
      
      var endM = parseInt (endMSelect.value); 
      // alert(startM);
      var endA = endASelect.toString();
  
  
      let time1 = endH +':'+endM +' '+endA;
  
      var hours1 = Number(time1.match(/^(\d+)/)[1]);
      var minutes1 = Number(time1.match(/:(\d+)/)[1]);
      var AMPM1 = time1.match(/\s(.*)$/)[1].toLowerCase();
  
      if (AMPM1 == "pm" && hours1 < 12) hours1 = hours1 + 12;
      if (AMPM1 == "am" && hours1 == 12) hours1 = hours1 - 12;
  
      var sHours1 = hours1.toString();
      var sMinutes1 = minutes1.toString();
  
      if (hours1 < 10) sHours1 = "0" + sHours1;
      if (minutes1 < 10) sMinutes1 = "0" + sMinutes1;
     var date2 = new Date();
  
     date2.setHours(sHours1 );
     date2.setMinutes(sMinutes1);
  
     var diff = date2.getTime() - date1.getTime();
  
  
     var hours = Math.floor(diff / (1000 * 60 * 60));
     diff -= hours * (1000 * 60 * 60);
     if (hours < 0) {hours +=12*2}
   
  
     var mins = Math.floor(diff / (1000 * 60));
     diff -= mins * (1000 * 60);
     if(mins < 0 ) { mins += 24 * 60 }
     
     sun_hours=hours;
     sun_min=mins; 
     
    // if(hours==0 && mins==0){hours=24}
    
    
              
              
                  if(inn_am_pm=="pm" && out_am_pm=="am"){
                     
                      
                      elapsed2.value = "Invalid Time OR Date";
  
                    elapsedSpan.innerHTML = "<span style='color: red;'>Invalid Date or Time</span>"; 
                    var button=document.getElementById('ss');
                    button.disabled=true;
                     return (elapsedSpan.innerHTML) 
                  }
                  
                      else if((endM==111 && endH==111) && ((out_am_pm=="pm")||(out_am_pm=="am"))){
              
               elapsed2.value = "Please Enter END TIME";
               elapsedSpan.innerHTML = "<span style='color: red;'>Please Enter END TIME</span>";
               var button=document.getElementById('ss');
                button.disabled=true;
              
          }
           else if((endM==111 && endH==111)){
              
               elapsed2.value = "Please Enter END TIME";
               elapsedSpan.innerHTML = "<span style='color: red;'>Please Enter END TIME</span>";
               var button=document.getElementById('ss');
                button.disabled=true;
              
          }
                  
            else if((inn_am_pm=="pm" && out_am_pm=="pm") ||((inn_am_pm=="am" && out_am_pm=="am")) ){
                if((startH==endH) && (startM>0 ||endM>0) &&(endM>startM)){
                    elapsed2.value = hours + ':' + ((mins<=9) ? ('0'+mins) : mins);
                   elapsedSpan.innerHTML = ( hours + " HOUR:<br> " + mins + " MINUTES " );
                   var button=document.getElementById('ss');
                    button.disabled=false;
                }
              
                
                
                else if((startH==11 && endH==12)&&((startM>0 &&startM<=59)||(endM>0 &&endM<=59)) ){
                
                    elapsed2.value = "Invalid Time OR Date";
                    elapsedSpan.innerHTML = "<span style='color: red;'>Invalid Date or Time</span>";
                    
                    var button=document.getElementById('ss');
                    button.disabled=true;
                }
                else if((startH==12 && endH==12)||(endH==12)||(startH<=11&&(endH<startH))||(startH==endH)){
                    
                    elapsed2.value = "Invalid Time OR Date";
  
                    //elapsedSpan.innerHTML = elapsed2.value;
                     elapsedSpan.innerHTML = "<span style='color: red;'>Invalid Date or Time</span>";
                    var button=document.getElementById('ss');
                    button.disabled=true;
                    
                }
            else
          {
          elapsed2.value = hours + ':' + ((mins<=9) ? ('0'+mins) : mins);
          elapsedSpan.innerHTML = ( hours + " HOUR:<br>  " + mins + " MINUTES " );
              var button=document.getElementById('ss');
                    button.disabled=false;
          }
                
            }
            
            
          
            
                  
                  
          else
          {
              
          elapsed2.value = hours + ':' + ((mins<=9) ? ('0'+mins) : mins);
          elapsedSpan.innerHTML = ( hours + " HOUR:<br>  " + mins + " MINUTES " );
               var button=document.getElementById('ss');
                    button.disabled=false;
          }
     
  
  
   
  
  

     
      
  
  }
  
  
//////////////
$(document).ready(function() {

  var sigdiv_mon_1 = $("#signature_mon_1").jSignature();
  var sigdiv_mon_2 = $("#signature_mon_2").jSignature();
  var sigdiv_tue_1 = $("#signature_tue_1").jSignature();
  var sigdiv_tue_2 = $("#signature_tue_2").jSignature();
  var sigdiv_wed_1 = $("#signature_wed_1").jSignature();
  var sigdiv_wed_2 = $("#signature_wed_2").jSignature();
  var sigdiv_thu_1 = $("#signature_thu_1").jSignature();
  var sigdiv_thu_2 = $("#signature_thu_2").jSignature();
  var sigdiv_fri_1 = $("#signature_fri_1").jSignature();
  var sigdiv_fri_2 = $("#signature_fri_2").jSignature();
  var sigdiv_sat_1 = $("#signature_sat_1").jSignature();
  var sigdiv_sat_2 = $("#signature_sat_2").jSignature();
  var sigdiv_sun_1 = $("#signature_sun_1").jSignature();
  var sigdiv_sun_2 = $("#signature_sun_2").jSignature();
  


  $('#submit').on('click',function(evt) {
				// Get response of type image
				var data_mon_1 = sigdiv_mon_1.jSignature('getData', 'image');
				var data_mon_2 = sigdiv_mon_2.jSignature('getData', 'image');
				var data_tue_1 = sigdiv_tue_1.jSignature('getData', 'image');
				var data_tue_2 = sigdiv_tue_2.jSignature('getData', 'image');
				var data_wed_1 = sigdiv_wed_1.jSignature('getData', 'image');
				var data_wed_2 = sigdiv_wed_2.jSignature('getData', 'image');
				var data_thu_1 = sigdiv_thu_1.jSignature('getData', 'image');
				var data_thu_2 = sigdiv_thu_2.jSignature('getData', 'image');
				var data_fri_1 = sigdiv_fri_1.jSignature('getData', 'image');
				var data_fri_2 = sigdiv_fri_2.jSignature('getData', 'image');
				var data_sat_1 = sigdiv_sat_1.jSignature('getData', 'image');
				var data_sat_2 = sigdiv_sat_2.jSignature('getData', 'image');
				var data_sun_1 = sigdiv_sun_1.jSignature('getData', 'image');
				var data_sun_2 = sigdiv_sun_2.jSignature('getData', 'image');
				
			    if(mon>0){	
			        
				if( $('#signature_mon_1').jSignature('getData', 'native').length == 0) {
				        // $('#submit').attr('disabled',true);
                        alert('Please Enter Monday Aide Signature');
                        evt.preventDefault();
                        }
                if( $('#signature_mon_2').jSignature('getData', 'native').length == 0) {
				        // $('#submit').attr('disabled',true);
                        alert('Please Enter Monday Patient Signature');
                        evt.preventDefault();
                        }
			    }
			    if(tue>0){
                if( $('#signature_tue_1').jSignature('getData', 'native').length == 0) {
				        // $('#submit').attr('disabled',true);
                        alert('Please Enter Tuesday Aide Signature');
                        evt.preventDefault();
                        }
              
                if( $('#signature_tue_2').jSignature('getData', 'native').length == 0) {
				        // $('#submit').attr('disabled',true);
                        alert('Please Enter Tuesday Patient Signature');
                        evt.preventDefault();
                        }        
			    }
			    if(wed>0){
				if( $('#signature_wed_1').jSignature('getData', 'native').length == 0) {
				        // $('#submit').attr('disabled',true);
                        alert('Please Enter Wednesday Aide Signature');
                        evt.preventDefault();
                        }
                if( $('#signature_wed_2').jSignature('getData', 'native').length == 0) {
				        // $('#submit').attr('disabled',true);
                        alert('Please Enter Wednesday Patient Signature');
                        evt.preventDefault();
                        }
			    }
			    if(thu>0){
                if( $('#signature_thu_1').jSignature('getData', 'native').length == 0) {
				        // $('#submit').attr('disabled',true);
                        alert('Please Enter Thursday Aide Signature');
                        evt.preventDefault();
                        }
                if( $('#signature_thu_2').jSignature('getData', 'native').length == 0) {
				        // $('#submit').attr('disabled',true);
                        alert('Please Enter Thursday Patient Signature');
                        evt.preventDefault();
                        }
			    }
			    if(fri>0){
                 if( $('#signature_fri_1').jSignature('getData', 'native').length == 0) {
				        // $('#submit').attr('disabled',true);
                        alert('Please Enter Friday Aide Signature');
                        evt.preventDefault();
                        }
                if( $('#signature_fri_2').jSignature('getData', 'native').length == 0) {
				        // $('#submit').attr('disabled',true);
                        alert('Please Enter Friday Patient Signature');
                        evt.preventDefault();
                        } 
			    }
			    
			    if(sat>0){
                if( $('#signature_sat_1').jSignature('getData', 'native').length == 0) {
				        // $('#submit').attr('disabled',true);
                        alert('Please Enter Saturday Aide Signature');
                        evt.preventDefault();
                        }
                if( $('#signature_sat_2').jSignature('getData', 'native').length == 0) {
				        // $('#submit').attr('disabled',true);
                        alert('Please Enter Saturday Patient Signature');
                        evt.preventDefault();
                        }
			    }
			    if(sun>0){
                 if( $('#signature_sun_1').jSignature('getData', 'native').length == 0) {
				        // $('#submit').attr('disabled',true);
                        alert('Please Enter Sunday Aide Signature');
                        evt.preventDefault();
                        }
                if( $('#signature_sun_2').jSignature('getData', 'native').length == 0) {
				        // $('#submit').attr('disabled',true);
                        alert('Please Enter Sunday Patient Signature');
                        evt.preventDefault();
                        } 
			    }
				
				$('#data_mon_1').val(data_mon_1);
				$('#data_mon_2').val(data_mon_2);
				$('#data_tue_1').val(data_tue_1);
				$('#data_tue_2').val(data_tue_2);
				$('#data_wed_1').val(data_wed_1);
				$('#data_wed_2').val(data_wed_2);
				$('#data_thu_1').val(data_thu_1);
				$('#data_thu_2').val(data_thu_2);
				$('#data_fri_1').val(data_fri_1);
				$('#data_fri_2').val(data_fri_2);
				$('#data_sat_1').val(data_sat_1);
				$('#data_sat_2').val(data_sat_2);
				$('#data_sun_1').val(data_sun_1);
				$('#data_sun_2').val(data_sun_2);
         
				$("#target").submit();
				
			});  


// mon=parseInt(document.getElementById("mon_hour").value);
//      tue=parseInt(document.getElementById("tue_hour").value);
//      wed=parseInt(document.getElementById("wed_hour").value);
//      thu=parseInt(document.getElementById("thu_hour").value);
//      fri=parseInt(document.getElementById("fri_hour").value);
//      sat=parseInt(document.getElementById("sat_hour").value);
//      sun=parseInt(document.getElementById("sun_hour").value);

if(parseInt(document.getElementById("mon_hour").value)>0){     
$("#monday").datepicker({
beforeShowDay: function(date) {
var day = date.getDay();
 document.getElementById('tuesday').value='';
 document.getElementById('wednesday').value='';
 document.getElementById('thursday').value='';
 document.getElementById('friday').value='';
 document.getElementById('saturday').value='';
 document.getElementById('sunday').value='';
return [day == 1, ""];
  }

});
}


else if(parseInt(document.getElementById("tue_hour").value)>0){
$("#tuesday").datepicker({
  beforeShowDay: function(date) {
    var day = date.getDay();
    
 document.getElementById('wednesday').value='';
 document.getElementById('thursday').value='';
 document.getElementById('friday').value='';
 document.getElementById('saturday').value='';
 document.getElementById('sunday').value='';
    return [day == 2, ""];
  }
});
}
else if(parseInt(document.getElementById("wed_hour").value)>0){
$("#wednesday").datepicker({
  beforeShowDay: function(date) {
    var day = date.getDay();

 document.getElementById('thursday').value='';
 document.getElementById('friday').value='';
 document.getElementById('saturday').value='';
 document.getElementById('sunday').value='';
    return [day == 3, ""];
  }
});
}
else if(parseInt(document.getElementById("thu_hour").value)>0){
$("#thursday").datepicker({
  beforeShowDay: function(date) {
    var day = date.getDay();
 document.getElementById('friday').value='';
 document.getElementById('saturday').value='';
 document.getElementById('sunday').value='';
    
    return [day == 4, ""];
  }
});
}
else if(parseInt(document.getElementById("fri_hour").value)>0){
$("#friday").datepicker({
  beforeShowDay: function(date) {
    var day = date.getDay();
 document.getElementById('saturday').value='';
 document.getElementById('sunday').value='';
    return [day == 5, ""];
  }
});
}
else if(parseInt(document.getElementById("sat_hour").value)>0){
$("#saturday").datepicker({
  beforeShowDay: function(date) {
    var day = date.getDay();
 document.getElementById('sunday').value='';
    return [day == 6, ""];
  }
});
}

else if(parseInt(document.getElementById("sun_hour").value)>0){
    
$("#sunday").datepicker({
  beforeShowDay: function(date) {
    var day = date.getDay();
    return [day == 0, ""];
  }
});
}
else{
    alert("Nothig")
}

$("#tuesday").datepicker({
    beforeShowDay: function(date) {
    //var y=document.getElementById("monday").value;
    var day = date.getDate();
    var day1 = date.getMonth();
    var day2 = date.getFullYear();
    
     var z= new Date(y)
     var nextdate= new Date(y)
     nextdate.setDate(nextdate.getDate() + 1);
     
    var date=z.getDate();
    var month=z.getMonth();
    var year=z.getFullYear();
    var nextdate_date=nextdate.getDate()
    var nextdate_Month=nextdate.getMonth()
    
    
    if(month!=nextdate_Month){
        
        return[(( day1==nextdate_Month )  && (day==nextdate_date ||day1==month ) && day2==year )]
    }
    else{
    return[((day>date && day==nextdate_date) && (day1<=month && day1>=nextdate_Month ) && day2==year )]
    }
    
   
  }
 
});


$("#wednesday").datepicker({
    beforeShowDay: function(date) {
    //var y=document.getElementById("monday").value;
    var day = date.getDate();
    var day1 = date.getMonth();
    var day2 = date.getFullYear();
    
     var z= new Date(y)
     var nextdate= new Date(y)
     nextdate.setDate(nextdate.getDate() + 2);
     
    var date=z.getDate();
    var month=z.getMonth();
    var year=z.getFullYear();
    var nextdate_date=nextdate.getDate()
    var nextdate_Month=nextdate.getMonth()
    
    
    if(month!=nextdate_Month){
        
        return[(( day1==nextdate_Month)  && (day==nextdate_date ||day1==month ) && day2==year )]
    }
    else{
    return[((day>date && day==nextdate_date) && (day1<=month && day1>=nextdate_Month ) && day2==year )]
    }
    
   
  }
 
});

$("#thursday").datepicker({
    beforeShowDay: function(date) {
    //var y=document.getElementById("monday").value;
    var day = date.getDate();
    var day1 = date.getMonth();
    var day2 = date.getFullYear();
    
     var z= new Date(y)
     var nextdate= new Date(y)
     nextdate.setDate(nextdate.getDate() + 3);
     
    var date=z.getDate();
    var month=z.getMonth();
    var year=z.getFullYear();
    var nextdate_date=nextdate.getDate()
    var nextdate_Month=nextdate.getMonth()
    
    
    if(month!=nextdate_Month){
        
        return[(( day1==nextdate_Month)  && (day==nextdate_date ||day1==month ) && day2==year )]
    }
    else{
    return[((day>date && day==nextdate_date) && (day1<=month && day1>=nextdate_Month ) && day2==year )]
    }
    
   
  }
 
});

$("#friday").datepicker({
    beforeShowDay: function(date) {
    //var y=document.getElementById("monday").value;
    var day = date.getDate();
    var day1 = date.getMonth();
    var day2 = date.getFullYear();
    
     var z= new Date(y)
     var nextdate= new Date(y)
     nextdate.setDate(nextdate.getDate() + 4);
     
    var date=z.getDate();
    var month=z.getMonth();
    var year=z.getFullYear();
    var nextdate_date=nextdate.getDate()
    var nextdate_Month=nextdate.getMonth()
    
    
    if(month!=nextdate_Month){
        
        return[(( day1==nextdate_Month)  && (day==nextdate_date ||day1==month ) && day2==year )]
    }
    else{
    return[((day>date && day==nextdate_date) && (day1<=month && day1>=nextdate_Month ) && day2==year )]
    }
    
   
  }
 
});

$("#saturday").datepicker({
    beforeShowDay: function(date) {
    //var y=document.getElementById("monday").value;
    var day = date.getDate();
    var day1 = date.getMonth();
    var day2 = date.getFullYear();
    
     var z= new Date(y)
     var nextdate= new Date(y)
     nextdate.setDate(nextdate.getDate() + 5);
     
    var date=z.getDate();
    var month=z.getMonth();
    var year=z.getFullYear();
    var nextdate_date=nextdate.getDate()
    var nextdate_Month=nextdate.getMonth()
    
    
    if(month!=nextdate_Month){
        
        return[(( day1==nextdate_Month)  && (day==nextdate_date ||day1==month ) && day2==year )]
    }
    else{
    return[((day>date && day==nextdate_date) && (day1<=month && day1>=nextdate_Month ) && day2==year )]
    }
    
   
  }
 
  
 
});

$("#sunday").datepicker({
    beforeShowDay: function(date) {
    //var y=document.getElementById("monday").value;
    var day = date.getDate();
    var day1 = date.getMonth();
    var day2 = date.getFullYear();
    
     var z= new Date(y)
     var nextdate= new Date(y)
     nextdate.setDate(nextdate.getDate() + 6);
     
    var date=z.getDate();
    var month=z.getMonth();
    var year=z.getFullYear();
    var nextdate_date=nextdate.getDate()
    var nextdate_Month=nextdate.getMonth()
    
    
    if(month!=nextdate_Month){
        
        return[(( day1==nextdate_Month)  && (day==nextdate_date ||day1==month ) && day2==year )]
    }
    else{
    return[((day>date && day==nextdate_date) && (day1<=month && day1>=nextdate_Month ) && day2==year )]
    }
    
   
  }
 
  
 
});


});

if(parseInt(document.getElementById("mon_hour").value)>0){
function day1 (){

     y=document.getElementById("monday").value;

}
}
 
function day2 (){
    
        y = new Date(document.getElementById("tuesday").value);
        y.setDate(y.getDate() - 1)
      alert("oo")

}



function day3 (){

    y = new Date(document.getElementById("wednesday").value)
    y.setDate(y.getDate() - 2)
   alert("00k")
    
}



function day4 (){

     y=new Date(document.getElementById("thursday").value);
    y.setDate(y.getDate() - 3)
}


function day5 (){

     y=new Date(document.getElementById("friday").value);
    y.setDate(y.getDate() - 4)
}


function day6 (){

     y=new Date(document.getElementById("saturday").value);
        y.setDate(y.getDate() - 5)
}


function day7 (){

     y=new Date(document.getElementById("sunday").value);
    y.setDate(y.getDate() - 6)
}

</script>




  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>

  
</body>

</html>