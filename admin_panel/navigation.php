<section class="col-2 shadow-sm admin-nav-text">
        <nav class="nav-bar">
            <ul class="navbar-nav">
                <!-- Dashboard button -->
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
                <!-- Construction sites toggle buttons -->
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
                ?>" id="navbardrop" data-toggle="dropdown" >Construction sites</a>
                    <div id="show">
                        <!-- Jquery bell after new construction site was created -->

                    </div>
                    <div class="dropdown-menu">
                        <!-- Including all created construction sites -->
                        <div id="newSites" class=""></div>
                        <script>
                            $(document).ready(function(){
                                setInterval(function(){
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
                <!-- Users button --> 
                <li class="nav-item row shadow-sm <?php 
                    if(isset($_GET['page'])){
                        if($_GET['page'] == "users"){
                            echo "bg-dark";
                            echo " text-light";
                        }
                    }
                ?>">
                    <i class="fas fa-users-cog icon-size p-2"></i>
                    <a href="admin_panel.php?page=users" class="nav-link ml-2 text-black <?php
                    if(isset($_GET['page'])){
                        if($_GET['page'] == "users"){
                            echo "text-light";
                        }
                    }
                    ?>">Users</a>
                </li>
            </ul>
        </nav>
    </section>