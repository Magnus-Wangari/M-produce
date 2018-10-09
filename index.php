<?php
	include_once 'header.php';
?>

	<section class = "main-container">
		<div class = "main-wrapper"></div>
		<div class="example1"></div>
		<div class="main-body">
			<div class="example0"></div>
			<div class="example2"></div>
			
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
