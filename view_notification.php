

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
  <title>TimeSheet Notification</title>
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
		
        $random=$_GET['random'];
   
        
   
       // echo "a is " . is_string($userid) . "<br>";
       $filepath = realpath(dirname(__FILE__));
       // require_once($filepath . "/db_connect.php");
       require_once($filepath . "/db.php");

       // Connecting to database 
       // $db = new DB_CONNECT();
       // $conn = $db->connect();


       $result = mysqli_query($conn, "select * from view where random like '$random' ORDER BY view.id DESC LIMIT 1");
   
       if ($result) {
           
       


       while ($row = mysqli_fetch_assoc($result)) {
           
         $hour1=$row["mon_hour"];
		 $hour2=$row["tue_hour"];
		 $hour3=$row["wed_hour"];
		 $hour4=$row["thu_hour"];
		 $hour5=$row["fri_hour"];
		 $hour6=$row["sat_hour"];
		 $hour7=$row["sun_hour"];
   

       ?>
  <div class="container">

    <div class="row">
       
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
            <td class="border-right border-dark" colspan='3'><?php echo $row["name"] ?></td>
            <th scope="row" class="border-right border-dark "  colspan='1'>QB ID</th>
            <td class="border-right border-dark" colspan='1'><?php echo $row["qb"] ?></td>
          
              
            </tr>
            <tr class="bg-warning">
                   <th scope="row" class="border-right border-dark" colspan='3' >Consumer Address:</th>
              <td class="border-right border-dark" colspan='3'><?php echo $row["address"] ?></td>
                 <th scope="row" class="border-right border-dark">EVV Code</th>
              <td class="border-right border-dark" colspan="1"><?php echo $row["evv_code"] ?></td>
           
           
            </tr>
            <tr class="bg-warning">
                 <th scope="row" class="border-right border-dark" colspan='3'>Personal Assistant Name:</th>
              <td class="border-right border-dark" colspan='3'><?php echo $row["pa_name"] ?></td>
                 <th scope="row" class="border-right border-dark">Payroll ID</th>
              <td class="border-right border-dark" colspan="1"><?php echo $row["payroll"] ?></td>
             
            
            </tr>
            <tr class="bg-warning">
             <th scope="row" class="border-right border-dark" colspan='3'>Personal Assistant E-mail Address</th>
              <td class="border-right border-dark" colspan='3'><?php echo $row["email"] ?></td>
              <th scope="row" class="border-right border-dark">Submitted By</th>
              <td class="border-right border-dark" colspan="1"><?php echo $row["submitted"] ?></td>
              
     
              
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
           if($hour1>=1){
          ?>
           <td class="border-right border-dark" align="center"><?php echo $row["mon_date"] ?></td>
          <td class="border-right border-dark" align="center"><?php echo $row["mon_hour"] ?></td>
          <td class="border-right border-dark" align="center"><?php echo $row["mon_start"] ?></td>
          <td class="border-right border-dark" align="center"><?php echo $row["mon_end"] ?></td>
          <td class="border-right border-dark" align="center"><?php echo $row["mon_worked"] ?></td>
          <td class="border-right border-dark" align="left"><img src="data:<?php echo $row["mon_pa_sign"] ?>"style="width: 250px"></td>
          <td class="border-right border-dark" align="left"><img src="data:<?php echo $row["tue_pa_sign"] ?>"style="width: 250px"></td>
          
          <?php
           }
           else{
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
            ?>
          
        </tr>
        <tr>
          <th scope="row" class="border-right border-dark">TUE</th>
                    <?php
           if($hour2>=1){
          ?>
          <td class="border-right border-dark" align="center"><?php echo $row["tue_date"] ?></td>
          <td class="border-right border-dark" align="center"><?php echo $row["tue_hour"] ?></td>
          <td class="border-right border-dark" align="center"><?php echo $row["tue_start"] ?></td>
          <td class="border-right border-dark" align="center"><?php echo $row["tue_end"] ?></td>
          <td class="border-right border-dark" align="center"><?php echo $row["tue_worked"] ?></td>
          <td class="border-right border-dark" ><img src="data:<?php echo $row["wed_pa_sign"] ?>"style="width: 250px"></td>
          <td class="border-right border-dark"><img src="data:<?php echo $row["thu_pa_sign"] ?>"style="width: 250px"></td>
          <?php
           }
           else{
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
            ?>

        </tr>
        <tr>
          <th scope="row" class="border-right border-dark">WED</th>
                     <?php
           if($hour3>=1){
          ?>
          <td class="border-right border-dark" align="center"><?php echo $row["wed_date"] ?></td>
          <td class="border-right border-dark" align="center"><?php echo $row["wed_hour"] ?></td>
          <td class="border-right border-dark" align="center"><?php echo $row["wed_start"] ?></td>
          <td class="border-right border-dark" align="center"><?php echo $row["wed_end"] ?></td>
          <td class="border-right border-dark" align="center"><?php echo $row["wed_worked"] ?></td>
          <td class="border-right border-dark"><img src="data:<?php echo $row["fri_pa_sign"] ?>"style="width: 250px"></td>
          <td class="border-right border-dark"><img src="data:<?php echo $row["sat_pa_sign"] ?>"style="width: 250px"></td>
          <?php
           }
           else{
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
            ?>
    

        </tr>
        <tr>
          <th scope="row" class="border-right border-dark">THU</th>
            <?php
           if($hour4>=1){
          ?>

          
          
           <td class="border-right border-dark" align="center"><?php echo $row["thu_date"] ?></td>
          <td class="border-right border-dark" align="center"><?php echo $row["thu_hour"] ?></td>
          <td class="border-right border-dark" align="center"><?php echo $row["thu_start"] ?></td>
          <td class="border-right border-dark" align="center"><?php echo $row["thu_end"] ?></td>
          <td class="border-right border-dark" align="center"><?php echo $row["thu_worked"] ?></td>
          <td class="border-right border-dark"><img src="data:<?php echo $row["sun_pa_sign"] ?>"style="width: 250px"></td>
          <td class="border-right border-dark"><img src="data:<?php echo $row["mon_pt_sign"] ?>"style="width: 250px"></td>
          <?php
           }
           else{
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
            ?>
              

        </tr>
        <tr>
          <th scope="row" class="border-right border-dark">FRI</th>
             <?php
           if($hour5>=1){
          ?>
          <td class="border-right border-dark" align="center"><?php echo $row["fri_date"] ?></td>
          <td class="border-right border-dark" align="center"><?php echo $row["fri_hour"] ?></td>
          <td class="border-right border-dark" align="center"><?php echo $row["fri_start"] ?></td>
          <td class="border-right border-dark" align="center"><?php echo $row["fri_end"] ?></td>
          <td class="border-right border-dark" align="center"><?php echo $row["fri_worked"] ?></td>
          <td class="border-right border-dark"><img src="data:<?php echo $row["tue_pt_sign"] ?>"style="width: 250px"></td>
          <td class="border-right border-dark"><img src="data:<?php echo $row["wed_pt_sign"] ?>"style="width: 250px"></td>
          
          <?php
           }
           else{
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
            ?>
              

        </tr>
        <tr>
          <th scope="row" class="border-right border-dark">SAT</th>
           <?php
           if($hour6>=1){
          ?>
          <td class="border-right border-dark" align="center"><?php echo $row["sat_date"] ?></td>
          <td class="border-right border-dark" align="center"><?php echo $row["sat_hour"] ?></td>
          <td class="border-right border-dark" align="center"><?php echo $row["sat_start"] ?></td>
          <td class="border-right border-dark" align="center"><?php echo $row["sat_end"] ?></td>
          <td class="border-right border-dark" align="center"><?php echo $row["sat_worked"] ?></td>
          <td class="border-right border-dark"><img src="data:<?php echo $row["thu_pt_sign"] ?>"style="width: 250px"></td>
          <td class="border-right border-dark"><img src="data:<?php echo $row["fri_pt_sign"] ?>"style="width: 250px"></td>
          <?php
           }
           else{
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
            ?>
              

        </tr>
        <tr>
          <th scope="row" class="border-right border-dark">SUN</th>
           <?php
           if($hour7>=1){
          ?>
          <td class="border-right border-dark" align="center"><?php echo $row["sun_date"] ?></td>
          <td class="border-right border-dark" align="center"><?php echo $row["sun_hour"] ?></td>
          <td class="border-right border-dark" align="center"><?php echo $row["sun_start"] ?></td>
          <td class="border-right border-dark" align="center"><?php echo $row["sun_end"] ?></td>
          <td class="border-right border-dark" align="center"><?php echo $row["sun_worked"] ?></td>
          <td class="border-right border-dark"><img src="data:<?php echo $row["sat_pt_sign"] ?>"style="width: 300px"></td>
          <td class="border-right border-dark"><img src="data:<?php echo $row["sun_pt_sign"] ?>"style="width: 300px"></td>
          <?php
           }
           else{
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
            ?>

            </tr>




          </tbody>



       

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
              
                
    		
		<?php
		}}
		
		else {
		    
		   ?> <script>
		       alert("Wrong QB or Payroll")
		   </script>
		   <?php
		}
		?>
     </div> 
  </div>

  </div>




  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>

  
</body>

</html>