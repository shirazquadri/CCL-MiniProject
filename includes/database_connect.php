<?php
$conn = mysqli_connect("ebdb.cvk0z35mjyq8.us-east-1.rds.amazonaws.com", "admin", "admin1234", "ebdb","3306");

if (mysqli_connect_errno()) {
   
    echo "Failed to connect to MySQL! Please contact the admin.";
    return;
}
