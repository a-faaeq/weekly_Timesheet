<?php

 $filepath = realpath(dirname(__FILE__));
require_once($filepath . "/db.php");

if(isset($_POST['update'])){

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
    
    
    //  echo($pa_name);
    //   echo("<br>");
      
    // echo("Hello");
    
    //  echo($qb);
     
    //  echo gettype($qb);
     
    //  echo("<br>");
    //  echo($payroll);
    //   echo("<br>");
    
    //  echo($Evv_Code);
    //   echo("<br>");
    //  echo($Email);
    //   echo("<br>");
    //  echo($name);
    //   echo("<br>");
    //  echo($Address);
    //   echo("<br>");
     
    //  echo($mon_hour);
    //   echo("<br>");
    //  echo($tue_hour);
    //   echo("<br>");
    //  echo($wed_hour);
    //   echo("<br>");
    //  echo($thu_hour);
    //   echo("<br>");
    //  echo($fri_hour);
    //   echo("<br>");
    //  echo($sat_hour);
    //   echo("<br>");
    //  echo($sun_hour);
    //   echo("<br>");
      
    //  echo($mon_start);
    //   echo("<br>");
    //  echo($tue_start);
    //   echo("<br>");
    //  echo($wed_start);
    //   echo("<br>");
    //  echo($thu_start);
    //   echo("<br>");
    //  echo($fri_start);
    //   echo("<br>");
    //  echo($sat_start);
    //   echo("<br>");
    //  echo($sun_start);
    //  echo("<br>"); 
     
    //  echo($mon_end);
    //   echo("<br>");
    //  echo($tue_end);
    //   echo("<br>");
    //  echo($wed_end);
    //   echo("<br>");
    //  echo($thu_end);
    //   echo("<br>");
    //  echo($fri_end);
    //   echo("<br>");
    //  echo($sat_end);
    //   echo("<br>");
    //  echo($sun_end);
    //  echo("<br>");
$result1=mysqli_query($conn,"SELECT * FROM timesheet WHERE qb='$qb' AND payroll='$payroll'");
$row=mysqli_fetch_assoc($result1);

if(empty($pa_name)){
    $pa_name=$row['pa_name'];
    
}
if(empty($Evv_Code)){
    $Evv_Code=$row['Evv_Code'];
}
if(empty($Email)){
    $Email=$row['Email'];
}
if(empty($pa_name)){
    $pa_name=$row['pa_name'];
}
if(empty($name)){
    $name=$row['name'];
   
}
if(empty($Address)){
    $Address=$row['Address'];
}

if(empty($mon_hour)){
    $mon_hour=$row['Daily_Hour_Mon'];
}
if(empty($tue_hour)){
    $tue_hour=$row['Daily_Hour_Tue'];
}
if(empty($wed_hour)){
    $wed_hour=$row['Daily_Hour_Wed'];
}
if(empty($thu_hour)){
    $thu_hour=$row['Daily_Hour_Thu'];
}
if(empty($fri_hour)){
    $fri_hour=$row['Daily_Hour_Fri'];
}
if(empty($sat_hour)){
    $sat_hour=$row['Daily_Hour_Sat'];
}
if(empty($sun_hour)){
    $sun_hour=$row['Daily_Hour_Sun'];
}

if(empty($mon_start)){
    $mon_start=$row['Start_Time_Mon'];
}
if(empty($tue_start)){
    $tue_start=$row['Start_Time_Tue'];
}
if(empty($wed_start)){
    $wed_start=$row['Start_Time_Wed'];
}
if(empty($thu_start)){
    $thu_start=$row['Start_Time_Thu'];
}
if(empty($fri_start)){
    $fri_start=$row['Start_Time_Fri'];
}
if(empty($sat_start)){
    $sat_start=$row['Start_Time_Sat'];
}
if(empty($sun_start)){
    $sun_start=$row['Start_Time_Sun'];
}

if(empty($mon_end)){
    $mon_end=$row['End_Time_Mon'];
}
if(empty($tue_end)){
    $tue_end=$row['End_Time_Tue'];
}
if(empty($wed_end)){
    $wed_end=$row['End_Time_Wed'];
}
if(empty($thu_end)){
    $thu_end=$row['End_Time_Thu'];
}
if(empty($fri_end)){
    $fri_end=$row['End_Time_Fri'];
}
if(empty($sat_end)){
    $sat_end=$row['End_Time_Sat'];
}
if(empty($sun_end)){
    $sun_end=$row['End_Time_Sun'];
}
if(empty($new_payroll)){
     $new_payroll=$row['payroll'];
}




$result=mysqli_query($conn,"UPDATE timesheet set payroll='$new_payroll', name='$name', Address='$Address', pa_name='$pa_name', Evv_Code='$Evv_Code',Email='$Email',Daily_Hour_Mon='$mon_hour',Daily_Hour_Tue='$tue_hour',Daily_Hour_Wed='$wed_hour',Daily_Hour_Thu='$thu_hour',Daily_Hour_Fri='$fri_hour',Daily_Hour_sat='$sat_hour',Daily_Hour_Sun='$sun_hour',Start_Time_Mon='$mon_start',Start_Time_Tue='$tue_start',Start_Time_Wed='$wed_start',Start_Time_Thu='$thu_start',Start_Time_Fri='$fri_start',Start_Time_Sat='$sat_start',Start_Time_Sun='$sun_start',End_Time_Mon='$mon_end',End_Time_Tue='$tue_end',End_Time_Wed='$wed_end',End_Time_Thu='$thu_end',End_Time_Fri='$fri_end',End_Time_Sat='$sat_end',End_Time_Sun='$sun_end' WHERE qb='$qb' AND payroll='$payroll'");
$rowcount = mysqli_num_rows($result);

if($row && $result && $result1){
    
?><script>
    window.alert("TimeSheet Has been UPDATE")
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


?>