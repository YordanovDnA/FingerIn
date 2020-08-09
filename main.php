<main class="mx-auto p-0 row col-12">
    <!-- Main Left section with the navigation -->
    <?php

            include('navigation.php');
    ?>
    <!--Main Right Section -->
    <section class="col-10">
        <?php
        if(isset($_GET['page'])){
            if($_GET['page']== 'signin'){
                include('login.html');
            }
            elseif ($_GET['page'] =="signup") {
                include('register.html');
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