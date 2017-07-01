<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if ($conn->query ("DESCRIBE google_data"  )) {
    echo "exist";
} else {
    
// sql to create table
$sql = "CREATE TABLE google_data (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
google_id BIGINT(21),
google_name VARCHAR(230) NOT NULL,
google_email VARCHAR(130) NOT NULL,
google_image VARCHAR(250),
google_cover VARCHAR(250),
google_url VARCHAR(250),
reg_date TIMESTAMP
)";



if ($conn->query($sql) === TRUE) {
    echo "Table google_data created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
}


