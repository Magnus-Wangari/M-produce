<?php
	include_once 'header.php';
?>

	<section class = "main-container">
		<div class = "main-wrapper">
			<h2>Signup</h2>
			<form class= "signup-form" action="includes/signup.inc.php" method="POST">
				<input type = "text" name = "first" placeholder="Firstname" required />
				<input type = "text" name = "last" placeholder="Lastname" required />
				<input type = "text" name = "username" placeholder="Username" required/>
				<input type = "email" name = "email" placeholder = "Email" required/>
				<input type = "text" name = "phoneNumber" placeholder="Phone Number" required/>
				<input type = "password" name = "password" placeholder="Password" required/>
				<input type = "text" name = "county" placeholder="County" required/>
				<select name="category">
					<option value="">Select one...</option>
					<option value="Consumer">Consumer</option>
					<option value="Supplier">Supplier</option>
					<option value="Both">Both</option>
				</select>
				<button type = "submit" name ="submit">Sign up</button> 
			</form>
		</div>
	</section>

<?php
	include_once 'footer.php';
?>
