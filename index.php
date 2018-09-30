<?php
	include_once 'header.php';
?>

	<section class = "main-container">
		<div class = "main-wrapper"></div>
		<div class="main-body">
			<img src="image/title-1.png" alt="title">
			<?php

			if(isset($_SESSION['username'])){
				echo "WELCOME";
			}
		?>
		</div>
		
	</section>

<?php
	include_once 'footer.php';
?>
