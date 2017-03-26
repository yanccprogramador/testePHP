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
      <script type="text/javascript">
         function verificar() {
             if (document.formulario.nome.value =='' || document.formulario.qtd.value =='')  {
                 alert("Por favor, preencha os campos corretamente.");
                 return;
             }

         }
      </script>
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
	    <div class="col s12 m12 l3"><br/></div> 
		<div class="col s12 m8 l6" > 
	      <form name="formulario" method="post" action="bd/insert.php">
			 <input type="text" placeholder="Nome" name="nome" required="true"/>
			 <input type="text" placeholder="Quantidade" name="qtd" required="true"/>
			 <input type="text" placeholder="Preço de custo" name="pc" />
			 <input type="text" placeholder="Preço de revenda" name="pv"/>
			 <input type="submit" value="Cadastrar" onclick="verificar()" class="btn waves-effect waves-green black"/>
		  </form>
		</div>
		</div>
    </body>
</html>