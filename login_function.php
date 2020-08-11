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
            while($row = $result->fetch_assoc()) {
                $_SESSION['Database']  = $row["DatabaseName"] ;
              }
        }
         else {
            echo "This user doesn't exist. Please, try again.";
            echo '<a href="login.html">Back</a>';
        }
        $conn->close();
        

        ?>
       