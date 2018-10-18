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
				<input type="date" name="dob">
				<select name ="gender">
					<option value="">Gender..</option>
					<option value="Female">Female</option>
					<option value="Male">Male</option>
					<option value="unspecified">Unspecified</option>
				</select>
				<input type = "email" name = "email" placeholder = "Email" required/>
				<input type = "text" name = "phone" placeholder="Phone Number" required/>
				<input type = "password" name = "password" placeholder="Password" required/>
				<select name="county">
					<option value="">Choose County...</option>
					<option value="Baringo">Baringo</option>
					<option value="Bomet">Bomet</option>
					<option value="Bungoma">Bungoma</option>
					<option value="Busia">Busia</option>
					<option value="Elgeyo Marakwet">Elgeyo Marakwet</option>
					<option value="Embu">Embu</option>
					<option value="Garissa">Garissa</option>
					<option value="Homa Bay">Homa Bay</option>
					<option value="Isiolo">Isiolo</option>
					<option value="Kajiado">Kajiado</option>
					<option value="Kakamega">Kakamega</option>
					<option value="Kericho">Kericho</option>
					<option value="Kiambu">Kiambu</option>
					<option value="Kilifi">Kilifi</option>
					<option value="Kirinyaga">Kirinyaga</option>
					<option value="Kisii">Kisii</option>
					<option value="Kisumu">Kisumu</option>
					<option value="Kitui">Kitui</option>
					<option value="Kwale">Kwale</option>
					<option value="Laikipia">Laikipia</option>
					<option value="Lamu">Lamu</option>
					<option value="Machakos">Machakos</option>
					<option value="Makueni">Makueni</option>
					<option value="Mandera">Mandera</option>
					<option value="Meru">Meru</option>
					<option value="Migori">Migori</option>
					<option value="Marsabit">Marsabit</option>
					<option value="Mombasa">Mombasa</option>
					<option value="Muranga">Muranga</option>
					<option value="Nairobi">Nairobi</option>
					<option value="Nakuru">Nakuru</option>
					<option value="Nandi">Nandi</option>
					<option value="Narok">Narok</option>
					<option value="Nyamira">Nyamira</option>
					<option value="Nyandarua">Nyandarua</option>
					<option value="Nyeri">Nyeri</option>
					<option value="Samburu">Samburu</option>
					<option value="Siaya">Siaya</option>
					<option value="Taita Taveta">Taita Taveta</option>
					<option value="Tana  River">Tana  River</option>
					<option value="Tharaka Nithi">Tharaka Nithi</option>
					<option value="Trans Nzoia">Trans Nzoia</option>
					<option value="Turkana">Turkana</option>
					<option value="Uasin Gishu">Uasin Gishu</option>
					<option value="Vihiga">Vihiga</option>
					<option value="Wajir">Wajir</option>
					<option value="West Pokot">West Pokot</option>
				</select>
				<select name="category">
					<option value="">Choose Category...</option>
					<option value="Consumer">Consumer</option>
					<option value="Supplier">Supplier</option>
					<option value="Both">Both</option>
				</select>
				<button type = "submit" name ="submit">Sign up</button> 
			</form>
		</div>
	</section>

	<script>
		
	</script>

<?php
	include_once 'footer.php';
?>
