<?php
	session_start();
	require_once 'conn.php';
 	
 	//Login Function
 	//------------------------------------------
 	if(isset($_POST['login'])){
		if($_POST['username'] != "" || $_POST['password'] != ""){


			$username = $_POST['username'];
			$password = $_POST['password'];


			$sql = "SELECT * FROM `User` WHERE `username`=? AND `password`=? ";
			$query = $conn->prepare($sql);
			$query->execute(array($username,$password));
			$row = $query->rowCount();
			$fetch = $query->fetch();
			if($row > 0) {
				$_SESSION['user'] = $fetch['userId'];
				header("location: index.php");
			} else{
				echo "
				<script>alert('Invalid username or password')</script>
				<script>window.location = 'signin.php'</script>
				";
			}
		}else{
			echo "
				<script>alert('Please complete the required field!')</script>
				<script>window.location = 'index.php'</script>
			";
		}
	}
		////Admin
	if(isset($_POST['adminlogin'])){
		if($_POST['username'] != "" || $_POST['password'] != ""){


			$username = $_POST['username'];
			$password = $_POST['password'];


			$sql = "SELECT * FROM `Admin` WHERE `username`=? AND `password`=? ";
			$query = $conn->prepare($sql);
			$query->execute(array($username,$password));
			$row = $query->rowCount();
			$fetch = $query->fetch();
			if($row > 0) {
				$_SESSION['user'] = $fetch['adminId'];
				header("location: admin.php");
			} else{
				echo "
				<script>alert('Invalid username or password')</script>
				<script>window.location = 'signin.php'</script>
				";
			}
		}else{
			echo "
				<script>alert('Please complete the required field!')</script>
				<script>window.location = 'index.php'</script>
			";
		}
	}
	//------------------------------------------------

	//Register Function
	if(ISSET($_POST['register'])){
		if($_POST['firstname'] != "" || $_POST['username'] != "" || $_POST['password'] != ""){
			try{
				$firstname = $_POST['firstname'];
				$lastname = $_POST['lastname'];
				$username = $_POST['username'];
				// md5 encrypted
				// $password = md5($_POST['password']);
				$password = $_POST['password'];

				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$sql = "INSERT INTO `User` VALUES ('', '$firstname', '$lastname', '$username', '$password')";
				$conn->exec($sql);
			}catch(PDOException $e){
				echo $e->getMessage();
			}
			$_SESSION['message']=array("text"=>"User successfully created.","alert"=>"info");
			$conn = null;
			header('location:index.php');
		}else{
			echo "
				<script>alert('Please fill up the required field!')</script>
				<script>window.location = 'registration.php'</script>
			";
		}
	}

	if (isset($_POST['borrow'])) {
		echo "Borrow Working";
	}

	if (isset($_POST['delete'])) {
		echo "Delete Working1";
	}

	if (isset($_POST['search'])) {
		echo "Search Working1";
	}
?>