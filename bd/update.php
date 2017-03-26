<?php
$host = "localhost";
$bd = "mydb";
$userdb = "root";
$senhadb = "";

//faz conexão com bd e executa query
$conexao = mysqli_connect($host,$userdb,$senhadb,$bd);
mysqli_query($conexao,"update produto set nome='".$_POST["nome"]."',qtd=".$_POST["qtd"].",pc=".$_POST["pc"].",pv=".$_POST["pv"]." where id=".$_POST["cod"].";") or die("Não conseguimos executar  " . mysql_error());
mysqli_close($conexao);
header("location:http://localhost/testePHP/adm.php");
?>