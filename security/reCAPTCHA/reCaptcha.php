<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>reCAPTCHA API</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<div class="g-recaptcha" data-sitekey="6LeTzc8UAAAAAGf8vn1BqoW3BENNRoCqQ2avThCc"></div> <!-- reCAPTCHA div -->
		<input type="email" name="email">
		<input type="submit">
	</form>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script> <!-- API reCAPTCHA script -->
</body>
</html>

<?php
if(isset($_POST['email'])) {
	$email = $_POST['email'];
	$ch = curl_init();
	// Setting the destination URL.
	curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
	// Denying SSL verification.
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	// Defining the data to be posted in an HTTP "POST" operation
	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
		// API secret key.
		"secret"=>"6LeTzc8UAAAAAFVYerS32K05hTGdWg32vn9zkefe",
		// Informing the type of response expected.
		"response"=>$_POST["g-recaptcha-response"],
		"remoteip"=>$_SERVER["REMOTE_ADDR"])
	));
	// Returning the transfer as a string of the return value of curl_exec() instead of outputting it directly.
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$recaptcha = json_decode(curl_exec($ch), true);
	curl_close($ch);

	if($recaptcha["success"]) {
		echo "Success for $email";
	} else {
		header("location: reCaptcha.php");
	}
} else {
	return false;
}
?>