<?php
    include_once('functions.php');
    connectToDatabase("fingerprint");

    
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        //If personal account is chosen
        if(empty($_POST['companyName'])){
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $companyName = $firstName. $lastName;
            $email = $_POST['personalEmai'];
            if(isset($_POST['personalPhone'])){
                $phone = $_POST['personalPhone'];
            }
            elseif(!isset($_POST['personalPhone'])){
                $phone = "none";
            }
            $databaseName = strtolower($firstName. $lastName);
            $databaseName = str_replace(' ', '',$databaseName);
            $sql = "INSERT INTO users (CompanyName, DatabaseName, Username, Password, Email, Privileges)
            VALUES ('$companyName', '$databaseName', '$username', '$password','$email', 'admin' )";
            if(mysqli_query($conn, $sql)) {
                echo '<div class="alert alert-success alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Success!</strong> Your personal account was created successfuly! 
              </div>';
            } else {
                echo "Error insert new company: " . mysqli_error($conn);
            }
            // Create database
            $sql = "CREATE DATABASE `$databaseName`";
            if(mysqli_query($conn, $sql)) {

            } else {
                echo "Error creating database: " . mysqli_error($conn);
            }
            mysqli_close($conn);
            connectToDatabase($databaseName);
            $sql = "CREATE TABLE users (
                ID INTEGER UNSIGNED AUTO_INCREMENT PRIMARY KEY,
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
        //If company account is chosen
        elseif (!empty($_POST['companyName'])){
            $companyName = $_POST['companyName'];
            $email = $_POST['companyEmail'];
            $phone = $_POST['companyPhone'];
            $firstAddress = $_POST['firstAddress'];
            $secondAddress = $_POST['secondAddress'];
            $postecode = $_POST['postecode'];
            $city = $_POST['city'];
            $country = $_POST['country'];
            $databaseName = strtolower($companyName);
            $databaseName = str_replace(' ', '',$databaseName);

            $sql = "INSERT INTO users (CompanyName, DatabaseName, Username, Password, Email, Privileges)
            VALUES ('$companyName', '$databaseName', '$username', '$password',
            '$email', 'admin' )";
            if (mysqli_query($conn, $sql)) {
                echo '<div class="alert alert-success alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Success!</strong> Your company account was created successfuly! 
              </div>';
            } else {
                echo "Error insert new company: " . mysqli_error($conn);
            }
            // Create database
            $sql = "CREATE DATABASE `$databaseName`";
            if (mysqli_query($conn, $sql)) {
            } else {
                echo "Error creating database: " . mysqli_error($conn);
            }
            mysqli_close($conn);
            
        }
    
    
    }
    
?>