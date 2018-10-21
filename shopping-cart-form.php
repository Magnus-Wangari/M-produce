<?php

include_once 'header.php';

?>
<section class = "main-container">
	<div class = "main-wrapper">
		<form class = "signup-form" action="pesapal-iframe.php" method="post">
			<input type="text" name="amount" placeholder = "Amount (in Ksh)"/>
			<!--<input type="number" name="quantity" placeholder="Quantity"/>-->
			<input type="text" name="type" value="MERCHANT" readonly="readonly" />
			<input type="text" name="reference" placeholder = "the ORDER ID"/>
			<input type="text" name="first_name" placeholder="First Name" />
			<input type="text" name="last_name" placeholder="Last Name" />
			<input type="text" name="email" placeholder="Email" />
			<button type="submit" name = "MakePayment">SUBMIT</button>
		</form>
	</div>
</section>

<?php

include_once 'footer.php';
?>
