<?php

//print_r($_POST);
//signature
$sign_mon3=$_POST['data_mon_1'];
$sign_mon4=$_POST['data_mon_2'];
$sign_tue3=$_POST['data_tue_1'];
$sign_tue4=$_POST['data_tue_2'];
$sign_wed3=$_POST['data_wed_1'];
$sign_wed4=$_POST['data_wed_2'];
$sign_thu3=$_POST['data_thu_1'];
$sign_thu4=$_POST['data_thu_2'];
$sign_fri3=$_POST['data_fri_1'];
$sign_fri4=$_POST['data_fri_2'];
$sign_sat3=$_POST['data_sat_1'];
$sign_sat4=$_POST['data_sat_2'];
$sign_sun3=$_POST['data_sun_1'];
$sign_sun4=$_POST['data_sun_2'];
$submitted_by=$_POST['new_payroll'];

$a=trim($sign_mon3,'<img src="');
$b=rtrim($a,'">');
$c=trim($sign_mon4,'<img src="');
$d=rtrim($c,'">');
$e=trim($sign_tue3,'<img src="');
$f=rtrim($e,'">');
$g=trim($sign_tue4,'<img src="');
$h=rtrim($g,'">');
$i=trim($sign_wed3,'<img src="');
$j=rtrim($i,'">');
$k=trim($sign_wed4,'<img src="');
$l=rtrim($k,'">');
$m=trim($sign_thu3,'<img src="');
$n=rtrim($m,'">');
$o=trim($sign_thu4,'<img src="');
$p=rtrim($o,'">');
$q=trim($sign_fri3,'<img src="');
$r=rtrim($q,'">');
$s=trim($sign_fri4,'<img src="');
$t=rtrim($s,'">');
$u=trim($sign_sat3,'<img src="');
$v=rtrim($u,'">');
$w=trim($sign_sat4,'<img src="');
$x=rtrim($w,'">');
$y=trim($sign_sun3,'<img src="');
$ab=rtrim($y,'">');
$ac=trim($sign_sun4,'<img src="');
$ad=rtrim($ac,'">');


$sign_mon1=$b;
$sign_mon2=$d;
$sign_tue1=$f;
$sign_tue2=$h;
$sign_wed1=$j;
$sign_wed2=$l;
$sign_thu1=$n;
$sign_thu2=$p;
$sign_fri1=$r;
$sign_fri2=$t;
$sign_sat1=$v;
$sign_sat2=$x;
$sign_sun1=$ab;
$sign_sun2=$ad;

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

$flag=1;
$total_hour=(int)$mon_hour +(int)$tue_hour +(int)$wed_hour +(int)$thu_hour +(int)$fri_hour +(int)$sat_hour +(int)$sun_hour;
$total_worked_hour= (int)$mon_worked+(int)$tue_worked+(int)$wed_worked+(int)$thu_worked+(int)$fri_worked+(int)$sat_worked+(int)$sun_worked;
// echo($total_worked_hour+$total_hour);
if($total_hour >= $total_worked_hour){


$filepath = realpath(dirname(__FILE__));
// require_once($filepath . "/db_connect.php");
require_once($filepath . "/db.php");

$result2=mysqli_query($conn,"SELECT * FROM timesheet WHERE qb like '$qb' AND payroll like '$payroll'");
$row2=mysqli_fetch_assoc($result2);
$random=$row2['random'];
$result = mysqli_query($conn,"INSERT INTO view (name,qb,payroll,address,evv_code,pa_name,email,mon_date,tue_date,wed_date,thu_date,fri_date,sat_date,sun_date,mon_hour,tue_hour,wed_hour,thu_hour,fri_hour,sat_hour,sun_hour,mon_start,tue_start,wed_start,thu_start,fri_start,sat_start,sun_start,mon_end,tue_end,wed_end,thu_end,fri_end,sat_end,sun_end,mon_worked,tue_worked,wed_worked,thu_worked,fri_worked,sat_worked,sun_worked,mon_pa_sign,tue_pa_sign,wed_pa_sign,thu_pa_sign,fri_pa_sign,sat_pa_sign,sun_pa_sign,mon_pt_sign,tue_pt_sign,wed_pt_sign,thu_pt_sign,fri_pt_sign,sat_pt_sign,sun_pt_sign,submitted,random) VALUES('$name','$qb','$payroll','$address','$evvcode','$paname','$email','$date1','$date2','$date3','$date4','$date5','$date6','$date7','$mon_hour','$tue_hour','$wed_hour','$thu_hour','$fri_hour','$sat_hour','$sun_hour','$mon_start','$tue_start','$wed_start','$thu_start','$fri_start','$sat_start','$sun_start','$mon_end','$tue_end','$wed_end','$thu_end','$fri_end','$sat_end','$sun_end','$mon_worked','$tue_worked','$wed_worked','$thu_worked','$fri_worked','$sat_worked','$sun_worked','$sign_mon1','$sign_mon2','$sign_tue1','$sign_tue2','$sign_wed1','$sign_wed2','$sign_thu1','$sign_thu2','$sign_fri1','$sign_fri2','$sign_sat1','$sign_sat2','$sign_sun1','$sign_sun2','$submitted_by','$random')");
$result1 = mysqli_query($conn,"UPDATE timesheet set flag='$flag'  WHERE qb='$qb' AND payroll ='$payroll'" ); 

// echo($row2['random']);

if($result && $result1){
$to='farhan.hossain.shakal@candthomecare.com';
$from=$row2["Email"];
$subject="CDPAP Timesheet of ".$paname. ", ".$payroll." for ".$name.", ".$qb."_".$date."_".$time;
$message="https://candthomecare.us/timesheet/view_notification.php?random=$random";
 if(mail($to,$subject,$message)){
    // echo('done');
   
}
else{
    echo("Not Done");
}
    
    ?><script>
        alert("Time Sheet Sent");
    </script>

<?php
}
else{
    ?>
    <script>
        alert("Please Try Again");
    </script>
<?php    
}

// echo($mon_end);
// echo "<br>";
// echo gettype($mon_end) . "<br>";
// echo($tue_end);
// echo "<br>";
// echo($wed_end);
// echo "<br>";
// echo($thu_end);
// echo "<br>";
// echo($fri_end);
// echo "<br>";
// echo($sat_end); 
// echo "<br>";
// echo($sun_end);
// echo "<br>";
}
else{
    ?> <script>
        alert("Your Approved Hour '<?php echo $total_hour; ?>' but your given hour is '<?php echo $total_worked_hour; ?>'. Please Try Again by Selecting Exect Time ")
    </script>
    <?php
}
?>