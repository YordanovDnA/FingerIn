<?php
    include_once('../config.php');
    $newStaffName = "";
    $newStaffNameErr = "";
    $passwordsNmErr = "";
    $requiredNewName =  "";
    $alertSuccess = "";
    $jqueryBell = "";

    //Registration of new site
    //Check all fields are correctly filled
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $preNewStaffNameAdd = preg_replace('/\s+/','',$_POST['newStaffName']);
        $newStaffNameAdd = strtolower($preNewStaffNameAdd);
        $AddedBy = $_POST['AddedBy'];
        
        if(empty($_POST['newStaffName'])){
            $newStaffNameErr = "*Required!";
            $requiredNewName = "border-danger";
          }
        if(!empty($_POST['newStaffName']) ){
                /*When all field are correctly filled this code will execute
                appending the information into the staff database*/
                $sql = "INSERT INTO staff (CompanyName, DatabaseName, AddedBy)
                values('".$_POST['newStaffName']."', '$newStaffNameAdd', '$AddedBy')";  
                if($conn->query($sql) === TRUE){
                    //Success Alert when registration is success
                    $alertSuccess = '<div class="position-absolute col-12  text-center alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Success!</strong> You added a new company in your staff group!
                  </div>';
                    //Bell animation when registration is success
                    $jqueryBell = '<script src="../js/jqueryBell.js"></script>';
                }
                else{
                    echo "Error: " .$conn->error;
                }
                //Create new database with the name of the new site.
                $newdb = "CREATE DATABASE `$newStaffNameAdd`";
                if($conn->query($newdb) === FALSE){
                    echo "Error creating database: " .$conn->error;
                }
        }
    }

?>

