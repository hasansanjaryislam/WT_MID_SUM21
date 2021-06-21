<html>
	<body>
		<form action="" method="post">
		<h1>Customer Login</h1>
			<table>
				<tr>
					<td align="right">Name</td>
					<td>:<input name="name" type="text"></td>
					
				</tr>
				<tr>
					<td align="right">Username</td>
					<td>:<input name="username" type="text"></td>
					
				</tr>
				<tr>
					<td align="right">Password</td>
					<td>:<input name="password" type="password"></td>
					
				</tr>
				<tr>
					<td align="right">Confirm Password</td>
					<td>:<input name="confirmPassword" type="password"></td>
					
				</tr>
				<tr>
					<td align="right">Email</td>
					<td>:<input name="email" type="text"></td>
					
				</tr>
				<tr>
					<td align="right">Phone</td>
					<td>:<input name="phone1" size="3" type="text" placeholder="Code"> - <input name="phone2" size="9" type="text" placeholder="Number"></td>
					
				</tr>
				
				<tr>
					<td align="right">Address</td>
					<td><input name="street" type="text" placeholder="Street Address"><br>
					
					<input name="city" size="5" type="text" placeholder="City"> - <input name="state" size="7" type="text" placeholder="State"><br>
					<input name="postal" type="text" placeholder="Postal/Zip Code"></td>
					
					
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
					</select>
					
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
					</select>
					
					<select name="year">
						<option selected disabled>Year</option>
						<?php
							for ($x = 1990; $x <= 2020; $x++) {
							echo "<option selected>$x</option>";
							}
						?>
					
					</td>
				</tr>
				
				<tr>
					<td align="right">Gender</td>
					<td>:<input type="radio" value="Male" name="gender">Male<input type="radio" value="Female" name="gender">Female</td>
					
				</tr>
				
				<tr>
					<td align="right"><input type="submit" value="Register"></td>
				</tr>
				
			</table>
			
		</form>
	</body>
</html>