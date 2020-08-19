<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fingerprint signin/out system</title>
    <link rel="stylesheet" href="css/main.css">
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
        <!-- Administration panel Login -->
        <nav class="navbar navbar-expand-sm bg-light admin-nav-text shadow-sm m-0 p-0">
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 m-0 p-0">
                <ul class="navbar-nav d-flex justify-content-center">
                    <li class="nav-item ">
                        <a href="" class="logo-text-size m-1">
                            <i class="logo-size fas fa-fingerprint"></i>
                            <span class="icon-text">FingerIn</span>
                        </a>
                    </li>

                </ul>
            </div>
            <div class="col-xl-10 col-lg-9 col-md-8 col-sm-6 d-flex justify-content-end">

                <a href="?page=signin" class="p-2 text-success col-none col-sm-none col-md-none"><i
                        class="fas fa-sign-in-alt  text-dark mr-1"></i>SignIn</a>

                <a href="?page=signup" class="p-2  text-primary rounded col-none col-sm-none col-md-none"><i
                        class="fas fa-user-plus text-dark mr-1"></i>SignUp</a>

                <button onclick="show('nav-modal')" id="tab-nav-btn"
                    class="btn btn-md bg-light p-2 text-primary rounded"><i style="font-size: 22px"
                        class="fas fa-bars text-dark"></i></button>


            </div>
        </nav>
    </header>
    <?php include "main.php" ?>
    <footer class="shadow">
        <ul>
            <li class="inline"><a href="#">Quick links</a>|</li>
            <li class="inline"><a href="#">Link</a>|</li>
            <li class="inline">&copy; 2020 FingerIn</li>
        </ul>
    </footer>
    <script src="js/main.js"></script>
</body>

</html>