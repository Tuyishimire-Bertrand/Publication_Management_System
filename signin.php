<?php; 
// Initialize the session.
// If you are using session_name("something"), don't forget it now!
session_start();

// Unset all of the session variables.
$_SESSION = array();

// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finally, destroy the session.
session_destroy();
header('Location: index.php');


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
</head>

<body>
    <h1 class="main2">PUBLICATION MANAGEMENT SYSTEM</h1>
    <div class="signer2">
        <form class="sign2" method="POST" action="core.php">
            <h1 class="title2">Enter User Credentials</h1>
            <br>
            <input class="input2" type="text" name="username" placeholder="Username">
            <br>
            <input class="input2" type="password" name="password" placeholder="Password">
            <br>
            <input class="input2" type="submit" value="Sign In" id="button2" name="login">
            <br>
        </form>
        <footer>A Group C Production © 2022 All Rights Reserved.</footer>
</body>

</html>