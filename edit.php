<html>
 <head>
 <title>
    Acme Corp
 </title>
 <meta charset="utf-8"/>
    <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
       <link rel="shortcut icon" href="img/acme.png"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      
 </head>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
	  <div class="row">
		    <div class="col s3 offset -s3"><br/><br/></div>
			<div class="col s6 center">
			   <form method="POST" action="bd/update.php">
				<?php 
					$host = "localhost";
					$bd = "mydb";
					$userdb = "root";
					$senhadb = "";

					//faz conexão com bd e executa query
					$conexao = mysqli_connect($host,$userdb,$senhadb,$bd);
					$resposta=mysqli_query($conexao,"select * from produto WHERE id=".$_GET["id"].";") or die("Não conseguimos fazer a busca");
					$linha = mysqli_fetch_assoc($resposta);
					  echo "<input type='hidden' name='cod' value='".$linha["id"]."'/>";?>
							   Nome: <input type='text' name='nome' value="<?php echo $linha["nome"];?>"/>
							   Quantidade: <input type='text' name='qtd' value="<?php echo $linha["qtd"];?>"/>
							   Preço de Custo: <input type='text' name='pc' value="<?php echo $linha["pc"];?>"/>
							   Preço de venda: <input type='text' name='pv' value="<?php echo $linha["pv"];?>"/>
							
				<?php mysqli_close($conexao);
				?>
               <input type="submit" class="btn green waves-effect waves-green " value="Enviar" />
			   </form>
			</div>
		</div>	   
   </body>
</html>	