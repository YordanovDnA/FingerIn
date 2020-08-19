<nav class="nav-bar">
    <ul class="navbar-nav">
        <!-- Dashboard button -->
        <div class="col-lg-none col-xlg-none">
            <li class="row nav-item shadow-sm ">
                <i class="icon-size fas fa-user p-2"></i>
                <?php
                echo '<div class="mt-2 ml-3">
                            <div class="dropdown">
                                <a href="#" class="mr-5  text-uppercase dropdown-toggle" data-toggle="dropdown">'.$_SESSION['user'].'</a>
                                <div style="min-width: 4rem" class="dropdown-menu m-0 p-0">
                                    <a onclick="return confirm(', "'Do you really want to logout?'", ')" href="../logout.php" class="dropdown-item small m-0 p-0 text-center">Logout</a>
                                </div>
                                </div>
                        </div>';
                ?>
            </li>
        </div>
        <li class="nav-item row shadow-sm <?php 
            if(isset($_GET['page'])){
                if($_GET['page'] == "site" || "users"){
                    echo "bg-light";
                }
            }else{echo "bg-dark text-light";}
        ?>">
            <i class="fas fa-tachometer-alt icon-size p-2"></i>
            <a href="admin_panel.php" class="nav-link ml-2 text-black <?php
            if (!isset($_GET['page'])) {
                echo "text-light";
            }
            ?>">Dashboard</a>
        </li>
        <!-- Projects toggle buttons -->
        <li class="nav-item dropdown row shadow-sm <?php 
            if(isset($_GET['page'])){
                if($_GET['page'] == "site"){
                    echo "bg-dark";
                    echo " text-light";
                }
            }
        ?>">
            <i class="fas fa-hard-hat icon-size p-2"></i>
            <a href="#" class="nav-link dropdown-toggle ml-2 text-black <?php 
            if(isset($_GET['page'])){
                if($_GET['page'] == "site"){
                    echo "text-light";
                }
            }
        ?>" id="navbardrop" data-toggle="dropdown">Projects</a>
            <div id="show">
                <!-- Jquery bell after new project site was created -->

            </div>
            <div class="dropdown-menu">
                <!-- Including all created Projects -->
                <div id="newSites" class=""></div>
                <script>
                $(document).ready(function() {
                    setInterval(function() {
                        $("#newSites").load("nav_sites.php");
                        refresh();
                    }, 1000);
                });
                </script>
                <!-- Add new construction site button -->
                <a href="admin_panel.php?page=site" class="dropdown-item">
                    <i class="fas fa-plus icon-size p-2"></i>
                    Add
                </a>
            </div>
        </li>
        <!-- Team button -->
        <li class="nav-item row shadow-sm <?php 
            if(isset($_GET['page'])){
                if($_GET['page'] == "team"){
                    echo "bg-dark";
                    echo " text-light";
                }
            }
        ?>">
            <i class="fas fa-users-cog icon-size p-2"></i>
            <a href="admin_panel.php?page=team" class="nav-link ml-2 text-black <?php
            if(isset($_GET['page'])){
                if($_GET['page'] == "team"){
                    echo "text-light";
                }
            }
            ?>">Team</a>
        </li>
        <!-- Statistics button -->
        <li class="nav-item row shadow-sm <?php 
            if(isset($_GET['page'])){
                if($_GET['page'] == "statistic"){
                    echo "bg-dark";
                    echo " text-light";
                }
            }
        ?>">
            <i class="far fa-chart-bar icon-size p-2"></i>
            <a href="admin_panel.php?page=statistic" class="nav-link ml-2 text-black <?php
            if(isset($_GET['page'])){
                if($_GET['page'] == "statistic"){
                    echo "text-light";
                }
            }
            ?>">Statistic</a>
        </li>
        <!-- Shop button -->
        <li class="nav-item row shadow-sm <?php 
            if(isset($_GET['page'])){
                if($_GET['page'] == "shop"){
                    echo "bg-dark";
                    echo " text-light";
                }
            }
        ?>">
            <i class="fas fa-store icon-size p-2"></i>
            <a href="admin_panel.php?page=shop" class="nav-link ml-2 text-black <?php
            if(isset($_GET['page'])){
                if($_GET['page'] == "shop"){
                    echo "text-light";
                }
            }
            ?>">Shop</a>
        </li>
        <!-- Shop button -->
        <li class="nav-item row shadow-sm <?php 
            if(isset($_GET['page'])){
                if($_GET['page'] == "help"){
                    echo "bg-dark";
                    echo " text-light";
                }
            }
        ?>">
            <i class="fas fa-question icon-size p-2"></i>
            <a href="admin_panel.php?page=help" class="nav-link ml-2 text-black <?php
            if(isset($_GET['page'])){
                if($_GET['page'] == "help"){
                    echo "text-light";
                }
            }
            ?>">Help</a>
        </li>
    </ul>
</nav>