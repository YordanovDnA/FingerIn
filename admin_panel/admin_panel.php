<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fingerprint admin panels</title>
    <link rel="stylesheet" href="../css/style.css" class="css">
        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
        <!-- Font Awsome -->
    <script src="https://kit.fontawesome.com/d6c9141bcd.js" crossorigin="anonymous"></script>
    
</head>
<body>
<header class="">
    <?php include('top-bar.php');
    ?>
</header>
<main class="mx-auto p-0 row col-12">
    <!-- Main Left section with the navigation -->
    <?php include('navigation.php'); ?>
    <!--Main Right Section -->
    <?php
    if(isset($_GET['page'])){
        if($_GET['page'] === "site"){
            include('register_site.php');
        }
        if($_GET['page'] === "users"){
            include('users.php');
        }
    }else{
        include('dashboard.php'); 
    }?>
</main>
</body>
</html>