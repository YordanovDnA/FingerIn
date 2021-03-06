<?php session_start();?>
<header class="">
    <!-- Administration panel Login -->
    <nav class="navbar navbar-expand-sm bg-light admin-nav-text shadow-sm m-0 p-0">
        <div class="col-3 m-0 p-0">
            <ul class="navbar-nav ">
                <li class="nav-item ml-5">
                    <a class="logo-text-size m-1" href="admin_panel.php">
                        <i class="logo-size fas fa-fingerprint"></i>
                        FingerIn
                    </a>
                </li>

            </ul>
        </div>
        <?php
            if(isset($_SESSION['user'])){
                echo '<div class="col-9 d-flex justify-content-end">
                    <div class="dropdown  col-md-none col-sm-none col-none">
                        <a href="#" class="mr-5  text-uppercase dropdown-toggle" data-toggle="dropdown">'.$_SESSION['user'].'</a>
                        <div style="min-width: 4rem" class="dropdown-menu m-0 p-0">
                            <a onclick="return confirm(', "'Do you really want to logout?'", ')" href="../logout.php" class="dropdown-item small m-0 p-0 text-center">Logout</a>
                        </div>
                    </div>
                    <button onclick="show(\'nav-modal-admin\')" id="tab-nav-btn" class="btn btn-md bg-light p-2 text-primary rounded"><i style="font-size: 22px" class="fas fa-bars text-dark"></i></button></div>';
            }
        ?>
    </nav>
</header>