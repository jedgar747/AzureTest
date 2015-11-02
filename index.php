<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div class="register-form">
    <?php

    if(isset($msg) & !empty($msg)){

        echo $msg;

    }


    if (isset($_POST['username']) and isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        If (($username== "Josh") and ($password == "password")){
            echo "You are the boy";
        }

    }

 ?>

    <h1>Login</h1>

    <form action="" method="POST">

        <p><label>User Name : </label>

            <input id="username" type="text" name="username" placeholder="username" /></p>

        <p><label>Password&nbsp;&nbsp; : </label>

            <input id="password" type="password" name="password" placeholder="password" /></p>

        <a class="btn" href="register.php">Signup</a>

        <input class="btn register" type="submit" name="submit" value="Login" />

    </form>

</div>

<?php ?>

</body>
</html>
