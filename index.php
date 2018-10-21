<!--<<<<<<< HEAD-->
<?php
	include_once 'header.php';
?>

	<section class = "main-container">
		<div class = "main-wrapper"></div>
			<div class="main-body">
				<div class="farm">
					<img src="image/gen6.jpg" alt="descrip">
				</div>
				<div class="mpro">
					<img src="image/generatedtext.jpg" alt="name">
				</div>
				<div class="example6">
					<div class="m-p">
						<img src="image/short.jpg" alg="logo">
					</div>
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

<!--<!DOCTYPE html>
<html>
    <head>
    <title>User Profile</title>
    </head>
    <body>
    <h2>Search for a User Below: </h2>
        <form action="userprofile.php"method="POST">
        
        <table>
            <tr><td>Email:</td><td><input type="text"id="email"name="email"></td>
            </tr>
            <tr><td><input type="submit" id="submit"name="submit"value="View Profile"></td></tr>
            
         </table>
        
        
        
        
        </form>
    
    </body>








</html>
>>>>>>> f0a4b5f17d130291e88015ff7e52792ada46261d
-->

