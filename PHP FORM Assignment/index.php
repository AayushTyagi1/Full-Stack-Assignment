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
			$Name=($_POST["Name"]);
			if(!preg_match("/^[A-Za-z\. ]*$/", $Name))
				$Name_error="Only letters and white spaces are allowed";
		}
		if(empty($_POST["Email"]))
		{
			$Email_error="Email is required";
		}
		else
		{
			$Email=($_POST["Email"]);
			if(!preg_match("/[a-zA-Z \.0-9_]{3,}@[a-zA-Z \.]{3,}[.]{1}[a-zA-Z]{1,}/", $Email))
				$Email_error="Invalid Format";
		}

		if(empty($_POST["Contact"]))
		{
			$Contact_error="Contact is required";
		}
		else
		{
			$Contact=($_POST["Contact"]);
			if(strlen($Contact)!=10)
			$Contact_error="Contact must be of 10 length";
		}

		if(empty($_POST["City"]))
		{
			$City_error="City is required";
		}
		else
		{
			$City=($_POST["City"]);
		}

		if(empty($_POST["Course"]))
		{
			$Course_error="Course is required";
		}
		else
		{
			$Course=($_POST["Course"]);
		}

		if(empty($_POST["interests"]))
		{
			$Interests_error="Interests are required";
		}
		else
		{
			$Interests=($_POST["interests"]);
			   $no_checked = count($_POST['interests']);
              if($no_checked<2)
			     $Interests_error = "Select at least two options";
			 if($no_checked>5)
			 $Interests_error = "Select at most 5 options";
    }
		}

		if(!empty($_POST["Name"]) && !empty($_POST["Email"]) && !empty($_POST["Contact"]) && !empty($_POST["City"]) && !empty($_POST["Course"]) && !empty($_POST["interests"]) ){
			if(empty($Name_error) && empty($Contact_error) && empty($Email_error) && empty($City_error)&& empty($Course_error) && empty($Interests_error)){
				
        echo "<table>

            <tr>
            <td colspan='5'>Your Information</td>
              </tr>
            <tr>
            <th>Name</th>
			<th>Email</th>
			<th>Contact</th>
			<th>City</th>
			<th>Interests</th>

            </tr>";

              echo "<tr>";
              echo "<td>" . $_POST["Name"] . "</td>";
              echo "<td>" . $_POST["Email"] . "</td>";
              echo "<td>" . $_POST["Contact"] . "</td>";
              echo "<td>" . $_POST["City"] . "</td>";
              echo "<td>"; foreach($_POST['interests'] as $checked){
                    echo $checked."</br>";} echo "</td>";
    echo "</table>";
	
			}
		}
			else{
				echo '<span class="Error">Please input your Information agian</span>';
			}

	?>


	<!DOCTYPE html>
	<html>
	<head>
		<title>Form Assignment</title>
		<link rel="stylesheet" href="styles.css">
	</head>
	<body> 
		<h2 class="title">Form PHP</h2>
		<form  action="index.php" method="post" id="form"> 
			<legend>* Please Fill Out the following Fields.</legend>            
			<fieldset>
			Name:<br>
				<input class="input" type="text" Name="Name" value="<?php echo isset($_POST["Name"])?$_POST["Name"]:""; ?>" placeholder="Your name ">*
				<span class="Error"><?php echo $Name_error; ?></span>
				<br>
				E-mail:<br>
				<input class="input" type="text" Name="Email" value="<?php echo isset($_POST["Email"])?$_POST["Email"]:""; ?>" placeholder="Your Email">*
				<span class="Error"><?php echo $Email_error; ?></span>
				<br>
				Contact:<br>
				<input class="input" type="text" Name="Contact" value="<?php echo isset($_POST["Contact"])?$_POST["Contact"]:""; ?>" placeholder="Your Contact">*
				<span class="Error"><?php echo $Contact_error; ?></span>
				<br>   
				City:<br>
				<input class="input" type="text" Name="City" value="<?php echo isset($_POST["City"])?$_POST["City"]:""; ?>" placeholder="City">*
				<span class="Error"><?php echo $City_error; ?></span>
				<br>
				Course:<br>
				<input class="input" type="text" Name="Course" value="<?php echo isset($_POST["Course"])?$_POST["Course"]:""; ?>" placeholder="Course">*
				<span class="Error"><?php echo $Course_error; ?></span>
				<br>
				Interests<br>
				<input type="checkbox"  name="interests[]" value="coding">
                        <label for="intetests"> CODING</label>
                        <input type="checkbox"  name="interests[]" value="development">
                        <label for="intetests"> DEVELOPMENT</label>
                        <input type="checkbox"  name="interests[]" value="data science">
                        <label for="intetests"> DATA SCIENCE</label>
                        <input type="checkbox"  name="interests[]" value="ml">
						<label for="intetests"> Machine Learning</label><br>
						<input type="checkbox" ] name="interests[]" value="problem solving">
						<label for="intetests"> Problem Solving</label><br>

				<span class="Error"><?php echo $Interests_error; ?></span>
				<br>
				<br>
				<input type="Submit" Name="Submit" value="Submit Your Information"><br>
			</fieldset><br>
			
		</form>     
	</body>
	</html>