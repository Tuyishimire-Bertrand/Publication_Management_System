<?php 
include 'conn.php';
include 'core.php';

$sql = "SELECT * from Publisher";
$result=$conn->prepare($sql);
$result->execute();
$row=0;


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publication Management System|Home Page</title>
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
    <h1>
        <?php if (isset($_SESSION['username'])) { echo $_SESSION['username'];
        }?>, Welcome to the Publication Management System</h1>
    <h3>Search All Publications</h3>
    <form action="search.php" method="post">
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
                            <input type="checkbox" name="checkbox[]" value="<?php echo $list['pId']; ?>">
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <button type="submit" id="borrowButton" name="borrow">Borrow</button>
        </form>
    </div>
    <footer>A Group C Production ©2022</footer>
</body>

</html>