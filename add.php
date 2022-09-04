<?php session_start();
include 'conn.php';


// $sql = "SELECT * from Publisher where title like concat('%',?,'%')";
// $result=$conn->prepare($sql);
// $result->execute([$_POST['searchbox']]);
//Funtion for Update table

function addTable()
{

if (isset($_POST['save'])) {
    global $conn;
    $sql = "INSERT INTO Publisher values(?,?,?,?) ";
    $result=$conn->prepare($sql); 
    $result->execute([$_POST['pId'],$_POST['title'],$_POST['author'],$_POST['yop']]); 

        if ($result== true) {
            echo "
<script>
alert('Book Detail Updated')
</script>
<script>
window.location = 'admin.php'
</script>
";
        }
        
}else{?>
<tr>
    <td>Book ID</td>
    <td><input type="text" name="pId" value=""></td>
</tr>
<tr>
    <td>Title</td>
    <td><input type="text" name="title"></td>
</tr>
<tr>
    <td>Author</td>
    <td><input type="text" name="author"></td>
</tr>
<tr>
    <td>Year Of Publication</td>
    <td><input type="text" name="yop"></td>
</tr>
<?php
}}?>
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publication Management System|Search Results Page</title>
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
    </tbody>
    </table>
    <button type="submit" id="borrowButton" name="borrow">Borrow</button>
    </form>
    </div>
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
                    <?php ?>
                </tbody>
            </table>
            <button type="submit" id="borrowButton" name="borrow">Borrow</button>
        </form>
    </div>
    <form action="add.php" method="post">
        <table>
            <?php addTable(); ?>
        </table>
        <button type="submit" name="save">Save</button>
    </form>
    <footer>A Group C Production ©2022</footer>
</body>

</html>