
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Fingerprint signin/out system</title>
            <link rel="stylesheet" href="css/style.css" class="css">
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
                    <div class="col-3 m-0 p-0">
                        <ul class="navbar-nav ">
                            <li class="nav-item ml-5">
                                <a href="" class="logo-text-size m-1">
                                    <i class="logo-size fas fa-fingerprint"></i>
                                    FingerIn
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="col-9 d-flex justify-content-end">

                        <a href="?page=signin" class="p-2 text-success"><i class="fas fa-sign-in-alt  text-dark mr-1"></i>SignIn</a>

                        <a href="?page=signup" class="p-2 mr-5 text-primary rounded"><i class="fas fa-user-plus text-dark mr-1"></i>SignUp</a>
                    </div>
            </nav>
        </header>
            <?php include "main.php" ?>
            <footer class="">
            
            </footer>
        </body>
        </html>