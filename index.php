<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div class="register-form">
    2
    <?php

    if(isset($msg) & !empty($msg)){

        echo $msg;

    }

 ?>

    <h1>Login</h1>

    <form action="" method="POST">

        <p><label>User Name : </label>

            <input id="username" type="text" name="username" placeholder="username" /></p>



        <p><label>Password&nbsp;&nbsp; : </label>
            13
            <input id="password" type="password" name="password" placeholder="password" /></p>



        <a class="btn" href="register.php">Signup</a>

        <input class="btn register" type="submit" name="submit" value="Login" />

    </form>

</div>

<?php ?>

</body>
</html>
