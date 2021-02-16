<?php
include('config.php');
?>
<?php

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
	$city = $_POST['city'];
	$sql =  "INSERT INTO `users` (`username`, `email`, `gender`, `city`) VALUES ('$username', '$email', '$gender', '$city')";
			$a = mysqli_query($conn , $sql);

}
?>

<html lang="en">
<head>
    <title>FORM</title>
</head>
<body>
    <form method="post">
    USERNAME <input type="text" name="username" placeholder="Enter Your Username" required> <br>
    E-MAIL <input type="email" name="email" placeholder="Enter Your E-mail" required> <br>
    Gender <br> Male <input type="radio" name="gender" value="male" > <br>
    Female <input type="radio" name="gender" value="female" > <br>
    City <select name="city" required>
    <option>Select City</option>
    <option value="Delhi">Delhi</option>
    <option value="Muzaffarnagar">Muzaffarnagar</option>
    <option value="Dehradun">Dehradun</option>
    <option value="Lucknow">Lucknow</option>

    </select> <br> <br>
    <input type="Submit" value="Submit" name="submit">
    </form>
</body>
</html>