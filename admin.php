<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Control Panel </title>
    <link rel="stylesheet" href="admin.css">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
</head>

<body>
    <div class="headerContainer">
        <ul>
            <a href="index.php" style="text-decoration: none;">
                <li class="mainTitle">Publication Management System</li>
            </a>
            <a href="#">
                <li class="links">Log Out</li>
            </a>
        </ul>
    </div>
    <h1>Welcome to the Admin Control Panel</h1>
    <a href="#">
        <div class="adminbox">
            <h3 class="iconboxtext">Add Publication</h3>
        </div>
    </a>
    <a href="delete.php">
        <div class="adminbox2">
            <h3 class="iconboxtext2">Delete Publication</h3>
        </div>
    </a>
    <a href="#">
        <div class="adminbox3">
            <h3 class="iconboxtext3">Update Publication</h3>
        </div>
    </a>
    <a href="report.php">
        <div class="adminbox4">
            <h3 class="iconboxtext4">Borrowing Report</h3>
        </div>
    </a>
</body>

</html>