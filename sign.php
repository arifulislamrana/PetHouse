<?php
include("header.php");
session_start();
require('db.php');
/*
if(filter_has_var(INPUT_POST, 'data')){
	$email = $_POST['data'];
	$email = filter_var($email, FILTER_SANITIZE_EMAIL);
  	echo $email.' ';
	 
	if(filter_var($email, FILTER_VALIDATE_EMAIL)){
		echo 'is valid email';
	}else{
		echo 'is not a valid mail';
	}
}
*/

if(filter_has_var(INPUT_POST, 'submit')){
	$email = $_POST['email'];
	$password = htmlspecialchars($_POST['password']);
	if(!empty($email) && !empty($password)){
		if(filter_var($email, FILTER_VALIDATE_EMAIL)===false){
			echo $email.' is not valid';
		}else{

			$query= "SELECT * FROM `admin` WHERE `email`='$email' and `password`='$password' ";
			$_SESSION['query']=$query;
			$result = mysqli_query($conn, $query);
			
			$count=mysqli_num_rows($result);
			
			if($count==1){
				header('Location:addpets.php');
			}else{
				echo "Login Failed";
			}
		}
	}
} 

?>

<!DOCTYPE html>
<html>

<head>
	<title>SalarySheet.ac.bd</title>
	<link rel="stylesheet" type="text/css" href="css/sign.css">
</head>

<body>
	<div class="login-box">
	<h1>Login Here</h1>


	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	
	<p>UserEmail</p>
	<input type="text" name="email" placeholder="Enter UserEmail"
	 value="<?php echo isset($_POST['email']) ? $email : ''; ?>">

	<p>Password</p>
	<input type="password" name="password" placeholder="Enter Password"
	 value="<?php echo isset($_POST['email']) ? $password : ''; ?>">

	<input class="tip" type="submit" name="submit" value="Login">
	<a href="">Forget Password</a>
	</form>
</div>
</body>
</html>
<?php
include("footer.php");
?>