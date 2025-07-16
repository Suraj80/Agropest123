<?php

// Database connection
$servername = "db";
$username = "user";
$password = "password";
$dbname = "user_db";



// Retry connection for 5 times with a delay
$attempts = 5;
while ($attempts > 0) {
    $conn = @new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        echo "Waiting for MySQL to be ready...\n";
        sleep(3);  // wait 3 seconds
        $attempts--;
    } else {
        break;
    }
}


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
