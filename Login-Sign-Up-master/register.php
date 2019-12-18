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
          		$sql = "SELECT * FROM user WHERE (email= '$email')";
          		$data = mysql_query($sql);
          		$count = mysql_num_rows($data);
          		if($count!=0)
	          	{
	          		echo "Email already exists!!!";
	          	}
	          	else
	          	{
	          		$result = mysql_query("INSERT INTO user VALUES ('$email','$password')");
	          		if($result)
	          		{
	          			echo "Registration Successful";
	          			header("Location: login.php");
	          		}
	          		else
	          		{
	          			die("Error in Registration, Sorry!!!");
	          		}
	          	}
          	}
		?>
	</body>
</html>