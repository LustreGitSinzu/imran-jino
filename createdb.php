<?php

include 'conn.php';
// sql to create table
$sql = "CREATE TABLE ImranJino (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(30) NOT NULL,
    phonenumber INT(30) NOT NULL,
    sex VARCHAR(50),
    age INT(3),
    occupation VARCHAR(50),
    government VARCHAR(50),
    ward VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
    if ($conn->query($sql) === TRUE) {
      echo "Table MyGuests created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }
    
    $conn->close();

    ?>