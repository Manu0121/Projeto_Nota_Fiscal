<?php

	session_start();

	unset(
		$_SESSION['codnf'];
	);

	header('Location: index.php');

?>