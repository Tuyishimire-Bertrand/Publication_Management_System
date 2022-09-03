<?php session_start(); 
include 'conn.php';

$sql = "SELECT * from Publisher";
$result=$conn->prepare($sql);
$result->execute();
 $row=0;

if (isset($_POST['delete'])) {
            $checked = $_POST['checkbox'];
            for($i=0; $i < count($checked); $i++){
                $id = $checked[$i];
                $query = $conn->prepare("DELETE from Publisher WHERE pId='$id'");
                $query->execute();

                if ($query==true) {
                    echo "
<script>
alert('Book Detail Updated')
</script>
<script>
window.location = 'delete.php'
</script>
";
                }
            }

        }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Publication</title>
    <link rel="stylesheet" href="delete.css">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
</head>

<body>

    <body>
        <div class="deleteContainer">
            <ul>
                <a href="index.php">
                    <li class="mainTitleDelete">Publication Management System</li>
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
                </div>
            </ul>
        </div>
        <h1>Select items to be deleted</h1>
        <h3>Search All Publications</h3>
        <form action="adminSearch.php" method="post">
            <input type="text" name="searchbox" class="search">
            <input type="submit" value="" id="deleteSearchButton" name="search">
        </form>
        <form action="delete.php" method="post">
            <table class="deleteTable">
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
            <button type="submit" id="deleteButton" name="delete" value="Delete">Delete</button>
        </form>
    </body>

</html>