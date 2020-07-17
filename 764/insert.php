<?php
//including the file to establish connection with the mysql server
include 'mysql_db_connection.php';

$conn = openConnection();


$fname = $_POST['fname'];
$lname = $_POST['lname'];

//SQL QUERY
$sql = "INSERT INTO NAMETABLE (FNAME, LNAME) VALUES($fname, $lname)";

//inserting in to the table
if (mysqli_query($conn, $sql)  === TRUE") 
    {
      echo "New record created successfully";
    } 
else 
    {
      echo "Error: " ."<br>".mysqli_error($conn);
    }

?>