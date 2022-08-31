<?php session_start();
include 'conn.php';


$sql = "SELECT * from Publisher where title like  concat('%',?,'%')";
$result=$conn->prepare($sql);
$result->execute([$_POST['searchbox']]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publication Management System | Search Results Page</title>
    <link rel="stylesheet" href="index.css">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
</head>

<body>
    <div class="indexContainer">
        <ul>
            <li class="mainTitleIndex">Publication Management System</li>
            <div class="linkBox1">
                <a href="pms.php">
                    <li class="linkText1">Register</li>
                </a>
            </div>
            <div class="linkBox2">
                <a href="signin.php">
                    <li class="linkText2">Login</li>
                </a>
            </div>
            <div class="linkBox3"> </a>
                <a href="adminlogin.php">
                    <li class="linkText3">Admin</li>
                </a>
            </div>
        </ul>
    </div>
    <h1>Welcome to the Publication Management System</h1>
    <h3>Search All Publications</h3>
    <form action="adminSearch.php" method="post">
        <input type="text" name="searchbox" class="search">
        <input type="submit" value="" id="searchButton" name="search">
    </form>
    <div>
        <form method="post" action="core.php">
            <table class="indexTable">
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
                    <?php while ($list=$result->fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                        <td>
                            <?php echo $list['title']; ?>
                        </td>
                        <td>
                            <?php echo $list['author']; ?>
                        </td>
                        <td>
                            <?php echo $list['yop']; ?>
                        </td>
                        <td>
                            <?php echo $list['pId']; ?>
                        </td>
                        <td>
                            <input type="checkbox">
                        </td>
                    </tr>
                    <?php } ?>
                    <!-- <tr>
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
</tr> -->
                </tbody>
            </table>
            <button type="submit" id="borrowButton" name="borrow">Borrow</button>
        </form>
    </div>
    <footer>A Group C Production ©2022</footer>
</body>

</html>