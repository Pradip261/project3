<!Doctype html>
<html>
<head>
	<title>Registartion Form</title>
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
	<div class="wrapper_logup">
		<form action="form_action.php" method="post" enctype="multipart/form-data">
			<div class="line_log_up"><label>Name:</label>
				<input type="text" name="Name" id="Name" class="form_control" required>
			</div>
			<div class="line_log_up"><label>E-mail:</label>
				<input type="email" name="Email" id="Email" class="form_control" required style="text-transform: lowercase;">
			</div>
			<div class="line_log_up"><label>Password:</label>
				<input type="Password" name="Password" id="Password" class="form_control" required>
			</div>
			<div class="line_log_up"><label>Phone Number:</label>
				<input type="Number" name="Phone_number" id="Phone_number" class="form_control" required>
			</div>
			<div class="line_log_up"><label id="add_lable">Address:</label>
				<textarea name="Address" id="Address" class="form_control" required></textarea>
			</div>
			<div class="line_log_up" id="kom">
				<label>GENDER:</label><input type="radio" name="gender" class="form_control_gender" id="g1" value="male"><span>Male</span>
						<input type="radio" name="gender" class="form_control_gender" id="g2" value="female"><span>Female</span>
			</div>
			<div class="line_log_up" id="kom">
				<label>SKILL:</label><input type="checkbox" name="skill[]" class="form_control" id="skill" value="C"><span>C</span>
						<input type="checkbox" name="skill[]" class="form_control" id="skill" value="C++"><span>C++</span>
						<input type="checkbox" name="skill[]" class="form_control" id="skill" value="PHP"><span>PHP</span>
						<input type="checkbox" name="skill[]" class="form_control" id="skill" value="others"><span>others</span>
			</div>
			<div class="line_log_up">
				<label>CITY:</label><select name="city" class="form_control" id="city">
						<option value="kolkata">KOLKATA</option>
						<option value="mumbai">MUMBAI</option>
						<option value="bengaluru">BENGALURU</option>
					</select>
			</div>
			<div class="line_log_up">
				<label>File Upload:</label><input type="file" name="file" id="file" class="form_control" required>
			</div>
			<button type="submit" class="btn">Logup</button>
		</form>
</div>
</body>
</html>