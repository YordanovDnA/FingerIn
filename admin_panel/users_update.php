<?php
    session_start();
    include_once('../functions.php');
    connectToDatabase($_SESSION['Database']);

    $id = $_POST['id'];
    $newName = $_POST['newName'];
    $newPass = $_POST['newPass'];
    $newEmail = $_POST['newEmail'];
    
    //Functions which are updating the database 
    if(!empty($newName)){updateRecordName($conn,$newName, $id);}
    if(!empty($newPass)){updateRecordPass($conn,$newPass, $id);}
    if(!empty($newEmail)){updateRecordEmail($conn, $newEmail, $id);}
?>