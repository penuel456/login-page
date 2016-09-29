<?php
	session_start();
	if(!isset($_SESSION['user'])){
		header("location:index.php");
	}
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<meta charset='UTF-8'>
</head>
<body>
	<h1 class='text-center'>おかえりなさい！<?php echo $_SESSION['user'];?></h1>
	<p class='text-center'>
		<a href='logout.php'><button class='btn btn-danger'>Sign Out</button></a>
	</p>
</body>
</html>