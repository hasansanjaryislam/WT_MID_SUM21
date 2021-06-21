<?php
$name="";
$err_name="";
$username="";
$err_username="";
$password="";
$err_password="";
$confirm_password="";
$err_confirm_password="";
$email="";
$err_email="";
$code="";
$err_code="";
$number="";
$err_number="";
$street="";
$err_street="";
$city="";
$err_city="";
$state="";
$err_state="";
$postal="";
$err_postal="";
$day="";
$err_day="";
$month="";
$err_month="";
$year="";
$err_year="";
$gender="";
$err_gender="";
$about_us="";
$err_about_us="";
$bio="";
$err_bio="";

$hasError=false;

	$month = array("January","Feburary","March","April","May","June","July","August","September","October","November","December");

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(empty($_POST["name"]))
	{
		$hasError=true;
		$err_name="Name Required";
	}
	else
	{
		$name=$_POST["name"];
	}
	
	if(empty($_POST["username"]))
	{
		$hasError=true;
		$err_username="Username Required";
	}
	else if(strlen($_POST["username"]>6))
	{
		$hassError=true;
		$err_username="Username must contain at least 6 characters";
	}
	else
	{
		$username=$_POST["username"];
	}
	
	if(empty($_POST["password"]))
	{
		$hasError=true;
		$err_username="Password Required";
	}
	else if(strlen($_POST["username"]>8))
	{
		$hassError=true;
		$err_username="Username must contain at least 8 characters";
	}
	else if(is_numeric($_POST["password"])<1)
	{
		$hassError=true;
		$err_password="Password must contain at least 1 special character";
	}
	else if(!strpos($_POST,$char["password"]))
	{
		$hassError=true;
		$err_password="Password is not contain special character";
	}
	else if(strlen($_POST["username"]>8))
	{
		$hassError=true;
		$err_username="Username must contain at least 8 characters";
	}
	else
	{
		$username=$_POST["password"];
	}
	
}
?>
<html>
<body>	
<form action="" method="post">
<h2>Club Member Registration</h2>
<table>
				<tr>
					<td align="right">Name</td>
					<td>:<input name="name" type="text"></td>
					<td><span><?php echo $err_name;?></span></td>
				</tr>
				<tr>
					<td align="right">Username</td>
					<td>:<input name="username" type="text"></td>
					<td><span><?php echo $err_username;?></span></td>
				</tr>
				<tr>
					<td align="right">Password</td>
					<td>:<input name="password" type="password"></td>
					<td><span><?php echo $err_password;?></span></td>
				</tr>
				<tr>
					<td align="right">Confirm Password</td>
					<td>:<input name="confirmPassword" type="password"></td>
					<td><span><?php echo $err_confirm_password;?></span></td>
				</tr>
				<tr>
					<td align="right">Email</td>
					<td>:<input name="email" type="text"></td>
					<td><span><?php echo $err_email;?></span></td>
				</tr>
				<tr>
					<td align="right">Phone</td>
					<td>:<input name "code" size="3" type ="text" placeholder="Code"> - <input name "number" size="10" type ="text" placeholder="Number"></td>
					td><span><?php echo $err_code;?></span></td>
					<td><span><?php echo $err_number;?></span></td>
				</tr>
					<tr>
					<td align="right">Address</td>
					<td>:<input name "street" type="text" placeholder="Street Address"><br>
					<input name "city" type ="text" placeholder="City"> - <input name "state" type ="text" placeholder="State"><br>
					<input name "postal" type ="text" placeholder="Postal/Zip Code"> </td>
					<td><span><?php echo $err_street;?></span></td><br>
					<td><span><?php echo $err_city;?></span></td>
					<td><span><?php echo $err_state;?></span></td><br>
					<td><span><?php echo $err_postal;?></span></td>
				</tr>

				
				<tr>
					<td align="right">Birth Date</td>
					<td>:<select name="day">
							<option selected disabled>--Day--</option>
							<?php
								for($i=1; $i<=31; $i++)
								{
									echo"<option selected>$i</option>";
								}
							?>
						</select><?php echo $err_day;?><span></span>
						
						<select name="month">
							<option selected disabled>--Month--</option>
							<?php
								foreach($month as $m){
									if($m == $birth_date)
										echo "<option selected>$m</option>";
									else
										echo "<option>$m</option>";
								}
							?>
						</select> <br><span><?php echo $err_year;?></span>
						
						<select name="year">
							<option selected disabled>--Year--</option>
							<?php
								for($i=1820; $i<=2021; $i++)
								{
									echo"<option selected>$i</option>";
								}
							?>
						</select><?php echo $err_year;?><span></span>
						
					</td>
				</tr>
				
				<tr>
					<td align="right">Gender</td>
					<td>:<input type="radio" value="Male" name="gender">Male<input type="radio" value="Female" name="gender">Female</td>
					<td><span><?php echo $err_gender;?></span></td>
				</tr>
				
				<tr>
					
					<td align="right">Where did you hear about us?</td>
					<td><input type="checkbox" value="friend" name="about_us[]">A Friend or Colleague<br>
					<input type="checkbox" value="google" name="about_us[]">Google<br>
					<input type="checkbox" value="blog post" name="about_us[]">Blog Post<br>
					<input type="checkbox" value="news article" name="about_us[]">News Article
					<td><span><?php echo $err_about_us;?></span></td>
				</tr>
				
				<tr>
					<td align="right">Bio</td>
					<td><textarea name="bio"></textarea>
					<td><span><?php echo $err_bio;?></span></td>
					</td>
				</tr>
				
				<tr>
					<td align="right"><input type="submit" value="register"></td>
				</tr>
	</table>
</form>
</body>
</html>