<div class="container col-10 m-0 p-0">
<?php
    if(isset($_GET['success'])){
        if($_GET['success'] == "true"){
            echo '<div class="position-absolute col-12  text-center alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Success!</strong> The '.($_GET['nm']).' was updated!
        </div>';
        }
        if($_GET['success'] == "false"){
            echo '<div class="position-absolute col-12  text-center alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Error 101!</strong> The '.($_GET['nm']).' wasn\'t updated! Please, contact custumer service on Email:<strong> info@fingerin.com</strong>
        </div>';
        }
    }
?>

    <table class="mx-auto table table-bordered col-11 mt-5 ml-1 mr-1">
        <th class="">ID</th>
        <th class="">Username</th>
        <th class="">Site Name</th>
        <th class="">Password</th>
        <th class="">Email</th>
        <?php 
            $confirmUser = "'Do you want to change the Username?'";
            $confirmPass = "'Do you want to change the Password of the user?'";
            $confirmEmail = "'Do you want to change the Email of the user?'";
            include_once('../config.php');
            $tableconn = "SELECT ID, SiteName, Username, Password, Email FROM users";
            $result = $conn->query($tableconn);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    echo '
                    <tr class="">
                        <td class="">'.$row['ID'].'
                            
                        </td>
                        <td class="">'.$row['Username'].'
                            <a href="#" id="editUser-'.$row['ID'].'" class="">
                                <i class="fas fa-pen text-primary"></i>
                            </a>
                            <div id="hideUser-'.$row['ID'].'" class="collapse">
                                <form action="users_update.php" method="POST" class="row pl-3 dropdown-item">
                                    <input name="newName" value="'.$row['Username'].'" type="text" class="">
                                    <input name="id" value="'.$row['ID'].'" type="hidden">
                                    <input type="submit" class="btn btn-sm btn-success" value="Submit" onclick="return confirm('.$confirmUser.')">
                                </form>
                            </div>
                        </td> 
                        <td class="">'.$row['SiteName'].'
            
                        </td>
                        <td class="">******************
                            <a href="#" id="editPass-'.$row['ID'].'" class="">
                                <i class="fas fa-pen text-primary"></i>
                            </a>
                            <div id="hidePass-'.$row['ID'].'" class="collapse">
                                <form action="users_update.php" method="POST" class="row pl-3 dropdown-item">
                                    <input name="newPass" type="text" class="">
                                    <input name="id" value="'.$row['ID'].'" type="hidden">
                                    <input type="submit" class="btn btn-sm btn-success" value="Submit" onclick="return confirm('.$confirmPass.')">
                                </form>
                            </div>
                        </td> 
                        <td class="">'.$row['Email'].'
                            <a href="#" id="editEmail-'.$row['ID'].'" class="">
                                <i class="fas fa-pen text-primary"></i>
                            </a>
                            <div id="hideEmail-'.$row['ID'].'" class="collapse">
                                <form action="users_update.php" method="POST" class="row pl-3 dropdown-item">
                                    <input name="newEmail" value="'.$row['Email'].'" type="text" class="">
                                    <input name="id" value="'.$row['ID'].'" type="hidden">
                                    <input type="submit" class="btn btn-sm btn-success" value="Submit" onclick="return confirm('.$confirmEmail.')">
                                </form>
                            </div>
                        </td>
                    </tr>
                    ';
                    echo '
                    <script>
                        $(document).ready(function(){
                            $("#editUser-'.$row['ID'].'").click(function(){
                                $("#hideUser-'.$row['ID'].'").collapse(\'toggle\');
                            });
                        });
                        $(document).ready(function(){
                            $("#editPass-'.$row['ID'].'").click(function(){
                                $("#hidePass-'.$row['ID'].'").collapse(\'toggle\');
                            });
                        });
                        $(document).ready(function(){
                            $("#editEmail-'.$row['ID'].'").click(function(){
                                $("#hideEmail-'.$row['ID'].'").collapse(\'toggle\');
                            });
                        });
                    </script>
                    ';
                    }
                }
                ?>
    </table>
    
</div>
                <?php
                ?>