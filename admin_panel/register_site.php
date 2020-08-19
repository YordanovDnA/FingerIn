<div class="col-10">

    <?php include('add_new_site.php'); ?>
    <?php echo $alertSuccess ; ?>
    <div class="rg-lg-form mx-auto">
        <h5 class="text-center text-success mt-5">Add new project</h5>
        <p class="text-center small">Here you can add new project and create user for it. </p>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']),'?page=site' ?>"
            class="bg-light shadow mt-5 p-2 rounded small" method="POST">
            <h5 class="text-center">Register</h5>
            <div class="form-group">
                <lable for="newSiteName">Project name:
                    <a href="#" data-toggle="popover" data-placement="right" title="New name"
                        data-content="Type the new project name here."><i
                            class="far fa-question-circle text-success"></i></a>
                </lable>
                <input style="font-size: 13px" type="text" class="form-control <?php echo $requiredNewName ; ?>"
                    name="newSiteName" placeholder="Name:">
                <div class="text-danger pl-1 small"><?php echo  $newSiteNameErr ; ?></div>
            </div>
            <div class="form-group">
                <lable for="username">Username:
                    <a href="#" data-toggle="popover" data-placement="right" title="New username"
                        data-content="Type the new user name you would like to be here."><i
                            class="far fa-question-circle text-success"></i></a>
                </lable>
                <input type="text" class="form-control <?php echo $requiredUsername ; ?>" name="username"
                    placeholder="Username:">
                <div class="text-danger pl-1 small"><?php echo $usernameErr ; ?></div>
            </div>
            <div class="form-group">
                <label for="email">Email:
                    <a href="#" data-toggle="popover" data-placement="right" title="New Email"
                        data-content="Type the new user email you would like to be here."><i
                            class="far fa-question-circle text-success"></i></a>
                </label>
                <input type="email" name="email" id="email" class="form-control <?php echo $requiredEmail ; ?>"
                    placeholder="Email">
                <div class="text-danger pl-1 small"><?php echo $emailErr ; ?></div>
            </div>
            <div class="form-group">
                <lable for="password">Password:
                    <a href="#" data-toggle="popover" data-placement="right" title="Password"
                        data-content="Type what the password you would like to be."><i
                            class="far fa-question-circle text-success"></i></a>
                </lable>
                <input type="password" class="form-control <?php echo $requiredPassword ; ?>" name="password"
                    placeholder="Password:">
                <div class="text-danger pl-1 small"><?php echo $passwordErr ; ?></div>
            </div>
            <div class="form-group">
                <input type="password" class="form-control <?php echo $requiredRpassword ; ?>" name="rpassword"
                    placeholder="Repeat password:">
                <div class="text-danger pl-1 small"><?php echo $rpasswordErr ; ?></div>
                <div class="text-danger pl-1 small"><?php echo $passwordsNmErr ; ?></div>
            </div>
            <input class="btn btn-success rounded" type="submit" value="Submit">
        </form>
    </div>
</div>
<?php echo $jqueryBell; ?>
<script>
$(document).ready(function() {
    $('[data-toggle="popover"]').popover();
});
</script>