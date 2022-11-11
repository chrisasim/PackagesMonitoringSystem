<?php
    require("db.php");
	$query = "SELECT ID FROM users ORDER BY ID DESC LIMIT 1";
	$result = $con->query($query);
	if ($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			$lastValue = $row["ID"];
			//echo $lastValue;
		}
	}else
	{
		$lastValue = 1;
	}
	//echo $lastValue;
	$lastValue = $lastValue +1;
	//echo $lastValue;
	$username = $_POST['username'];

	$email = $_POST["email"];
	$password = $_POST["password"];
	$create_datetime = $_POST["create_datetime"];
	//$lastName = $_POST['lastName'];
	//$gender = $_POST['gender'];
	//$email = $_POST['email'];
	//$password = $_POST['password'];
	//$number = $_POST['number'];

	// Database connection
	//$conn = new mysqli('localhost','root','','test');
	if($con->connect_error){
		echo "$con->connect_error";
		die("Connection Failed : ". $con->connect_error);
	} else {
		//2/11/2022 13:00
		$query = "SELECT username FROM users where username='$username'";
		$result = mysqli_query($con, $query) or die(mysqli_error);
		$nun_rows = mysqli_num_rows($result);
		if ($nun_rows>0)
		{
		//echo "This record already exists";
		//$alert_msg = " Το username υπάρχει ήδη. Πληκτρολογήστε καινούριο. "; 
		//echo"<SCRIPT LANGUAGE='javascript'>alert('$alert_msg');</SCRIPT>";// This has no popover effect  why?  add exit  There will be a popup window , It will be redirected later;  
		//set_time_limit(10);
		header('Location: usernameAlreadyExists.php');
		//header('Location: addNewUser.php');
		//header('Location: addNewUser.php'); 
		//sleep(5);
		//die; 
		}else{
			$query = "INSERT INTO users(ID, username, email, password, create_datetime) VALUES ('$lastValue', '$username', '$email','$password', '$create_datetime')";
			$result = mysqli_query($con, $query) or die(mysqli_error());
			if ($result)
			{
				echo "Data have been submitted successfully";
				header('Location: enrolledUsers.php');
			}
			else{
				echo "Data have not been submittedd";
			}
		}
		
		//2/11/2022 12:00
		//$query="INSERT INTO users(ID, username, email password, create_datetime) VALUES"
		//$stmt = $con->prepare("insert into users(ID, username, email, password, create_datetime) values(?, ?, ?, ?, ?)");
		//$stmt->bind_param($lastValue, $username, $email, $password, $create_datetime);
		//$execval = $stmt->execute();
		//echo $execval;
		//echo "Registration successfully...";
		//$stmt->close();
		//header('Location: addNewUser.php');
		$con->close();
	}
?>
