<?php
	$Name_error="";
	$Email_error="";
	$Contact_error="";
	$City_error="";
	$Course_error=""; 
	$Interests_error=""; 

	if(isset(($_POST['Submit']))){

		if(empty($_POST["Name"]))
		{
			$Name_error="Name is required";
		}
		else
		{
			$Name=Test_user_input($_POST["Name"]);
			if(!preg_match("/^[A-Za-z\. ]*$/", $Name))
				$Name_error="Only letters and white spaces are allowed";
		}
		if(empty($_POST["Email"]))
		{
			$Email_error="Email is required";
		}
		else
		{
			$Email=Test_user_input($_POST["Email"]);
			if(!preg_match("/[a-zA-Z \.0-9_]{3,}@[a-zA-Z \.]{3,}[.]{1}[a-zA-Z]{1,}/", $Email))
				$Email_error="Invalid Format";
		}

		if(empty($_POST["Contact"]))
		{
			$Contact_error="Contact is required";
		}
		else
		{
			$Contact=Test_user_input($_POST["Contact"]);
			if(stlen($Contact)!=10)
			$Contact_error="Contact must be of 10 length";
		}

		if(empty($_POST["City"]))
		{
			$City_error="City is required";
		}
		else
		{
			$City=Test_user_input($_POST["City"]);
		}

		if(empty($_POST["Course"]))
		{
			$Course_error="Course is required";
		}
		else
		{
			$Course=Test_user_input($_POST["Course"]);
		}

		if(empty($_POST["Interests"]))
		{
			$Interests_error="Interests are required";
		}
		else
		{
			$Interests=Test_user_input($_POST["Interests"]);
			$count=0;
			for ($i = 0; $i < strlen($Interests); $i++)
			if ($Interest[$i] == ',')
				 $count=$count + 1;
			if($count < 2 or $count > 4)
			   $Interests_error="Min 3 Max 5 interest";
		}

		if(!empty($_POST["Name"]) && !empty($_POST["Email"]) && !empty($_POST["Contact"]) && !empty($_POST["City"]) && !empty($_POST["Course"]) && !empty($_POST["Interest"]) ){
			if(empty($Name_error) && empty($Contact_error) && empty($Email_error) && empty($City_error)&& empty($Course_error)&& empty($Interests_error)){
				echo '<span style="color:#FFF;">'."<h2>Your Information</h2>".'</span>';
				echo '<span style="color:#FFF;">'."<table>
				<tr>
				<td>Name</td>
				<td>Email</td>
				<td>Contact</td>
				<td>City</td>
				<td>Interest</td>
				</tr>
				<tr>
				<td>{$_POST["Name"]}</td>
				<td>{$_POST["Email"]}</td>
				<td>{$_POST["Contact"]}</td>
				<td>{$_POST["City"]}</td>
				<td>{$_POST["Interest"]}</td>
				</tr></table>".'</span>';
			}
			else{
				echo '<span class="Error">Please input your Information agian</span>';
			}
		}
	}
	function Test_user_input($Data)
	{
		return $Data;
	}

	?>

	<!DOCTYPE html>
	<html>
	<head>
		<title>Form PHP to table</title>
	</head>
	<body> 
		<h2 class="title">Form wuth PHP</h2>
		<form  action="Form_validation_project.php" method="post" id="form"> 
			<legend>* Please Fill Out the following Fields.</legend>            
			<fieldset>
				Name:<br>
				<input class="input" type="text" Name="Name" value="" placeholder="Your name ">*
				<span class="Error"><?php echo $Name_error; ?></span>
				<br>
				E-mail:<br>
				<input class="input" type="text" Name="Email" value="" placeholder="Your Email">*
				<span class="Error"><?php echo $Email_error; ?></span>
				<br>
				Contact:<br>
				<input class="input" type="text" Name="Contact" value="" placeholder="Your Contact">*
				<span class="Error"><?php echo $Contact_error; ?></span>
				<br>   
				City:<br>
				<input class="input" type="text" Name="City" value="" placeholder="City">*
				<span class="Error"><?php echo $City_error; ?></span>
				<br>
				Course:<br>
				<input class="input" type="text" Name="Course" value="" placeholder="Course">*
				<span class="Error"><?php echo $Course_error; ?></span>
				<br>
				Interests: separated by comma<br>
				<input class="input" type="text" Name="Course" value="" placeholder="Interests">*
				<span class="Error"><?php echo $Interests_error; ?></span>
				<br>
				<br>
				<input type="Submit" Name="Submit" value="Submit Your Information"><br>
			</fieldset><br>
		</form>     
	</body>
	</html>