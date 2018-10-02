<?php
	include_once 'header.php';
?>

	<section class = "main-container">
		<div class = "main-wrapper">
			<h2>LOGIN</h2>
			<form class= "signup-form" action="includes/login.inc.php" method="POST">
				<input type = "text" name = "username" placeholder="Username" required/>
				<input type = "password" name = "password" placeholder="Password" required/>
				<button type = "submit" name ="submit">LOGIN</button> 
			</form>
		</div>
	</section>

<?php
	include_once 'footer.php';
?>
