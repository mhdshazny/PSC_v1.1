<?php
//session_start();
//session_destroy();
?>

<!doctype html>
<html>
<head>
    <title> Login </title>
    <link rel="stylesheet" type="text/css" href="../stylezz.css">
    <!-- Bootstrap -->
    <script src="../Plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

</head>
<body class="" background="../resources/globe-bg.jpg">
<div class="login-box">

    <img src="../Resources/icon.png" alt="Icon" class="icon" >
    <h1 style="font-family:verdana;">Login </h1>
    <form action="log-in.php" method="post">
        <p style="font-family:verdana;">Username</p>
        <input type="text" name="username" id="username" placeholder="Enter Username">
        <p style="font-family:verdana;">Password</p>
        <input type="password" name="password" id="password" placeholder="Enter Password">
        <input type="submit" id="btn" value="Login">
        <a href="ForgotPassword.php" style="font-family:verdana;">Forget Password</a>


    </form>
</div>

</body>
</html>