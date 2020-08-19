<?php
    include_once('functions.php');
    connectToDatabase("fingerprint");
    $name = $_POST["username"]; 
    $password = md5($_POST["password"]); 

    $sql = "SELECT DatabaseName, Username, Password FROM users WHERE Username = '".$name."' && Password = '".$password."' ";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        header("Location: admin_panel/admin_panel.php");
        session_start();
        $_SESSION['user'] = "$name";
        $_SESSION['Privilages'] = "admin";
        while($row = $result->fetch_assoc()) {
            $_SESSION['Database']  = $row["DatabaseName"] ;
        }
    }
        else {
            connectToDatabase('fingerprint');
        $sql = "SELECT DatabaseName FROM users";
        $result = $conn->query($sql);
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                connectToDatabase($row['DatabaseName']);
                $database = $row['DatabaseName'];
                $sql = "SELECT * FROM users ";
                $result = $conn->query($sql);
                if($result->num_rows>0){
                    while($row = $result->fetch_assoc()){
                        if($row['Username'] === $name && $row['Password'] === md5($_POST["password"]) ){
                            header("Location: admin_panel/admin_panel.php");
                            session_start();
                            $_SESSION['user'] = "$name";
                            $_SESSION['Privilages'] = "moderator";
                            $_SESSION['Database']= $database;
                        }
                        else{
                            $match = 0;
                        }
                    }
                    if(!$match){
                        echo "This user doesn't exist. Please, try again.";
                        echo '<a href="index.php?page=signin">Back</a>'; 
                    }
                }
                else{
                    
                }
            }
        }
    }
    $conn->close();
        

?>