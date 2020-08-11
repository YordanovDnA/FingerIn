<?php

    function updateRecordName(mysqli $db, $newName, $id){
        if(isset($newName)){
            $sql = "UPDATE `users` SET Username= '".$newName."' WHERE ID = '".$id."'";
            $result = $db->query($sql);
            if($result){
                header("Location: admin_panel.php?page=users&success=true&nm=Username");
            }
            if(!$result){
                header("Location: admin_panel.php?page=users&success=false&nm=Username");
            }
        }
    }
    function updateRecordPass(mysqli $db, $newPass, $id){
        if(isset($newPass)){
            $sql = "UPDATE `users` SET Password= '".md5($newPass)."' WHERE ID = '".$id."'";
            $result = $db->query($sql);
            if($result){
                header("Location: admin_panel.php?page=users&success=true&nm=Password");
            }
            if(!$result){
                header("Location: admin_panel.php?page=users&success=false&nm=Password");
            }
        }
    } 
    function updateRecordEmail(mysqli $db, $newEmail, $id){
        if(isset($newEmail)){
            $sql = "UPDATE `users` SET Email= '".$newEmail."' WHERE ID = '".$id."'";
            $result = $db->query($sql);
            if($result){
                header("Location: admin_panel.php?page=users&success=true&nm=Email");
            }
            if(!$result){
                header("Location: admin_panel.php?page=users&success=false&nm=Email");
            }
        }
    } 
    $id = $_POST['id'];
    $newName = $_POST['newName'];
    $newPass = $_POST['newPass'];
    $newEmail = $_POST['newEmail'];
    
    if(!empty($newName)){updateRecordName($conn,$newName, $id);}
    if(!empty($newPass)){updateRecordPass($conn,$newPass, $id);}
    if(!empty($newEmail)){updateRecordEmail($conn, $newEmail, $id);}
    

?>