<!DOCTYPE HTML>
<html>

<head>
    <style>
    .error {
        color: #FF0000;
    }

    .valid {
        color: green;
    }
    </style>
</head>

<body>
    <?php include('try_register_function.php'); ?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <input name="username" type="text" placeholder="Username:"><br>
        <span class="error"><?php echo $usernameErr ; ?></span><br>
        <span class="valid"><?php echo $usernamefull ; ?></span><br>
        <input name="password" type="password" placeholder="Password:"><br>
        <span class="error"><?php echo $passwordErr ; ?></span><br>
        <input name="rpassword" type="password" placeholder="Retype password:"><br>
        <span class="error"><?php echo $rpasswordErr ; ?></span><br>
        <span class="error"><?php echo $passwordnm ; ?></span><br>
        <input type="submit" value="submit"><br>
    </form>
</body>

</html>