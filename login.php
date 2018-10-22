<?php
	include'config.php';
?>
<!DOCTYPE html>
<html>
    <head><title>Login</title>
    <link href="forms.css" rel="stylesheet" type="text/css">
    
    </head>
	<section class = "xop-container"style="height:100%">
         <div class="xop-left">
            <article>
                <h1>M-produce</h1>
            </article>
        </div>
        
        <div class=xop-right>
            <article>
            <h1>LOGIN
                </h1>
            
            </article>
		<div class = "loginbox">
			
			<form class= "signup-form" action="login.inc.php" method="POST">
				<input type = "text" name = "username" placeholder="Username/Email" required/>
				<input type = "password" name = "password" placeholder="Password" required/>
				<input type = "submit" name ="submit" value=Login> 
               <p><a href="forgot.php">   Forgot Password</a></p> 
			</form>
		</div>
        </div>
	</section>

<?php
	include_once 'footer.php';
?>
</html>