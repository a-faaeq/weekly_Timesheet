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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="css/admin.css">
  <!--<link rel="stylesheet" href="css/nav.css">-->
  <title>Admin Panel</title>
</head>

<body>
      <nav>
     <h2>Menu</h2>
      <input class="navbar_input" id="toggle" type="checkbox" checked>
   <ul>
     <li><a href="https://candthomecare.us/timesheet/timesheet_login.php">TIMESHEET</a></li>
     <li><a href="https://candthomecare.us/timesheet/viewdata.php">VIEW TIMESHEET</a></li>
     <li><a href="https://candthomecare.us/timesheet/insert_update_delete1.php">UPDATE/DELETE/INSERT</a></li>
     <li><a href="https://candthomecare.us/oneday_timesheet/view.html">Oneday Timesheet</a></li>
     <li><a href="https://candthomecare.us/timesheet/admin_access1.php">ADMIN PANEL</a></li>
     <li><a href="https://candthomecare.us/timesheet/logout.php">LOGOUT</a></li>
   </ul>
</nav>



  <div class="container">
    <form action="admin_access.php" method="POST" target="_Blank">
      <div class="row">
        <div class="col">
          <h1 class="text-center color-text my-3"><b>Admin Panel</b></h1>
        </div>
      </div>
      <div class="row border border-dark pa">
        <div class="col">
          <h3 class='text-center my-3'> Give Employees Email ID </h3>
          <input type="text" class="form-control col-3 m-auto" id="eid" name="eid" placeholder="Enter Email ID">
          <h3 class='text-center my-3'> TimeSheet Access </h3>
          <select class="custom-select custom-select col-3 mar" id="timesheet" name="timesheet">
            <option selected>Select</option>
            <option value="1">Access</option>
            <option value="0">No Access</option>
          </select>
          <h3 class='text-center my-3'> View TimeSheet Access </h3>
          <select class="custom-select custom-select col-3 mar" id="mainsheet" name="mainsheet">
            <option selected>Select</option>
            <option value="1">Access</option>
            <option value="0">No Access</option>
          </select>
          <h3 class='text-center my-3'> ADD/UPDATE/SEARCH TimeSheet Access </h3>
          <select class="custom-select custom-select col-3 mar" id="update" name="update">
            <option selected>Select</option>
            <option value="1">Access</option>
            <option value="0">No Access</option>
          </select>
          <h3 class='text-center my-3'> Oneday Timesheet </h3>
          <select class="custom-select custom-select col-3 mar" id="oneday" name="oneday">
            <option selected>Select</option>
            <option value="1">Access</option>
            <option value="0">No Access</option>
          </select>
          <h3 class='text-center my-3'> Admin Access </h3>
          <select class="custom-select custom-select col-3 mar" id="admin" name="admin">
            <option selected>Select</option>
            <option value="1">Access</option>
            <option value="0">No Access</option>
          </select>
        </div>


      </div>
      <div class="row my-2">
        <div class="col">
          <button type="submit" class="btn btn-primary btn-lg ">Give Access</button>
          <button type="button" class="btn btn-primary btn-lg " onclick="document.location='https://candthomecare.us/timesheet/insert_employee1.php'">New Access</button>
    
        </div>
      </div>


    </form>
  </div>

<?php
}
else{
    
    header("Location:https://candthomecare.us/timesheet/employee_login.html");
    
}
?>





