<?php
	
	session_start();
	session_destroy();
	echo "After destroying session <br/>";
	print_r($_SESSION);

?>