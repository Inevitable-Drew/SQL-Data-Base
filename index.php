<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form method="POST" action="Login.php">
        <label for="firstname">Firstname:</label>
        <input type="text" id="firstname" name="firstname" placeholder="Enter Your Firstname" required><br><br>

        <label for="lastname">Lastname:</label>
        <input type="text" id="lastname" name="lastname" placeholder="Enter Your Lastname" required><br><br>
		
		<label for="student_number">Student Number:</label>
        <input type="text" id="studentnumber" name="studentnumber" placeholder="Enter Your Student Number" required><br><br>
		
		<label for="grade">Grade:</label>
        <input type="text" id="grade" name="grade" placeholder="Enter Your Grade" required><br><br>

        <input type="submit" value="Login">
    </form>
	
</body>
</html>
