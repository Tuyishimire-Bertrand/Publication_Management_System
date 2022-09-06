<?php 
include 'sess.php';
include 'conn.php';


// $sql = "SELECT * from Publisher where title like concat('%',?,'%')";
// $result=$conn->prepare($sql);
// $result->execute([$_POST['searchbox']]);
//Funtion for Update table

function updateTable()
{
    //Search And display
if (isset($_POST['searchpId'])) {
if ($_POST['pId']=="") {
    echo "
                <script>alert('Please Enter Book Id to search')</script>
                <script>window.location = 'update.php'</script>
                ";
}else{
global $conn;
$sql = "SELECT * FROM Publisher where pId=?";
$result=$conn->prepare($sql);
$result->execute([$_POST['pId']]);


while ($list=$result->fetch(PDO::FETCH_ASSOC)) {  ?>
<tr>
    <td>Book ID</td>
    <form action="update.php" method="post">
        <td><input type="text" name="pId" value="<?php echo $list['pId']; ?>"></td>
        <td><input name="searchpId" type="submit" value="Search"></td>
    </form>
</tr>
<tr>
    <td>Title</td>
    <td><input type="text" name="title" value="<?php echo $list['title']; ?>"></td>
</tr>
<tr>
    <td>Author</td>
    <td><input type="text" name="author" value="<?php echo $list['author']; ?>"></td>
</tr>
<tr>
    <td>Year Of Publication</td>
    <td><input type="text" name="yop" value="<?php echo $list['yop']; ?>"></td>
</tr>
<?php }}
}else{?>
<tr>
    <td>Book ID</td>
    <form action="update.php" method="post">
        <td><input type="text" name="pId" value=""></td>
        <td><input name="searchpId" type="submit" value="Search"></td>
    </form>
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
<?php }
//Update Data


if (isset($_POST['save'])) {
    global $conn;
    $sql = "UPDATE Publisher SET title = ?, author = ? ,yop = ? where pId = ? ";
    $result=$conn->prepare($sql); 
    $result->execute([$_POST['title'],$_POST['author'],$_POST['yop'],$_POST['pId']]); 

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
        
}
}
//------------------------------------------------------------
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
    <form action="update.php" method="post">
        <table>
            <?php updateTable(); ?>
        </table>
        <button type="submit" name="save">Save</button>
    </form>
    <footer>A Group C Production ©2022</footer>
</body>

</html>