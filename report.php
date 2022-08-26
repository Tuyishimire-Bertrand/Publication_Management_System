<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrowed Publications</title>
    <link rel="stylesheet" href="borrowed.css">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
</head>

<body>

    <body>
        <div class="borrowedContainer">
            <ul>
                <a href="index.php">
                    <li class="mainTitleReport">Publication Management System</li>
                </a>
                <div class="linkBox1">
                    <a href="admin.php">
                        <li class="linkText1">Back</li>
                    </a>
                </div>
                <div class="linkBox2">
                    <a href="#">
                        <li class="linkText2">Logout</li>
                    </a>
            </ul>
        </div>
        <h1>All borrowed books</h1>
        <table class="reportTable">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Year Of Publication</th>
                    <th>pId</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Web Principles</td>
                    <td>Bitwire George</td>
                    <td>2014</td>
                    <td>W101</td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td>C Programming</td>
                    <td>Mugejjera Emma</td>
                    <td>2018</td>
                    <td>C101</td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td>Systems Design</td>
                    <td>Chongomweru Haleem</td>
                    <td>2011</td>
                    <td>S101</td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td>Leadership Skills</td>
                    <td>Tony Oyana</td>
                    <td>2004</td>
                    <td>L101</td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td>Makerere at 100</td>
                    <td>Nawangwe Barnabus</td>
                    <td>2022</td>
                    <td>M101</td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td>21st Century IT</td>
                    <td>Flavia Kasujja</td>
                    <td>2021</td>
                    <td>F101</td>
                    <td><input type="checkbox"></td>
                </tr>
            </tbody>
        </table>
    </body>

</html>