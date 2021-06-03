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
    <title>TimeSheet_History</title>
   
  </head>
  <body class="text-center">
      
      
    <form class="form-signin" method="post" action="timesheet_history.php" id="form">
    
    <h1>C&T Home Care</h1>
      
      <h1 class="h3 mb-3 font-weight-normal">Please Give Your Information To view TimeSheet</h1>
      <label for="qb" class="">QB ID</label>
      <input type="qb" id="qb" name="qb" class="form-control" placeholder="Please Enter The QB ID" required autofocus><br>
     <label for="payroll" class="">Payroll ID</label>
      <input type="text" id="payroll" name="payroll"  class="form-control" placeholder="Please Enter Payroll ID" required><br>
      <label for="date" class="">Date</label>
      <input type="text" id="date" name="date"  class="form-control" placeholder="Please Enter The Date (YYYY-MM-DD)" required>
      <div class="checkbox mb-3">
        
      </div>
      <button class="btn btn-lg btn-primary btn-block my-2"  name='submit' value='submit'type="submit">Submit</button>
     
    
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
