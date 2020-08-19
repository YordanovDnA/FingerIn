<section class="col-2 shadow-sm admin-nav-text">
    <nav class="nav-bar">
        <ul class="navbar-nav">

            <!-- Construction sites toggle buttons -->
            <li class="nav-item row shadow-sm <?php
                    if(isset($_GET['page'])){
                        if($_GET['page'] == "site"){
                            echo "bg-dark";
                            echo " text-light";
                        }
                    }
                ?>">
                <i class="fas fa-hard-hat icon-size p-2"></i>
                <h6 class="ml-2 p-2 border-bottom-1 text-black">Construction sites</h6>
            </li>
            <!-- Including all created construction sites -->
            <div id="newSites" class="col-12 m-0 p-0"></div>
            <script>
            $(document).ready(function() {
                setInterval(function() {
                    $("#newSites").load("nav_sites.php");
                    refresh();
                }, 1000);
            });
            </script>


        </ul>
    </nav>
</section>