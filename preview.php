<?php
session_start();
 $filepath = realpath(dirname(__FILE__));
// require_once($filepath . "/db_connect.php");
require_once($filepath . "/db.php");

$random=$_POST['random'];
$result = mysqli_query($conn, "select * from timesheet where random like '$random'");
$row = mysqli_fetch_assoc($result);
$flag=$row['flag'];
 

   
if($flag==0){
  
 
 $filepath = realpath(dirname(__FILE__));
require_once($filepath . "/db.php");

//print_r($_POST);
//signature
$sign_mon1=$_POST['data_mon_1'];

$sign_mon2=$_POST['data_mon_2'];
$sign_tue1=$_POST['data_tue_1'];
$sign_tue2=$_POST['data_tue_2'];
$sign_wed1=$_POST['data_wed_1'];
$sign_wed2=$_POST['data_wed_2'];
$sign_thu1=$_POST['data_thu_1'];
$sign_thu2=$_POST['data_thu_2'];
$sign_fri1=$_POST['data_fri_1'];
$sign_fri2=$_POST['data_fri_2'];
$sign_sat1=$_POST['data_sat_1'];
$sign_sat2=$_POST['data_sat_2'];
$sign_sun1=$_POST['data_sun_1'];
$sign_sun2=$_POST['data_sun_2'];
$submitted_by=$_POST['new_payroll'];

//approved hour 
$mon_hour=$_POST['mon_hour'];
$tue_hour=$_POST['tue_hour'];
$wed_hour=$_POST['wed_hour'];
$thu_hour=$_POST['thu_hour'];
$fri_hour=$_POST['fri_hour'];
$sat_hour=$_POST['sat_hour'];
$sun_hour=$_POST['sun_hour'];


//start time 

$mon_start=$_POST['mon_start'];
$tue_start=$_POST['tue_start'];
$wed_start=$_POST['wed_start'];
$thu_start=$_POST['thu_start'];
$fri_start=$_POST['fri_start'];
$sat_start=$_POST['sat_start'];
$sun_start=$_POST['sun_start'];


//end time 

$mon_end=$_POST['mon_end'];
$tue_end=$_POST['tue_end'];
$wed_end=$_POST['wed_end'];
$thu_end=$_POST['thu_end'];
$fri_end=$_POST['fri_end'];
$sat_end=$_POST['sat_end'];
$sun_end=$_POST['sun_end'];


//worked hour 

$mon_worked=$_POST['mon_work'];
$tue_worked=$_POST['tue_work'];
$wed_worked=$_POST['wed_work'];
$thu_worked=$_POST['thu_work'];
$fri_worked=$_POST['fri_work'];
$sat_worked=$_POST['sat_work'];
$sun_worked=$_POST['sun_work'];


//Information 


$date1=$_POST['monday'];
$date2=$_POST['tuesday'];
$date3=$_POST['wednesday'];
$date4=$_POST['thursday'];
$date5=$_POST['friday'];
$date6=$_POST['saturday'];
$date7=$_POST['sunday'];
$qb=$_POST['qb'];
$payroll=$_POST['payroll'];
$address=$_POST['address'];
$name=$_POST['name'];
$email=$_POST['email'];
$paname=$_POST['pa_name'];
$evvcode=$_POST['evv_code'];
$date=date("m/d/y");
$time=date("h:i:sa");
$total_hour=(int)$mon_hour +(int)$tue_hour +(int)$wed_hour +(int)$thu_hour +(int)$fri_hour +(int)$sat_hour +(int)$sun_hour;
$total_worked_hour= (int)$mon_worked+(int)$tue_worked+(int)$wed_worked+(int)$thu_worked+(int)$fri_worked+(int)$sat_worked+(int)$sun_worked;

$text3="Your Total Approved Hour is ";
$text4="Your Given Worked Hour is ";
 echo "<h2 style='text-align: center'>" . $text3 . $total_hour. "</h2>";
 
 echo "<h2 style='text-align: center'>" . $text4  .$total_worked_hour. "</h2>";

if($total_hour >= $total_worked_hour){
    $text1='Your Time Selection is Perfect!!';
    echo "<h2 style='text-align: center'>" . $text1 . "</h2>";
}
else
{
    $text2="Plese Select Your Time Correctly";
    echo "<h2 style='text-align: center'>" . $text2 . "</h2>";
}


?>
<!DOCTYPE html>

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
<body>
	

         <div class="container">

<div class="row">
    <form action="send_viewdata.php" method="POST" enctype="multipart/form-data">
        
                    <input type="hidden" name="qb" id="qb" value="<?php echo $qb?>">
			    	<input type="hidden" name="payroll" id="payroll" value="<?php echo $payroll?>">
			    	<input type="hidden" name="pa_name" id="pa_name" value="<?php echo $paname?>">
			    	<input type="hidden" name="evv_code" id="evv_code" value="<?php echo $evvcode ?>">
			    	<input type="hidden" name="email" id="email" value="<?php echo $email?>">
			    	<input type="hidden" name="name" id="name" value="<?php echo $name?>">
			    	<input type="hidden" name="address" id="address" value="<?php echo $address ?>">
			    	<!--daily hour approve-->
			    	<input type="hidden" name="mon_hour" id="mon_hour" value="<?php echo $mon_hour ?>">
			    	<input type="hidden" name="tue_hour" id="tue_hour" value="<?php echo $tue_hour ?>">
			    	<input type="hidden" name="wed_hour" id="wed_hour" value="<?php echo $wed_hour ?>">
			    	<input type="hidden" name="thu_hour" id="thu_hour" value="<?php echo $thu_hour ?>">
			    	<input type="hidden" name="fri_hour" id="fri_hour" value="<?php echo $fri_hour ?>">
			    	<input type="hidden" name="sat_hour" id="sat_hour" value="<?php echo $sat_hour ?>">
			    	<input type="hidden" name="sun_hour" id="sun_hour" value="<?php echo $sun_hour ?>">
			    	<!--ee-->
			    		<!--start number-->
			    	<input type="hidden" name="mon_start" id="mon_start" value="<?php echo $mon_start ?>">
			    	<input type="hidden" name="tue_start" id="tue_start" value="<?php echo $tue_start ?>">
			    	<input type="hidden" name="wed_start" id="wed_start" value="<?php echo $wed_start ?>">
			    	<input type="hidden" name="thu_start" id="thu_start" value="<?php echo $thu_start ?>">
			    	<input type="hidden" name="fri_start" id="fri_start" value="<?php echo $fri_start ?>">
			    	<input type="hidden" name="sat_start" id="sat_start" value="<?php echo $sat_start ?>">
			    	<input type="hidden" name="sun_start" id="sun_start" value="<?php echo $sun_start ?>">
			    	<!--ee-->
			    		<!--start number-->
			    	<input type="hidden" name="mon_end" id="mon_end" value="<?php echo $mon_end ?>">
			    	<input type="hidden" name="tue_end" id="tue_end" value="<?php echo $tue_end ?>">
			    	<input type="hidden" name="wed_end" id="wed_end" value="<?php echo $wed_end ?>">
			    	<input type="hidden" name="thu_end" id="thu_end" value="<?php echo $thu_end ?>">
			    	<input type="hidden" name="fri_end" id="fri_end" value="<?php echo $fri_end ?>">
			    	<input type="hidden" name="sat_end" id="sat_end" value="<?php echo $sat_end ?>">
			    	<input type="hidden" name="sun_end" id="sun_end" value="<?php echo $sun_end ?>">
			    	
			    	<!--signature-->
			    	<input type="hidden" name="data_mon_1" id="data_mon_1" value='<img src="<?php echo $sign_mon1 ?>">'>
			    	<input type="hidden" name="data_mon_2" id="data_mon_2" value='<img src="<?php echo $sign_mon2 ?>">'>
			    	<input type="hidden" name="data_tue_1" id="data_tue_1" value='<img src="<?php echo $sign_tue1 ?>">'>
			    	<input type="hidden" name="data_tue_2" id="data_tue_2" value='<img src="<?php echo $sign_tue2 ?>">'>
			    	<input type="hidden" name="data_wed_1" id="data_wed_1" value='<img src="<?php echo $sign_wed1 ?>">'>
			    	<input type="hidden" name="data_wed_2" id="data_wed_2" value='<img src="<?php echo $sign_wed2 ?>">'>
			    	<input type="hidden" name="data_thu_1" id="data_thu_1" value='<img src="<?php echo $sign_thu1 ?>">'>
			    	<input type="hidden" name="data_thu_2" id="data_thu_2" value='<img src="<?php echo $sign_thu2 ?>">'>
			    	<input type="hidden" name="data_fri_1" id="data_fri_1" value='<img src="<?php echo $sign_fri1 ?>">'>
			    	<input type="hidden" name="data_fri_2" id="data_fri_2" value='<img src="<?php echo $sign_fri2 ?>">'>
			    	<input type="hidden" name="data_sat_1" id="data_sat_1" value='<img src="<?php echo $sign_sat1 ?>">'>
			    	<input type="hidden" name="data_sat_2" id="data_sat_2" value='<img src="<?php echo $sign_sat2 ?>">'>
			    	<input type="hidden" name="data_sun_1" id="data_sun_1" value='<img src="<?php echo $sign_sun1 ?>">'>
			    	<input type="hidden" name="data_sun_2" id="data_sun_2" value='<img src="<?php echo $sign_sun2 ?>">'>
			    	<input type="hidden" name="new_payroll" id="data_mon" value="<?php echo $submitted_by ?>">
			    	
    			    <input type="hidden" name="monday" id="data_sun_1" value="<?php echo $date1 ?>">
    				<input type="hidden" name="tuesday" id="data_sun_2" value="<?php echo $date2 ?>" >
    				<input type="hidden" name="wednesday" id="data_mon_1" value="<?php echo $date3 ?>">
    				<input type="hidden" name="thursday" id="data_mon_2" value="<?php echo $date4 ?>">
    				<input type="hidden" name="friday" id="data_tue_1" value="<?php echo $date5 ?>">
    				<input type="hidden" name="saturday" id="data_tue_2" value="<?php echo $date6 ?>">
    				<input type="hidden" name="sunday" id="data_tue_2" value="<?php echo $date7 ?>">
    				
    				<input type="hidden" name="mon_work" id="mon_work" value="<?php echo $mon_worked ?>">
    				<input type="hidden" name="tue_work" id="tue_work" value="<?php echo $tue_worked ?>">
    				<input type="hidden" name="wed_work" id="wed_work" value="<?php echo $wed_worked ?>">
    				<input type="hidden" name="thu_work" id="thu_work" value="<?php echo $thu_worked ?>">
    				<input type="hidden" name="fri_work" id="fri_work" value="<?php echo $fri_worked ?>">
    				<input type="hidden" name="sat_work" id="sat_work" value="<?php echo $sat_worked ?>">
    				<input type="hidden" name="sun_work" id="sun_work" value="<?php echo $sun_worked ?>">
    				
    			
                    
 <div class="col-xs">
    
     
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
        <td class="border-right border-dark" colspan='3'><?php echo $name ?></td>
        <th scope="row" class="border-right border-dark "  colspan='1'>QB ID</th>
        <td class="border-right border-dark" colspan='1'><?php echo $qb ?></td>
      
          
        </tr>
        <tr class="bg-warning">
               <th scope="row" class="border-right border-dark" colspan='3' >Consumer Address:</th>
          <td class="border-right border-dark" colspan='3'><?php echo $address ?></td>
             <th scope="row" class="border-right border-dark">EVV Code</th>
          <td class="border-right border-dark" colspan="1"><?php echo $evvcode ?></td>
       
       
        </tr>
        <tr class="bg-warning">
             <th scope="row" class="border-right border-dark" colspan='3'>Personal Assistant Name:</th>
          <td class="border-right border-dark" colspan='3'><?php echo $paname ?></td>
             <th scope="row" class="border-right border-dark">Payroll ID</th>
          <td class="border-right border-dark" colspan="1"><?php echo $payroll ?></td>
         
        
        </tr>
        <tr class="bg-warning">
         <th scope="row" class="border-right border-dark" colspan='3'>Personal Assistant E-mail Address</th>
          <td class="border-right border-dark" colspan='3'><?php echo $email ?></td>
          <th scope="row" class="border-right border-dark">Submitted By</th>
          <td class="border-right border-dark" colspan="1"><?php echo $submitted_by ?></td>
          
 
          
        </tr>
        <tr>
          <th scope="row" class="border-right border-dark" colspan="8">By signing below, the consumer and personal
                assistant both confirm that the below hours were actually worked by the personal assistant for<br> the
                consumer, that this timesheet contains true, accurate, and complete information, that the consumer was
                an “eligible person” when the <br> services were provided, that the personal assistant lives at the exact
                same residential address as the consumer and that the services provided <br> were medically necessary or
                otherwise authorized under the Social Services Law when furnished by the personal assistant.</th>

        </tr>
        <tr>
          <th scope="row" class="border-right border-dark" colspan="2">WRITE DATES WORKED (MM/DD/YY)</th>
          <th scope="row" class="border-right border-dark" colspan="1">DAILY HOURS APPROVED</th>
          <th scope="row" class="border-right border-dark">ENTER START TIME</th>
          <th scope="row" class="border-right border-dark">ENTER END TIME</th>
          <th scope="row" class="border-right border-dark">ENTER DAILY HOURS WORKED</th>
          <th scope="row" class="border-right border-dark">PERSONAL ASSISTANT SIGN BELOW FOR EACH DAY WORKED</th>
          <th scope="row" class="border-right border-dark" colspan="8">CONSUMER SIGN BELOW <br> FOR EACH DAY WORKED</th>


        </tr>
        <tr>
          <th scope="row" class="border-right border-dark">MON</th>
          <?php
           if(empty($date1)){
          ?>
         
         
          <td class="border-right border-dark" align="left"></td>
          <td class="border-right border-dark" align="left"></td>
          <td class="border-right border-dark" align="left"></td>
          <td class="border-right border-dark" align="left"></td>
          <td class="border-right border-dark" align="left"></td>
          <td class="border-right border-dark" align="left"></td>
          <td class="border-right border-dark" align="left"></td>
          <?php
           }
           else{
          ?>
           <td class="border-right border-dark" align="center"><?php echo $date1 ?></td>
          <td class="border-right border-dark" align="center"><?php echo $mon_hour ?></td>
          <td class="border-right border-dark" align="center"><?php echo $mon_start ?></td>
          <td class="border-right border-dark" align="center"><?php echo $mon_end ?></td>
          <td class="border-right border-dark" align="center"><?php echo $mon_worked ?></td>
          <td class="border-right border-dark" align="left"><img src="data:<?php echo $sign_mon1 ?>"style="width: 250px"></td>
          <td class="border-right border-dark" align="left"><img src="data:<?php echo $sign_mon2 ?>"style="width: 250px"></td> 
            <?php
           }
            ?>
          
        </tr>
        <tr>
          <th scope="row" class="border-right border-dark">TUE</th>
            <?php
           if(empty($date2)){
          ?>
        
          <td class="border-right border-dark" align="left"></td>
          <td class="border-right border-dark" align="left"></td>
          <td class="border-right border-dark" align="left"></td>
          <td class="border-right border-dark" align="left"></td>
          <td class="border-right border-dark" align="left"></td> 
          <td class="border-right border-dark" align="left"></td>
          <td class="border-right border-dark" align="left"></td>
          <?php
           }
           else{
          ?>
          <td class="border-right border-dark" align="center"><?php echo $date2 ?></td>
          <td class="border-right border-dark" align="center"><?php echo $tue_hour ?></td>
          <td class="border-right border-dark" align="center"><?php echo $tue_start ?></td>
          <td class="border-right border-dark" align="center"><?php echo $tue_end ?></td>
          <td class="border-right border-dark" align="center"><?php echo $tue_worked ?></td>
          <td class="border-right border-dark" ><img src="data:<?php echo $sign_tue1 ?>"style="width: 250px"></td>
          <td class="border-right border-dark" ><img src="data:<?php echo $sign_tue2 ?>"style="width: 250px"></td>
               <?php
           }
            ?>
        </tr>
        <tr>
          <th scope="row" class="border-right border-dark">WED</th>
            <?php
           if(empty($date3)){
          ?>
         
         
          <td class="border-right border-dark" align="left"></td>
          <td class="border-right border-dark" align="left"></td>
          <td class="border-right border-dark" align="left"></td>
          <td class="border-right border-dark" align="left"></td>
          <td class="border-right border-dark" align="left"></td> 
          <td class="border-right border-dark" align="left"></td>
          <td class="border-right border-dark" align="left"></td>
          <?php
           }
           else{
          ?>
          <td class="border-right border-dark" align="center"><?php echo $date3 ?></td>
          <td class="border-right border-dark" align="center"><?php echo $wed_hour ?></td>
          <td class="border-right border-dark" align="center"><?php echo $wed_start ?></td>
          <td class="border-right border-dark" align="center"><?php echo $wed_end ?></td>
          <td class="border-right border-dark" align="center"><?php echo $wed_worked ?></td>
          <td class="border-right border-dark"><img src="data:<?php echo $sign_wed1 ?>"style="width: 250px"></td>
          <td class="border-right border-dark"><img src="data:<?php echo $sign_wed2 ?>"style="width: 250px"></td>
                 <?php
           }
            ?>

        </tr>
        <tr>
          <th scope="row" class="border-right border-dark">THU</th>
           <?php
           if(empty($date4)){
          ?>
  
          
          <td class="border-right border-dark" align="left"></td>
          <td class="border-right border-dark" align="left"></td>
          <td class="border-right border-dark" align="left"></td>
          <td class="border-right border-dark" align="left"></td>
          <td class="border-right border-dark" align="left"></td> 
          <td class="border-right border-dark" align="left"></td>
          <td class="border-right border-dark" align="left"></td>
          <?php
           }
           else{
          ?>
          <td class="border-right border-dark" align="center"><?php echo $date4 ?></td>
          <td class="border-right border-dark" align="center"><?php echo $thu_hour ?></td>
          <td class="border-right border-dark" align="center"><?php echo $thu_start ?></td>
          <td class="border-right border-dark" align="center"><?php echo $thu_end ?></td>
          <td class="border-right border-dark" align="center"><?php echo $thu_worked ?></td>
          <td class="border-right border-dark"><img src="data:<?php echo $sign_thu1 ?>"style="width: 250px"></td>
          <td class="border-right border-dark"><img src="data:<?php echo $sign_thu2 ?>"style="width: 250px"></td>
                  <?php
           }
            ?>
          

        </tr>
        <tr>
          <th scope="row" class="border-right border-dark">FRI</th>
            <?php
           if(empty($date5)){
          ?>
 
         
        
          <td class="border-right border-dark" align="left"></td>
          <td class="border-right border-dark" align="left"></td>
          <td class="border-right border-dark" align="left"></td>
          <td class="border-right border-dark" align="left"></td>
          <td class="border-right border-dark" align="left"></td> 
          <td class="border-right border-dark" align="left"></td>
          <td class="border-right border-dark" align="left"></td>
          <?php
           }
           else{
          ?>
          <td class="border-right border-dark" align="center"><?php echo $date5 ?></td>
          <td class="border-right border-dark" align="center"><?php echo $fri_hour ?></td>
          <td class="border-right border-dark" align="center"><?php echo $fri_start ?></td>
          <td class="border-right border-dark" align="center"><?php echo $fri_end ?></td>
          <td class="border-right border-dark" align="center"><?php echo $fri_worked ?></td>
          <td class="border-right border-dark"><img src="data:<?php echo $sign_fri1 ?>"style="width: 250px"></td>
          <td class="border-right border-dark"><img src="data:<?php echo $sign_fri2 ?>"style="width: 250px"></td>
            <?php
           }
            ?>

        </tr>
        <tr>
          <th scope="row" class="border-right border-dark">SAT</th>
            <?php
           if(empty($date6)){
          ?>
          <td class="border-right border-dark" align="left"></td>
          <td class="border-right border-dark" align="left"></td>
          <td class="border-right border-dark" align="left"></td>
          <td class="border-right border-dark" align="left"></td>
          <td class="border-right border-dark" align="left"></td> 
          <td class="border-right border-dark" align="left"></td>
          <td class="border-right border-dark" align="left"></td>
          <?php
           }
           else{
          ?>
          <td class="border-right border-dark" align="center"><?php echo $date6 ?></td>
          <td class="border-right border-dark" align="center"><?php echo $sat_hour ?></td>
          <td class="border-right border-dark" align="center"><?php echo $sat_start ?></td>
          <td class="border-right border-dark" align="center"><?php echo $sat_end ?></td>
          <td class="border-right border-dark" align="center"><?php echo $sat_worked ?></td>
          <td class="border-right border-dark"><img src="data:<?php echo $sign_sat1 ?>"style="width: 250px"></td>
          <td class="border-right border-dark"><img src="data:<?php echo $sign_sat2 ?>"style="width: 250px"></td>
                        <?php
           }
            ?>


        </tr>
        <tr>
          <th scope="row" class="border-right border-dark">SUN</th>
             <?php
           if(empty($date7)){
          ?>
      
          <td class="border-right border-dark" align="left"></td>
          <td class="border-right border-dark" align="left"></td>
          <td class="border-right border-dark" align="left"></td>
          <td class="border-right border-dark" align="left"></td>
          <td class="border-right border-dark" align="left"></td> 
          <td class="border-right border-dark" align="left"></td>
          <td class="border-right border-dark" align="left"></td>
          <?php
           }
           else{
          ?>
          <td class="border-right border-dark" align="center"><?php echo $date7 ?></td>
          <td class="border-right border-dark" align="center"><?php echo $sun_hour ?></td>
          <td class="border-right border-dark" align="center"><?php echo $sun_start ?></td>
          <td class="border-right border-dark" align="center"><?php echo $sun_end ?></td>
          <td class="border-right border-dark" align="center"><?php echo $sun_worked ?></td>
          <td class="border-right border-dark"><img src="data:<?php echo $sign_sun1 ?>"style="width: 300px"></td>
          <td class="border-right border-dark"><img src="data:<?php echo $sign_sun2 ?>"style="width: 300px"></td>
                       <?php
           }
            ?>


        </tr>




      </tbody>



   

</table>
	

			
		

			
		   <div class="row">
                   <div class="col" style="margin-left: 500px;">
                    <button type="submit" id='submit' class="btn btn-success ">SUBMIT</button>
                   </div>
               </div>

</form>


 

	
	
	
</body>

</html>
<?php
}

?>