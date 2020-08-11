<?php
$servername= $username= $password= $db= $conn="" ;

function connectToDatabase($database){
    global $servername, $username, $password, $db, $conn ;
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = $database;


    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    
    
}
?>