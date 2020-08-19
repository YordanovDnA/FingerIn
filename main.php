<main class="mx-auto p-0 row col-12">
    <!-- Main Left section with the navigation -->
    <section class="col-xl-2 col-lg-3 col-md-none col-sm-none col-none shadow-sm admin-nav-text 90vh">
        <?php
                include('navigation.php');
        ?>
    </section>
    <!--Main Right Section -->
    <div id="nav-modal" style="display: none" class="nav-sm w-100 h-100">
        <div class="nav-modal-inner bg-light p-3 col-9 col-sm-5 col-md-4">
            <?php
            include('navigation.php');
            ?>
        </div>
    </div>
    <section class="col-xl-10 col-lg-8 col-md-12 vh90">
        <?php
        if(isset($_GET['page'])){
            if($_GET['page']== 'signin'){
                include('login.html');
            }
            elseif ($_GET['page'] =="signup") {
                include('register.php');
            }
            elseif ($_GET['page']=='news') {
                include('news.html');
            }
            elseif ($_GET['page']=='start') {
                include('start.html');
            }
            elseif ($_GET['page']=='plans') {
                include('plans.html');
            }
            elseif ($_GET['page']=='shop') {
                include('shop.html');
            }
            elseif ($_GET['page']=='home') {
                include('home.html');
            }
        }
        else{
            include('home.html');
        }
         ?>
    </section>
</main>