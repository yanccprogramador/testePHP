<?php

	
	
	$login = $_POST["login"];	
	$pass = $_POST["senha"];
	
	


	if($login==="admin" && $pass=="admin"){
		session_start();
		$_SESSION['login'] = $login;
		$_SESSION['senha'] = $pass;			
		$_SESSION["sessiontime"] = time() + 300;
		
		echo "<script>alert(\"Logado com Sucesso\")
				window.location.replace('http://localhost/testePHP/consultar.php');
			 </script>";
		

		
	} else {			
			
			echo "<script>alert(\"Login Invalido ou Senha Invalidos\")
					window.location.replace('http://localhost/testePHP/login.html');
				  </script>";
			

		
	}
	

	?>	