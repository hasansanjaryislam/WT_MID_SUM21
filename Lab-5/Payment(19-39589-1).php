<html>
	<body>
		<form action="" method="post">
		<h1>Payment</h1>
			<table>
				<tr>
					<td align="right">First Name</td>
					<td>:<input name="first name" type="text" placeholder="Enter your first name"></td>
					
				</tr>
				
				<tr>
					<td align="right">Last Name</td>
					<td>:<input name="last name" type="text" placeholder="Enter your last name"></td>
					
				</tr>
				
				<tr>
					<td align="right">CVV</td>
					<td>:<input name="cvv" type="text" placeholder="CVV"></td>
					
				</tr>
				
				<tr>
					<td align="right">Card No</td>
					<td>:<input name="card no" type="text" placeholder="Card No"></td>
					
				</tr>
				<tr>
					<td align="right">Bank Name</td>
					<td>
					
					<select name="bank">
						<option selected disabled>Select Bank</option>
						<option>Dhaka Bank Limited</option>
						<option>United Commertial Bank Limited</option>
						<option>Uttara Bank</option>
						<option>Brac Bank</option>
						<option>Shonali Bank</option>
						<option>Agrani Bank</option>
					
					</td>
				</tr>
				
				<tr>
					<td align="right">Branch</td>
					<td>
					
					<select name="branch">
						<option selected disabled>Select Branch</option>
						<option>Mohammadpur</option>
						<option>Mirpur</option>
						<option>Uttara</option>
						<option>Dhanmondi</option>
						<option>Banani</option>
						<option>Gulshan</option>
						<option>Baridhara</option>
						<option>Bashundahara</option>
						<option>Nikunjo</option>
						<option>Kuril</option>
						<option>Mogbazar</option>
						<option>Rampura</option>
					
					</td>
				</tr>
				
				<tr>
					<td align="right">Validity</td>
					<td>:<input name="validity" type="text" placeholder="dd/mm/yyyy"></td>
					
				</tr>

				
				<tr>

					<td align="right">Property id</td>
					<td><select name="property id">
						<option selected disabled>Select Property id</option>
						<?php
							for ($x = 1; $x <= 1000; $x++) {
							echo "<option selected>$x</option>";
							}
						?>
					
					</td>
				</tr>
				
				<tr>
					<td align="right"><input type="submit" value="confirm"></td>
				</tr>
				
			</table>
			
		</form>
	</body>
</html>