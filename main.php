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
            if($_GET['page'] == 'signup'){
                include('register.html');
            }
        }
         ?>
     </section>
    <?php
        //include('dashboard.html');
    ?>
</main>