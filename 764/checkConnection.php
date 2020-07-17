<?php 
include 'mysql_db_connection.php';

$conn = openConnection();

echo "connected successfully";

//closing connection
closeConnection($conn)
?>