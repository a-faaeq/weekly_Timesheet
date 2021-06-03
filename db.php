<?php
$servername = 'localhost';
$username = 'candthom_techandcreativity';
$password = 'techandcreativity';
$dbname = "candthom_application";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
