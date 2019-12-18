<html>
	<head>
		<title>
			MCQ
		</title>
	</head>
	<body>
		<form action="" method="post">
			Email : 
			<input type="email" name="email" required>
			Password :
			<input type="password" name="password" required>
			<input type="submit" value="Register" name="submit" />
		</form>
		<?php
			if(isset($_POST["submit"]))
			{
				$link = mysql_connect('localhost', 'root', '');
          		$mydb = mysql_select_db('test',$link);
          		$email = $_POST["email"];
          		$password = $_POST["password"];
          		$sql = "SELECT * FROM user WHERE (email= '$email' AND password='$password')";
          		$data = mysql_query($sql);
          		$row = mysql_fetch_assoc($data);
          		if($row!=0)
	          	{
		          	setcookie("email",$email, time() + (86400 * 30), "/");
	          		header("Location: dashboard.php");
	          	}
	          	else
	          	{
	          		echo "Invalid Login";
	          	}
	        }
	    ?>
	</body>
</html>
