<?php
    include_once('../functions.php');
    $newSiteName = $username = $password = $rpassword = "";
    $newSiteNameErr = $usernameErr = $passwordErr = $rpasswordErr = $emailErr="" ;
    $passwordsNmErr = "";
    $requiredNewName = $requiredUsername = $requiredPassword = $requiredRpassword = $requiredEmail="";
    $alertSuccess = "";
    $jqueryBell = "";

    //Registration of new site
    //Check all fields are correctly filled
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $preNewSiteNameAdd = preg_replace('/\s+/','',$_POST['newSiteName']);
        $newSiteNameAdd = strtolower($preNewSiteNameAdd);
        $usernameAdd = $_POST['username'];
        $passwordAdd = md5($_POST['password']);
        $email = $_POST['email'];
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
        if(empty($email)){
            $emailErr = "*Required";
            $requiredEmail = "border-danger";
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
        !empty($email) &&
        $_POST['password'] === $_POST['rpassword'] ){
                /*When all field are correctly filled this code will execute
                appending the information into the users database*/
                connectToDatabase($_SESSION['Database']);
                $sql = "INSERT INTO users (Project, Username, Password,  Email)
                values('".$_POST['newSiteName']."', '$usernameAdd', '$passwordAdd', '$email')";  
                if($conn->query($sql) === TRUE){
                    //Success Alert when registration is success
                    $alertSuccess = '<div class="position-absolute col-12  text-center alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Success!</strong> You added a new project!
                  </div>';
                    //Bell adnimation when registration is success
                    $jqueryBell = '<script src="../js/jqueryBell.js"></script>';
                }
                else{
                    echo "Error: " .$conn->error;
                }
                //Create new table
                $sql = "CREATE TABLE `".$_POST['newSiteName']."` (
                    Project VARCHAR(30) NOT NULL,
                    Username VARCHAR(30) NOT NULL,
                    Password VARCHAR(300) NOT NULL,
                    Email VARCHAR(50),
                    RegDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
                    )";
                if(mysqli_query($conn, $sql)) {
    
                } else {
                    echo "Error creating database: " . mysqli_error($conn);
                }
                
        }
    }

?>

