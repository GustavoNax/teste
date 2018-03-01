<?php

	require_once $_SERVER['DOCUMENT_ROOT'].'/system/config.php';

	if(isset($_COOKIE['log']) && $_COOKIE['log'] == Criptografar(1)) {
		require_once 'temp/home.php';
	}else {
		echo '<script>location.href="login";</script>';
	}


?>