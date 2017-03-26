<?php
session_start();
if ( isset( $_SESSION["sessiontime"] ) ) { 
	if ($_SESSION["sessiontime"] < time() ) { 
		session_unset();
		//echo "Seu tempo Expirou!";
		echo "<script>alert(\"Seu tempo Expirou!\");</script>";
		header("location:http://localhost/testePHP/login.html");
		//Redireciona para login
	} else {
		
		//Seta mais tempo 60 segundos
		$_SESSION["sessiontime"] = time() + 200;
	}
} else { 
	session_unset();
	header("location:http://localhost/testePHP/login.html");
	//Redireciona para login
}

?>