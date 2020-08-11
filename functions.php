<?php
$servername= $username= $password= $db= $conn="" ;

function connectToDatabase(){
    if(isset($_SESSION['Database'])){
        global $servername, $username, $password, $db, $conn ;
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = $_SESSION['Database'];
    }
    else{
        global $servername, $username, $password, $db, $conn ;
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "fingerprint";
    }

    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    
    
}
?>