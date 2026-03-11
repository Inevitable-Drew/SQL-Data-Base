<body>
	<link rel="stylesheet" href="style.css">
<?php
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
	$studentnumber = $_POST['studentnumber'];
	$grade = $_POST['grade'];
	
	echo "Login successful! Welcome, ".htmlspecialchars($lastname)."<br>";
	
	if ($grade == 100){
		echo "Your Grade is 1"."<br>";
	}
	else if (($grade>=97)&&($grade<=99)){
		echo "Your Grade is 1.25"."<br>";
	}
	else if (($grade>=94)&&($grade<=96)) {
		echo "Your Grade is 1.5"."<br>";
	}
	else if (($grade>=90)&&($grade<=93)) {
		echo "Your Grade is 1.75"."<br>";
	}
	else if (($grade>=87)&&($grade<=89)) {
		echo "Your Grade is 2"."<br>";
	}
	else if (($grade>=84)&&($grade<=86)) {
		echo "Your Grade is 2.25"."<br>";
	}
	else if (($grade>=80)&&($grade<=83)) {
		echo "Your Grade is 2.5"."<br>";
	}
	else if (($grade>=77)&&($grade<=79)) {
		echo "Your Grade is 2.75"."<br>";
	}
	else if (($grade>=75)&&($grade<=76)) {
		echo "Your Grade is 3"."<br>";
	}
	else if (($grade>=74)&&($grade<=0)) {
		echo "Your Grade is 5"."<br>";
	}
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "csdb";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
		if(!$conn){
			die("connection failed:".mysqli_connect_error());
		}
		
	$sql = "INSERT INTO cstbl(firstname, lastname, Student_Number, Grade)
	Values('$firstname', '$lastname', '$studentnumber', '$grade');";
		if(mysqli_multi_query($conn, $sql)) {
			echo "Successfully added <br>";
		}
		else {
			echo "Error:".$sql."<br>".mysql_error($conn);
		}
				
	$sql1 = "SELECT id,firstname,lastname,Student_Number,Registration_Date,Grade FROM cstbl";
	$result = mysqli_query($conn, $sql1);
		if(mysqli_num_rows($result)>0) {
			while($row=mysqli_fetch_assoc($result)) {
				echo "Number:".$row["id"]." Firstname: ".$row["firstname"]." ,Lastname: ".$row["lastname"]." ,Student Number: ".$row["Student_Number"]." ,Date: ".$row["Registration_Date"]." ,Grade: ".$row["Grade"]."<br>";
			}
		}
			else {
				echo "0 result";
			}
			mysqli_close($conn);
	?>
</body>
