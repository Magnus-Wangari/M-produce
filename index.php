<?php
	include_once 'header.php';
?>

	<section class = "main-container">
		<div class = "main-wrapper"></div>
		<div class="farm">
			<img src="image/gen6.jpg" alt="descrip">
		</div>
		<div class="main-body">
			<div class="mpro">
				<img src="image/generatedtext.jpg" alt="name">
			</div>
			<div class="m-p">
				<img src="image/short.jpg" alg="logo">
			</div>
			
			<?php

			if(isset($_SESSION['username'])){
				echo '<script type="text/javascript" >
						function preventBack(){window.history.forward();}
						setTimeout("preventBack()",0);
						window.onunload=function(){null};
						alert("Logout if you want to go back");
					</script>';
				
			}
		?>
		</div>
		
	</section>

<?php
	include_once 'footer.php';
?>
