<?php
    include_once('../functions.php');
    $newSiteName = $username = $password = $rpassword = "";
    $newSiteNameErr = $usernameErr = $passwordErr = $rpasswordErr = "";
    $passwordsNmErr = "";
    $requiredNewName = $requiredUsername = $requiredPassword = $requiredRpassword = "";
    $alertSuccess = "";
    $jqueryBell = "";

    //Registration of new site
    //Check all fields are correctly filled
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $preNewSiteNameAdd = preg_replace('/\s+/','',$_POST['newSiteName']);
        $newSiteNameAdd = strtolower($preNewSiteNameAdd);
        $usernameAdd = $_POST['username'];
        $passwordAdd = md5($_POST['password']);
        if(empty($_POST['newSiteName'])){
            $newSiteNameErr = "*Required!";
            $requiredNewName = "border-danger";
          }
        if(empty($_POST['username'])){
            $usernameErr = "*Required!";
            $requiredUsername = "border-danger";
        }
        if(empty($_POST['password'])){
            $passwordErr = "*Required!";
            $requiredPassword = "border-danger";
        }
        if(empty($_POST['rpassword'])){
            $rpasswordErr = "*Required";
            $requiredRpassword = "border-danger";
        }
        if (!empty($_POST['password']) &&
            !empty($_POST['rpassword']) &&
            $_POST['password'] !== $_POST['rpassword']){
                $passwordsNmErr = "Passwords doesn't match!";
                $requiredPassword = "border-danger";
                $requiredRpassword = "border-danger";
        }
        if(!empty($_POST['username']) &&
        !empty($_POST['password']) &&
        !empty($_POST['rpassword']) &&
        $_POST['password'] === $_POST['rpassword'] ){
                /*When all field are correctly filled this code will execute
                appending the information into the users database*/
                connWithDatabase($_SESSION['database']);
                $sql = "INSERT INTO users (SiteName, DatabaseName, Username, Password)
                values('".$_POST['newSiteName']."', '$newSiteNameAdd', '$usernameAdd', '$passwordAdd')";  
                if($conn->query($sql) === TRUE){
                    //Success Alert when registration is success
                    $alertSuccess = '<div class="position-absolute col-12  text-center alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Success!</strong> You added a new construction site!
                  </div>';
                    //Bell adnimation when registration is success
                    $jqueryBell = '<script src="../js/jqueryBell.js"></script>';
                }
                else{
                    echo "Error: " .$conn->error;
                }
                //Create new database with the name of the new site.
                $newdb = "CREATE DATABASE `$newSiteNameAdd`";
                if($conn->query($newdb) === FALSE){
                    echo "Error creating database: " .$conn->error;
                }
        }
    }

?>

