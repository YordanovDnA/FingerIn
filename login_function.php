<?php
    include_once('config.php');
    
    
        $name = $_POST["username"]; 
        $password = md5($_POST["password"]); 

        if ($result = $conn -> query("SELECT Username, Password FROM users WHERE Username = '".$name."' && Password = '".$password."'")) {
            if($result -> num_rows>0){
                header("Location: admin_panel/admin_panel.php");
                session_start();
                $_SESSION['user'] = "$name";
            }
            else {
                echo "This user doesn't exist. Please, try again.";
                echo '<a href="login.html">Back</a>';
            }
        }
            
    
$conn->close();
?>