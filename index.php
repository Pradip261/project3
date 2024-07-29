<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
    <link rel="stylesheet" href="css/style1.css">
    
</head>
<body>
    <div class="header">
        <h1>Index</h1>
        <div class="navigation">
            <a href="#c1">Home</a>
            <a href="sign_up.php">LogUp</a>
            <a href="#">Contact</a>
            <a href="#">Database</a>
            <button>login</button>
        </div>
    </div>
    <div class="wrapper">
		<form action="log_action.php" method="post" enctype="multipart/form-data">
			<h1>login</h1>
			<div class="login_input">
				<input type="email" name="Email" id="Email" placeholder="Username" required><br>
			</div>
			<div class="login_input">
				<input type="Password" name="Password" id="Password" placeholder="Password" required>
			</div>
			<div class="remember-forgot">
			<label><input type="checkbox">Remember Me</label>
				<a href="#">Forgot Password</a>
			</div>
			<button type="submit" class="btn">Login</button>
			<div class="register-link">
				<p>Dont have an account? <a href="sign_up.php">Register</a></p>
			</div>
		</form>
	</div>
</body>
</html>
