<?php
    $host = "localhost";
    $bd = "mydb";
    $userdb = "root";
    $senhadb = "";

    //faz conexão com bd e executa query
    $conexao = mysqli_connect($host,$userdb,$senhadb,$bd);
      $sql="delete from produto WHERE id=".$_GET["id"];
	 $res= mysqli_query($conexao,$sql) or die("Não conseguimos executar  " . mysql_error());
   header("location:http://localhost/testePHP/adm.php");
?>