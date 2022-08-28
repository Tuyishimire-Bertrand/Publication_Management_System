<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
</head>

<body>
    <h1 class="main3">PUBLICATION MANAGEMENT SYSTEM</h1>
    <div class="signer3">
        <form class="sign2" method="POST" action="core.php">
            <h1 class="title2">Enter User Credentials</h1>
            <br>
            <input class="input2" type="text" name="username" placeholder="Username">
            <br>
            <input class="input2" type="password" name="password" placeholder="Password">
            <br>
            <input class="input2" type="submit" value="Sign In" id="button2" name="adminlogin">
            <br>
        </form>
        <footer>A Group C Production © 2022 All Rights Reserved.</footer>
</body>

</html>