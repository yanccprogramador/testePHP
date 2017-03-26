<html>
 <head>
 <title>
    Acme Corp
 </title>
 <?php include("bd/verificarsessao.php");?>
 <meta charset="utf-8"/>
    <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
       <link rel="shortcut icon" href="img/acme.png">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	 
 </head>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
	   <nav>
    <div class="nav-wrapper black">
      <a href="consultar.php" class="brand-logo" ><img src="img/acme.png" width="90px" height="60px" /></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="consultar.php">Consultar</a></li>
        <li><a href="inserir.php">Inserir</a></li>
        <li><a href="adm.php">Opções administrativas</a></li>
		<li><a href="bd/logout.php">Deslogar</a></li>
      </ul>
    </div>
  </nav>
	    <div class="row">
	    <div class="col s12 m12 l2"><br/><br/></div> 
		<div class="col s12 m8 l8" > 
	      
		    <table class="responsive-table highlight bordered">
			 <thead>
			   <tr><td>Nome</td><td>Quantidade</td><td>Preço de compra</td><td>Preço de venda</td></tr>
			</thead>  
			<tbody>
			
			<?php
            $host = "localhost";
            $bd = "mydb";
            $userdb = "root";
            $senhadb = "";

            //faz conexão com bd e executa query
            $conexao = mysqli_connect($host,$userdb,$senhadb,$bd);

            $sql="select * from produto";
			$resultado=mysqli_query($conexao,$sql);
			   while ( $linha = mysqli_fetch_assoc($resultado) ) { ?>
				<tr>
					<td><?php echo $linha["nome"]; ?></td>
					<td><?php echo $linha["qtd"]; ?></td>
					<td><?php echo $linha["pc"]; ?></td>
					<td><?php echo $linha["pv"]; ?></td>
					<td><?php echo "<a href='edit.php?id=".$linha["id"]."' class=\"btn green waves-effect waves-green\">Editar</a>";?></td>
					<td><?php echo "<a href='alter.php?id=".$linha["id"]."' class=\"btn green waves-effect waves-green\">Alterar estoque</a>";?></td>
					<td> <?php echo "<a href='bd/delete?id=".$linha["id"]."' class=\"btn red waves-effect waves-red\">Excluir</a>";?></td>
				</tr>
				
				<?php } mysqli_close($conexao); ?>
			
		  </tbody>
			</table>
           <form method="post" action="geraRelatorio.php">
		      <input type="submit" class="btn black waves-effect waves-green" value="Gerar Relatorio" />
		   </form>	
		    <form method="post" action="mail/enviarEmail.php">
			Escolha o relatorio a ser enviado:</br>
			  <input type="file"  name="arq"/>
		      <input type="submit" class="btn black waves-effect waves-green" value="Enviar Relatorio por email" />
		   </form>	
		</div>
		</div>
	
            </div>
		</div>
    </body>
</html>

	 