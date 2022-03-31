<?php

if(!empty($_POST)){

	if(!empty($_POST['setCookie'])){
		setcookie("noticeCookie", "true", time() + (10 * 365 * 24 * 60 * 60));
		echo "Success";
		exit;
	}

}

?>