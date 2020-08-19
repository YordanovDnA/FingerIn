<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fingerprint admin panels</title>
    <link rel="stylesheet" href="../css/main.css">
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
        <?php 
    include('top-bar.php');
    ?>
    </header>
    <main class="mx-auto p-0 row col-12">
        <div id="nav-modal-admin" style="display: none" class="nav-sm w-100 h-100">
            <div class="nav-modal-inner bg-light p-3 col-9 col-sm-5 col-md-4">
                <?php
            if($_SESSION['Privilages'] === "moderator"){
                include('moderator_panel/navigation.php');
            }
            else{
            include('navigation.php');
            }
            ?>
            </div>
        </div>
        <!-- Main Left section with the navigation -->
        <?php 
    
    echo '<section class="col-xl-2 col-lg-3 col-md-none col-sm-none col-none shadow-sm admin-nav-text 90vh">';
    if ($_SESSION['Privilages'] === "moderator") {
        include('moderator_panel\navigation.php');
    }
    if($_SESSION['Privilages'] === "user"){
        
        include('user_panel/navigation.php');   
    }
    if($_SESSION['Privilages'] === "admin"){
            include('navigation.php');
        }
    echo '</section>';
        ?>
        <!--Main Right Section -->
        <section class="row col-xl-10 col-lg-8 col-md-12 vh90">
            <?php
    if(isset($_GET['page'])){
        if($_GET['page'] === "site"){
            include('register_site.php');
        }
        if($_GET['page'] === "staff"){
            include('moderator_panel\register_staff.php');
        }
        if($_GET['page'] === "team"){
            include('users.php');
        }
    }else{
        include('dashboard.php'); 
    }
    ?>
            <section class="col-xl-10 col-lg-8 col-md-12 vh90">
    </main>
    <script src="../js/main.js"></script>
</body>

</html>