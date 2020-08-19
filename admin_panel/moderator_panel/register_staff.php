<div class="col-10">

    <?php include('moderator_panel\add_new_staff.php'); ?>
    <?php echo $alertSuccess ; ?>
    <div class="rg-lg-form mx-auto">
        <h5 class="text-center text-success mt-5">Add new project staff or subcontractor</h5>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']),'?page=staff' ?>"
            class="bg-light shadow mt-5 p-2 rounded small" method="POST">
            <h5 class="text-center">Register</h5>
            <div class="form-group">
                <lable for="newStaffName">Name:
                    <a href="#" data-toggle="popover" data-placement="right" title="New name"
                        data-content="Type the name you wish for your staff or subcontractor company. It could be something like "
                        Staff", "Office" or company name such as "Companyname LTD"><i
                            class="far fa-question-circle text-success"></i></a>
                </lable>
                <input style="font-size: 13px" type="text" class="form-control <?php echo $requiredNewName ; ?>"
                    name="newStaffName" placeholder="Name:">
                <?php echo '<input name="AddedBy" value="'.$_SESSION['user'].'" type="hidden"  >'; ?>
                <div class="text-danger pl-1 small"><?php echo  $newStaffNameErr ; ?></div>
            </div>
            <input class="btn btn-success rounded" type="submit" value="Submit">
        </form>
        <p class="text-justify small mt-2 p-2 border shadow">Use this form to add subcontractor or your staff to the
            project. After you create new project staff you could add your employees or subcontracors employees. </p>
    </div>
</div>
<?php echo $jqueryBell; ?>
<script>
$(document).ready(function() {
    $('[data-toggle="popover"]').popover();
});
</script>