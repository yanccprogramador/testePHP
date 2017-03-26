<?php
$host = "localhost";
$bd = "mydb";
$userdb = "root";
$senhadb = "";

//faz conexão com bd e executa query
$conexao = mysqli_connect($host,$userdb,$senhadb,$bd);
$res=mysqli_query($conexao,"update produto set qtd=".$_POST['est']." where id=".$_POST['cod'].";");
mysqli_close($conexao);
header("location:http://localhost/testePHP/adm.php");
?>