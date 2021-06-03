<?php
 $filepath = realpath(dirname(__FILE__));
require_once($filepath . "/db.php");
    
$timesheet=$_POST['timesheet'];
$mainsheet=$_POST['mainsheet'];
$update=$_POST['update'];
$eid=$_POST['eid'];
$oneday=$_POST['oneday'];
$admin=$_POST['admin'];
//$eid1=(int)$eid;
// echo($eid);
// echo("<br>");
// echo($timesheet);
// echo("<br>");
// echo($mainsheet);
// echo("<br>");
// echo($update);
// echo($oneday);
// echo("<br>");


  
$result=mysqli_query($conn,"SELECT * FROM employee WHERE email='$eid'");
$rowcount = mysqli_num_rows($result);
$row=mysqli_fetch_assoc($result);
if($result && $row){

    $update=mysqli_query($conn,"UPDATE employee SET timesheet=$timesheet,view=$mainsheet,reform=$update,view_aide=$oneday,admin=$admin WHERE email like '$eid'");
    if($update){
       ?><script>
           alert("Access Given")
       </script>
     <?php
    }
    else{
      ?> <script>
          alert("DATABASE IS NOT UPDATED.... PLEASE TRY AGAIN")
      </script>
      <?php
    }
}
else{
    ?>
    <script>
       alert("Wrong Email Selected") 
    </script>
    
    <?php
}



?>

