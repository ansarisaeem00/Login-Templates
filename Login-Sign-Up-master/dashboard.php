<html>
	<head>
		<title>
			MCQ
		</title>
	</head>
	<body>
	<form action="" method="post">
		<input type="submit" value="Logout" name="logout">
	</form>
	<?php
		if(isset($_POST["logout"]))
			{
				setcookie("email", "", time() + (86400 * 30), "/");
				echo "Logout Successful";
			}
	?>
	</body>
</html>