<?php
 
   session_start();
   
if(isset($_SESSION["email"]) && isset($_SESSION["password"]) ){
  ?>  




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <link href="css/timesheet.css" rel="stylesheet">

    <title>Insert_Employee_Information</title>
   
  </head>
  <body class="text-center">
   

      
      
    <form class="form-signin" method="post" action="insert_employee.php" id="form">
    
    <h1>C&T Home Care</h1>
      
      <h1 class="h3 mb-3 font-weight-normal">Please Give Employee Information</h1>
      <label for="name" class="">Name</label>
      <input type="text" id="name" name="name" class="form-control" placeholder="Please Enter Employee Name" required autofocus><br>
      <label for="email" class="">Email ID</label>
      <input type="email" id="email" name="email" class="form-control" placeholder="Please Enter Email ID" required autofocus><br>
     <label for="password" class="">Password</label>
      <input type="password" id="password" name="password"  class="form-control" placeholder="Please Enter Password" required>
      <div class="checkbox mb-3">
        
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name='submit' value='submit'>Submit</button>
    
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
<?php
}
else{
    
    header("Location:https://shakal.tech/employee_login.html");
    
}
?>