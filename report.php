<?php session_start(); 
include 'conn.php';
$sql = "SELECT * from borrows";
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
                    <th>No.</th>
                    <th>Timestamp</th>
                    <th>Book Title</th>
                    <th>Borrower Username</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($list=$result->fetch(PDO::FETCH_ASSOC)) { ?>
                <tr>
                    <td>
                        <?php echo $list['id']; ?>
                    </td>
                    <td>
                        <?php echo $list['timestamp']; ?>
                    </td>
                    <td>
                        <?php echo $list['title']; ?>
                    </td>
                    <td>
                        <?php echo $list['username']; ?>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>

</html>