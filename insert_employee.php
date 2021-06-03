<?php
 $filepath = realpath(dirname(__FILE__));
require_once($filepath . "/db.php");

 
// Connecting to database 
$submit=$_POST['submit'];
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];





$result=mysqli_query($conn,"INSERT INTO employee (name,email,password) VALUES('$name','$email','$password')");
if(isset($submit)){
   if($result){
       
   ?><script>
      alert("Employee Inrolled")
  </script>  
<?php 
       
   }
   else{
         ?><script>
      alert("ERROR")
  </script>  
<?php 
   }
    
}
else{
    
  ?><script>
  alert("please try again")
  </script>  
<?php 
}


?>