<?php
// Replace with your MySQL server credentials
$hostname = 'database.cnucxjl9epx6.ap-south-1.rds.amazonaws.com';
$username = 'admin';
$password = 'admin123';
$database = 'phptest';

// Create a connection
$connection = mysqli_connect($hostname, $username, $password, $database);

// Check if the connection was successful
if (!$connection) {
    die('Could not connect to the database: ' . mysqli_connect_error());
}

// Perform a SQL query (example)
$query = 'SELECT * FROM your_table';
$result = mysqli_query($connection, $query);

// Check if the query was successful
if (!$result) {
    die('Error executing the query: ' . mysqli_error($connection));
}

// Process the result set
while ($row = mysqli_fetch_assoc($result)) {
    // Do something with each row
    echo $row['column_name'];
}

// Close the connection
mysqli_close($connection);
?>
