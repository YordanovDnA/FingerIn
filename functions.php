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
//Function for updating username into the database
function updateRecordName(mysqli $db, $newName, $id){
    if(isset($newName)){
        $sql = "UPDATE `users` SET Username= '".$newName."' WHERE ID = '".$id."'";
        $result = $db->query($sql);
        if($result){
            header("Location: admin_panel.php?page=team&success=true&nm=Username");
        }
        if(!$result){
            header("Location: admin_panel.php?page=team&success=false&nm=Username");
            
            
        }
    }
}

//Function to update the password into the database
function updateRecordPass(mysqli $db, $newPass, $id){
    if(isset($newPass)){
        $sql = "UPDATE `users` SET Password= '".md5($newPass)."' WHERE ID = '".$id."'";
        $result = $db->query($sql);
        if($result){
            header("Location: admin_panel.php?page=team&success=true&nm=Password");
        }
        if(!$result){
            header("Location: admin_panel.php?page=team&success=false&nm=Password");
            echo "Error updating record: " . $conn->error;
        }
    }
} 
//Function to update the email into the database
function updateRecordEmail(mysqli $db, $newEmail, $id){
    if(isset($newEmail)){
        $sql = "UPDATE `users` SET Email= '".$newEmail."' WHERE ID = '".$id."'";
        $result = $db->query($sql);
        if($result){
            header("Location: admin_panel.php?page=team&success=true&nm=Email");
        }
        if(!$result){
            header("Location: admin_panel.php?page=team&success=false&nm=Email");
            echo "Error updating record: " . $conn->error;
        }
    }
} 
?>