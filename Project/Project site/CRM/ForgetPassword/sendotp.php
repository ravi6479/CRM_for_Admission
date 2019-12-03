<?php
	session_start();
	$otp = rand(1000,9999);
	$_SESSION["otp"] = $otp;
	$msg = "Your One Time Password is : ".$otp;
	
	if(mail($_SESSION["email"], 'OTP to reset your password', $msg))
		header('Location: otp_varification.php');
	else
		echo '<script type="text/javascript">
				window.onload = function(){alert("invalid user");}
				</script>';
?>