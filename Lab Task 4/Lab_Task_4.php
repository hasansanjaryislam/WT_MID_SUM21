<?php
$name = "";
$err_name = "";
$username = "";
$err_username = "";
$password = "";
$err_password = "";
$confirm_password = "";
$err_confirm_password = "";
$email = "";
$err_email = "";
$phone = "";
$err_phone = "";
$gender = "";
$err_gender = "";
$address = "";
$err_address = "";
$city = "";
$err_city = "";
$state = "";
$err_state = "";
$postal = "";
$err_postal = "";
$birth_date = "";
$err_birth_date = "";
$birth_month = "";
$err_birth_month = "";
$birth_year = "";
$err_birth_year = "";
$hear = [];
$err_hear = "";
$bio = "";
$err_bio= ""; 

$hasError = false;

function exist($h)
{
	global $hear;
	foreach ($hear as $hr)
	{
		if($h == $hr)
			return true;
	}
	return false;
}


if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(empty($_POST["name"]))
	{
		$hasError = true;
		$err_name = "Name required";
	}
	else if(strlen($_POST["name"])<= 2)
	{
		$hasError = true;
		$err_name = "Name must be greater than 2 characters";
	}
	else
	{
		$name = $_POST["name"];
	}
	
	if(empty($_POST["username"]))
	{
		$hasError = true;
		$err_username = "UserName required";
	}
	else if(strlen($_POST["username"])< 6)
	{
		$hasError = true;
		$err_username = "UserName must be at least 6 characters";
	}
	else if(strpos($_POST["username"], ' ') !== false)
	{
		$hasError = true;
		$err_username = "UserName doesn't allow spaces";
	}
	else
	{
		$username = $_POST["username"];
	}
	
	
	if(empty($_POST["password"]))
	{
		$hasError = true;
		$err_password = "Password required";
	}

	else if((strlen($_POST["password"])< 8))
	{
		$hasError = true;
		$err_password = "Password requires minimum 8 characters";
	}
	if((strlen($_POST["password"])>= 8))
	{
	
	$passwordvariable = $_POST["password"];
	$uppercase = preg_match('@[A-Z]@',$passwordvariable);
	$lowercase = preg_match('@[a-z]@',$passwordvariable);
	if(!$uppercase)
	{
	$hasError = true;
	$err_password = "Password requires uppercase letters";
	}
	else if(!$lowercase)
	{
	$hasError = true;
	$err_password = "Password requires lowercase letters";
	}
	if(strpos($_POST["password"],'#') == false && (strpos($_POST["password"],'?') == false))
	{
		$hasError = true;
		$err_password = "Password requires minimum 1 '#' and '?'";
	}
	
	
	else
	{
		$password = $_POST["password"];
	}
	}
	
	if(empty($_POST["confirm_password"]))
	{
		$hasError = true;
		$err_confirm_password = "Password required";
	}
	elseif((strlen($_POST["confirm_password"])< 8))
	{
		$hasError = true;
		$err_confirm_password = "Password requires minimum 8 characters";
	}
	if((strlen($_POST["confirm_password"])>= 8))
	{
	
	
	
	$passwordvariable = $_POST["confirm_password"];
	$uppercase = preg_match('@[A-Z]@',$passwordvariable);
	$lowercase = preg_match('@[a-z]@',$passwordvariable);
	if(!$uppercase)
	{
	$hasError = true;
	$err_confirm_password = "Password requires uppercase letters";
	}
	else if(!$lowercase)
	{
	$hasError = true;
	$err_confirm_password = "Password requires lowercase letters";
	}
	if(strpos($_POST["confirm_password"],'#') == false && (strpos($_POST["confirm_password"],'?') == false))
	{
		$hasError = true;
		$err_confirm_password = "Password requires minimum 1 '#' and '?'";
	}
	
	else
	{
		$confirm_password = $_POST["confirm_password"];
	}
	}
	
	
	if(empty($_POST["email"]))
	{
		$hasError = true;
		$err_email = "Email required";
	}
	else if(strpos($_POST["email"],"@") && strpos($_POST["email"],".") )
	{
		$email = $_POST["email"];
	}
	else
	{
		$hasError = true;
		$err_email = "Email format not correct";
	}
	
	if(empty($_POST["phone"]))
	{
		$hasError = true;
		$err_phone = "Phone required";
	}
	else if(is_numeric($_POST["phone"]) != true)
	{
		$hasError = true;
		$err_phone = "Invalid Phone number";
		
	}
	else
	{
		$phone = $_POST["phone"];
	}
	
	if(empty($_POST["address"]))
	{
		$hasError = true;
		$err_address = "Address required";
	}
	else
	{
		$address = $_POST["address"];
	}
	
	if(empty($_POST["city"]))
	{
		$hasError = true;
		$err_city = "City required";
	}
	else
	{
		$city = $_POST["city"];
	}
	
	if(empty($_POST["state"]))
	{
		$hasError = true;
		$err_state = "State required";
	}
	else
	{
		$state = $_POST["state"];
	}
	
	if(empty($_POST["postal"]))
	{
		$hasError = true;
		$err_postal = "Postal required";
	}
	else
	{
		$postal = $_POST["postal"];
	}
	
	if(!isset($_POST["gender"]))
	{
		$hasError = true;
		$err_gender = "Gender required";
	}
	else
	{
		$gender = $_POST["gender"];
	}
	
	if(!isset($_POST["hear"]))
	{
		$hasError = true;
		$err_hear = "This part is required";
	}
	else
	{
		$hear = $_POST["hear"];
	}
	
	if(!isset($_POST["bio"]))
	{
		$hasError = true;
		$err_bio = "Bio required";
	}
	else
	{
		$bio = $_POST["bio"];
	}
	
	if(!$hasError)
	{
	echo $_POST["name"]."<br>";
	echo $_POST["username"]."<br>";
    echo $_POST["password"]."<br>";
	echo $_POST["email"]."<br>";
	echo $_POST["phone"]."<br>";
	echo $_POST["address"]."<br>";
	echo $_POST["birth_date"]."<br>";
	echo $_POST["birth_month"]."<br>";
	echo $_POST["birth_year"]."<br>";
    echo $_POST["gender"]."<br>";
    //echo $_POST["hear"]."<br>";
    echo $_POST["bio"]."<br>";

    $arr = $_POST["hear"];

    foreach($arr as $e)
    {
	echo "$e<br>";
    }
	}
	
}

?>

<html>
    <body> <fieldset>
	<h1>Club Member Registration</h1>
	<form action="" method="post">
	<table>
	<tr>
	<td>Name</td>
	<td>: <input name="name" value = "<?php echo $name;?>" type="text" placeholder="Enter your name..." >
	
	<span><?php echo $err_name; ?></span></td>
	</tr> 
	<tr>
	<td>UserName</td>
	<td>: <input name="username" value = "<?php echo $username;?>" type="text" placeholder="Enter your username...">
	<span><?php echo $err_username; ?></span></td>
	</tr>
	<tr>
	<td>Password</td>
	<td>: <input name="password" value = "<?php echo $password;?>" type="password" placeholder="Enter Password...">
	<span><?php echo $err_password; ?></span></td>
	</tr>
	<tr>
	<td>Confirm Password</td>
	<td>: <input name="confirm_password" value = "<?php echo $confirm_password;?>" type="password" placeholder="Enter Password again...">
	<span><?php echo $err_confirm_password; ?></span></td>
	</tr>
	<tr>
	<td>Email</td>
	<td>: <input name="email" value = "<?php echo $email;?>" type="text" placeholder="Enter Email...">
	<span><?php echo $err_email; ?></span></td>
	</tr>
	<tr>
	<td>Phone</td>
	<td>: <input name="phone" value = "<?php echo $phone;?>" type="text" placeholder="Enter Phone Number...">
	<span><?php echo $err_phone; ?></span></td>
	</tr>
	<tr>
	<td>Address</td>
	<td>: <input name="address" value = "<?php echo $address;?>" type="text" placeholder="Street Address">
	<span><?php echo $err_address; ?></span></td>
	</tr>
	<tr><td></td>
	<td><span>&nbsp;&nbsp;<input name="city" value = "<?php echo $city;?>" type="text" placeholder="City">
    <span><?php echo $err_city; ?></span>	-
	<input name="state" value = "<?php echo $state;?>" type="text" placeholder="State"></span>
	<span><?php echo $err_state; ?></span></td>
	<tr>
	<tr><td></td>
	<td>&nbsp;&nbsp;<input name="postal" value = "<?php echo $postal;?>" type="text" placeholder="Postal/Zip Code">
	<span><?php echo $err_postal; ?></span></td></tr>
	
	<tr><td>Birth Date : 
	</td>
	<td>
	<select name="birth_date">
	 <option selected disabled >--Day--</option>
	<?php for($i=1;$i<=31;$i++)
		if($i == $_POST["birth_date"])
		echo "<option selected>$i</option>"; 
	    else 
			echo "<option>$i</option>"; 
	
	?>
	</select> 
	<span>&nbsp; <?php echo $err_birth_date;?></span>
	
	<select name="birth_month">
	 <option selected disabled >--Month--</option>
	<option>January</option>
	<option>February</option>
	<option>March</option>
	<option>April</option>
	<option>May</option>
	<option>June</option>
	<option>July</option>
	<option>August</option>
	<option>September</option>
	<option>October</option>
	<option>November</option>
	<option>December</option>
	<?php 
	$p = $_POST["birth_month"];
	
       if( $p)
		echo "<option selected>$p</option>"; 
	    else 
			echo "<option>$p</option>"; 
	
		?>
	</select> 
	<span>&nbsp; <?php echo $err_birth_month;?></span>
	
	
	<select name="birth_year">
	 <option selected disabled >--Year--</option>
	<?php for($i=1990;$i<=2021;$i++)
       if($i == $_POST["birth_year"])
		echo "<option selected>$i</option>"; 
	    else 
			echo "<option>$i</option>"; 		

	?>
	</select> 
	<span>&nbsp; <?php echo $err_birth_year;?></span>
	</td> </tr>
	
	<td>Gender</td>
	<td>: <input type="radio" value="Male" name="gender">Male <input type="radio" value="Female" name="gender">Female
	<span>&nbsp; <?php echo $err_gender;?></span></td>
	</tr>
	
	<tr> <td>Whare did you hear about us? : </td> 
	<td><input type="checkbox" value="Friend" <?php if (exist("Friend")) echo "checked"; ?> name="hear[]"> A Friend or Colleague <br> <input type="checkbox" value="Google" <?php if (exist("Google")) echo "checked"; ?> name="hear[]"> Google <br>
	
	<input type="checkbox" value="Blog" <?php if (exist("Blog")) echo "checked"; ?> name="hear[]"> Blog Post <br><input type="checkbox" value="News" <?php if (exist("News")) echo "checked"; ?> name="hear[]"> News Article 
	<span>&nbsp; <?php echo $err_hear;?></span></td> </tr>
	
	<tr> <td> Bio :</td> <td>  <textarea  name="bio" placeholder="Enter Bio..."> <?php echo $bio;?> </textarea> 
	<span><?php echo $err_bio;?></span></td></tr>
	<tr> <td align="right"> </td> 
	<td> </td> </tr>
	<tr><td></td>
	<td> <input type="submit" value="register" > </td> </tr>
	
	</table>
	</form>
	
	</body>
</html>
		