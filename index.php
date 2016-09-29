<?php
	require("connector.php");
	if(isset($_POST['username']) && isset($_POST['password'])){
		$username = $_POST['username'];
		$password = md5($_POST['password']);

		// Finds matching inputs
		$qry = mysqli_query($sql, "SELECT * FROM user WHERE username = '".$username."' AND password = '".$password."'");

		if($qry){
			$x = mysqli_num_rows($qry);
			if($x == 1){
				$_SESSION['user'] = $username;
				header("location:homepage.php");
			}else {
				$login = false;
			}
		}
	}
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style>
		body {
			padding-top: 15%;
		}
	</style>
</head>
<body>
	<div class='col-md-4 col-md-offset-4'>
		<?php
			if(isset($login) && $login == false){
		?>
			<div class='alert alert-danger'>
				<span class='glyphicon glyphicon-exclamation-sign'></span>
				Login Failed!
			</div>
		<?php } ?>
		<div class='panel panel-info'>
			<div class='panel-heading'>
				<h2 class='panel-title'>Login</h2>
			</div>
			<div class='panel-body'>
				<form method='POST' action='index.php' autocomplete='OFF'>
					<input type='text' required='required' name='username' placeholder='Username' class='form-control'><br>
					<input type='password' required='required' name='password' placeholder='Password' class='form-control'><br>
					<span><a href='#'>Forgot Password?</a><span>
					<button class='btn btn-success pull-right'>Login</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>