
<div class="col-10">

    <?php include('user_panel\add_new_staff.php'); ?>
    <?php echo $alertSuccess ; ?>
    <div class="rg-lg-form mx-auto">
        <h5 class="text-center text-success mt-5">Add new construction staff</h5>
        <p class="text-center small">Here you can create new company. </p>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']),'?page=staff' ?>" class="bg-light shadow mt-5 p-2 rounded small" method="POST">
            <h5 class="text-center">Register</h5>
            <div class="form-group">
                <lable for="newStaffName">Company name:
                    <a href="#" data-toggle="popover" data-placement="right" title="New name" data-content="Type the new company name here."><i class="far fa-question-circle text-success"></i></a>
                </lable>
                <input style="font-size: 13px" type="text" class="form-control <?php echo $requiredNewName ; ?>" name="newStaffName" placeholder="Name:">
                <?php echo '<input name="AddedBy" value="'.$_SESSION['user'].'" type="hidden"  >'; ?>
                <div class="text-danger pl-1 small"><?php echo  $newStaffNameErr ; ?></div>
            </div>
            <input class="btn btn-success rounded" type="submit" value="Submit">
        </form>
    </div>
</div>
<?php echo $jqueryBell; ?>
<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();   
});
</script>