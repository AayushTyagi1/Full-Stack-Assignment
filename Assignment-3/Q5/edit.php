<?php
include('config.php');
?>
<?php
	$id  =  $_GET['id'];
	$sql = "SELECT * FROM `users` WHERE `id`=$id"; 
	$result = mysqli_query($conn , $sql); 
	$row = $result->fetch_assoc(); 
	$username = $row['username']; 
	$email = $row['email'];
	$gender = $row['gender']; 
	$city = $row['city']; 
?>
<?php
if(isset($_POST['update'])){
	$username = $_POST['username']; 
	$email = $_POST['email'];
	$gender = $_POST['gender']; 
	$city = $_POST['city']; 

	$sql = "UPDATE `users` SET username='$username', email='$email', gender='$gender',city='$city' WHERE id='$id'"; 	
	$ans = mysqli_query($conn , $sql);  
	if($ans){
		echo "Data updated successfully...";
		header("Location:index.php");  
	}
	else{
		echo "Data updation failed..."; 
	}
}

?>
<html lang="en">
<head>
    
    <title>HTML FORMS</title>
</head>
<body>
    <form method="post" action = "edit.php?id=<?php  echo "$id"?>">
    USERNAME <input type="text" name="username" value="<?php echo $username?>"placeholder="Type Your Username"  required> <br>
    
    E-MAIL <input type="email" name="email" value="<?php echo $email?>"placeholder="Type Your E-mail" required> <br>
    Gender <br> Male <input type="radio" name="gender"<?php if($gender == "Male"){echo "checked";}?>  value="Male" > <br>
     Female <input type="radio" name="gender" <?php  if($gender == "Female"){echo "checked";}?> value="Female"> <br>
     City <select name="city"  required>
     <option><option>Select City</option></option>
     <option value="Dehradun" <?php if($city == "Dehradun"){echo "selected";}?>>Dehradun</option>
     <option value="Dehli" <?php if($city == "Delhi"){echo "selected";}?>>Dehli</option>
     <option value="Jaipur" <?php if($city == "Jaipur"){echo "selected";}?>>Jaipur</option>
     </select> <br> <br>
     <input type="Submit" value="UPDATE" name="update">
    </form>
</body>
</html>