<?php

	// check if user has logged in
	require_once(__DIR__ . '/../includes/authenticate.php');

	// render header
	$title = 'Sign Up';
	require_once(__DIR__ . '/../includes/header.php');

?>

<!--Display confirmation message-->

<div class="container">
<h3>Congratulations!</h3>
<p>
	You have successfully signed up!
	<br>
	But your account is not activated yet. We've sent the one time activation link to your email id. Just click on the link to activate your account and enjoy our services.
</p>
</div>


<?php
	// render footer
	require_once(__DIR__ . '/../includes/footer.php');
?>
