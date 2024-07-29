<!Doctype html>
<html>
<head>
	<title>LOGIN Form</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<form action="log_action.php" method="post" enctype="multipart/form-data">
		
		<p>Username</p>
		<input type="email" name="Email" id="Email" class="form_control" required><br>
		<p>Password</p>
		<input type="Password" name="Password" id="Password" class="form_control" required><br>
		
		<input type="Submit" value="Login" class="bnt" id="sub_bnt"><br>
	</form>
</body>
</html>