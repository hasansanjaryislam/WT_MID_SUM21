<?php
	$name='';
	$err_name="";
	$username="";
	$err_username="";
	$password="";
	$err_password="";
	$confirmPassword="";
	$err_confirmPassword="";
	$email="";
	$err_email="";
	$phone1="";
	$err_phone1="";
	$phone2="";
	$err_phone2="";
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
	$aboutUs="";
	$err_aboutUs="";
	$bio="";
	$err_bio="";
	$char="?";
	$char2="#";
	$char3="@";
	$hasError=false;
	
if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	if(empty($_POST["name"])){
		$hasError=true;
		$err_name="Name Required";
	}
	else{
		$name=$_POST["name"];
	}
	
	if(empty($_POST["username"])){
		$hasError=true;
		$err_username="Username Required";
	}
	else if(strlen($_POST["username"])>6){
		$hasError=true;
		$err_username="Username length less than 6";
	}
	else{
		$username=$_POST["username"];
	}
	if(empty($_POST["password"])){
		$hasError=true;
		$err_password="Password Required";
	}
	else if(strlen($_POST["password"])>8){
		$hasError=true;
		$err_password="Password length must be greater than 8";
	}
	else if(is_numeric($_POST["password"])<1){
		$hasError=true;
		$err_password="Password should contain at least 1 number";
	}
	
	else if(!strpos($_POST,$char["password"])){
		$hasError=true;
		$err_password="Shouldn't contain special character";
	}
	else if(!strpos($_POST,$char2["password"])){
		$hasError=true;
		$err_password="Shouldn't contain special character";
	}
	
	else{
		$password=$_POST["password"];
	}
	
	if(empty($_POST["confirmPassword"])){
		$hasError=true;
		$err_confirmPassword="Password Required";
	}
	else if($_POST["password"]!=$_POST["confirmPassword"]){
		$hasError=true;
		$err_confirmPassword="Password Mismatch";
	}
		
	else{
		$confirmPassword=$_POST["confirmPassword"];
	}
	
	if(empty($_POST["email"])){
		$hasError=true;
		$err_email="Email Required";		
	}
	else if(!strpos($_POST,$char3["email"])){
		$hasError=true;
		$err_email="Should contain @";
	}
	else{
		$email=$_POST["email"];
	}
	
	if(empty($_POST["phone1"])){
		$hasError=true;
		$err_phone1="Code Required";
	}
	else{
		$phone1=$_POST["phone1"];
	}
	if(empty($_POST["phone2"])){
		$hasError=true;
		$err_phone2="Phone Required";
	}
	else{
		$phone2=$_POST["phone2"];
	}
	
	if(empty($_POST["street"])){
		$hasError=true;
		$err_street="Street Required";
	}
	else{
		$street=$_POST["street"];
	}
	if(empty($_POST["city"])){
		$hasError=true;
		$err_city="City Required";
	}
	else{
		$city=$_POST["city"];
	}
	
	if(empty($_POST["state"])){
		$hasError=true;
		$err_state="State Required";
	}
	else{
		$state=$_POST["state"];
	}
	
	if(empty($_POST["postal"])){
		$hasError=true;
		$err_postal="Postal Required";
	}
	else{
		$postal=$_POST["postal"];
	}
	
	if(empty($_POST["bio"])){
		$hasError=true;
		$err_bio="Text Required";
	}
	else{
		$postal=$_POST["bio"];
	}
	
$arr = $_POST["aboutUs"];
foreach($arr as $e){
	echo "$e<br>";
   }
}
?>


<html>
	<body>
		<form action="" method="post">
		<fieldset>
		<legend><h1>Club Member Registration</h1></legend>
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
					<td><span><?php echo $err_confirmPassword;?></span></td>
				</tr>
				<tr>
					<td align="right">Email</td>
					<td>:<input name="email" type="text"></td>
					<td><span><?php echo $err_email;?></span></td>
				</tr>
				<tr>
					<td align="right">Phone</td>
					<td>:<input name="phone1" size="3" type="text" placeholder="Code"> - <input name="phone2" size="9" type="text" placeholder="Number"></td>
					<td><span><?php echo $err_phone2;?></span></td>
				</tr>
				
				<tr>
					<td align="right">Address</td>
					<td><input name="street" type="text" placeholder="Street Address"><br>
					
					<input name="city" size="5" type="text" placeholder="City"> - <input name="state" size="7" type="text" placeholder="State"><br>
					<input name="postal" type="text" placeholder="Postal/Zip Code"></td><td><span><?php echo $err_postal;?></span></td>
					<br><td><span><?php echo $err_street;?></span></td><br><td><span><?php echo $err_city;?></span></td><td><span><?php echo $err_state;?></span></td>
					
				</tr>
				<tr>
					<td align="right">Birth Date</td>
					<td><select name="day">
						<option selected disabled>Day</option>
						<?php
							for ($x = 1; $x <= 30; $x++) {
							echo "<option selected>$x</option>";
							}
						?>
					</select><?php echo $err_day;?><span></span>
					
					<select name="month">
						<option selected disabled>Month</option>
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
					</select><?php echo $err_month;?><span></span>
					
					<select name="year">
						<option selected disabled>Year</option>
						<?php
							for ($x = 1990; $x <= 2020; $x++) {
							echo "<option selected>$x</option>";
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
					<td><input type="checkbox" value="friend" name="aboutUs[]">A friend or Colleague <br><input type="checkbox" value="google" name="aboutUs[]">Google <br><input type="checkbox" value="blog" name="aboutUs[]">Blog Post <br><input type="checkbox" value="news" name="aboutUs[]">News Article</td>
					<td><span><?php echo $err_aboutUs;?></span></td>
				</tr>
				
				<tr>
					<td align="right">Bio</td>
					<td><textarea name="bio"></textarea>
						<td><span><?php echo $err_bio;?></span></td>
					</td>
				</tr>
				
				<tr>
					<td align="right"><input type="submit" value="Register"></td>
				</tr>
			</table>
			</fieldset>
		</form>
	</body>
</html>
				