<?php
//function to open connection. It only returns the connection variable
function openConnection(){
    //declaring connection variables
    $hostname = "localhost";
    $username = "root";
    $password = "root";
    $dbname   = "sample_db";
    
    //creating a connection variable
    $conn = new mysqli($hostname, $username, $password, $dbname) or die ("connection failed: %s\n".$conn ->error);
    
    return $conn;
}

//function to close connection. It accepts the connection variable as paramter and closes the connection
function closeConnection($conn){
    $conn -> close();
}
?>