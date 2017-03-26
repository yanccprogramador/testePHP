<?php
    //variaveis
	  $nome=$_POST['nome'];
	  $qtd=$_POST['qtd'];
	  $pc=$_POST['pc'];
	  $pv=$_POST['pv'];
	  $host = "localhost";
	  $bd = "mydb";
	  $userdb = "root";
	  $senhadb = "";
	  
	//faz conexão com bd e executa query	
	$conexao = mysqli_connect($host,$userdb,$senhadb,$bd);
	
	    if($nome!="" && $qtd!="") {

            $sql = "INSERT INTO produto(nome,qtd,pc,pv) VALUES('" . $nome . "','" . $qtd . "','" . $pc . "','" . $pv . "')";
            $res = mysqli_query($conexao, $sql) or die("Não conseguimos executar  " . mysql_error());
            header("location:http://localhost/testePHP/inserir.php");
        }else{
	    	echo "Não conseguimos inserir. <a  href='inserir.php'>clique aqui para inserir</a>";
		}


		mysqli_close($conexao);	
		 
    		 
?>		