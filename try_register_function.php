<?php 
    include_once('config.php');
    $username = $password = $rpassowrd = "";
    $usernameErr = $passwordErr = $rpasswordErr = "";
    $usernamefull = $passwordnm = "";
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $usernameadd = $_POST['username'];
        $passwordadd = md5($_POST['password']);
      if(empty($_POST['username'])){
        $usernameErr = "Username is required!";
      }
      if(empty($_POST['password'])){
        $passwordErr = "Password is required!";
      }
      if(empty($_POST['rpassword'])){
        $rpasswordErr = "This field is required";
      }
      if ($_POST['password'] !== $_POST['rpassword']){
        $passwordnm = "Password doesnt match!";
      }
      if(!empty($_POST['username']) &&
        !empty($_POST['password']) &&
        !empty($_POST['rpassword']) &&
        $_POST['password'] === $_POST['rpassword'] ){
            $sql = "INSERT INTO users (Username, Password) values('$usernameadd', '$passwordadd')";  
            if($conn->query($sql) === TRUE){
                header("Location: index.php");
            }
            else{
                echo "Error: " .$conn->error;
            }
            
      }
    }
  ?>