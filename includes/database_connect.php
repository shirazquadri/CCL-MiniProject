<?php
$conn = mysqli_connect("database-4.cvk0z35mjyq8.us-east-1.rds.amazonaws.com", "admin", "admin1234", "shirazdb","3306");

if (mysqli_connect_errno()) {
   
    echo "Failed to connect to MySQL! Please contact the admin.";
    return;
}
