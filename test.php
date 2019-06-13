<?php
	$cookie_name = "v_cookie";
	$cookie_value = "Expire";
	setcookie($cookie_name, $cookie_value, time() + (86400 * 1), "/"); 
?>

<html>
<head>
	<style type="text/css">
		video {
		  width: 100%    !important;
		  height: auto   !important;
		}
	</style>
</head>
<body>
	<?php

		if(isset($_COOKIE[$cookie_name]) && $_COOKIE[$cookie_name] == $cookie_value) {
			echo'<video width="480" height="320" controls>
			  		<source src="mp4.php?token='.md5(uniqid(rand(), true)).'" type="video/mp4">
				 <video>';

		} else {
			unset($_COOKIE[$cookie_name]);
			echo 'Token expired!';
			exit;
		}
	?>
</body>
</html>



