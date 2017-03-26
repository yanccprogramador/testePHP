<html>
 <head>
 <title>
    Acme Corp
 </title>
 <meta charset="utf-8"/>
    <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet/>
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
			   <form method="POST" action="bd/updateEstoque.php"> 
						  
						Novo numero em estoque:<input type='text' name='est'/>
						<?php 
						   echo "<input type='hidden' name='cod' value='".$_GET["id"]."'/>";
						   echo "<input type=\"submit\" class=\"btn green waves-effect waves-green\" value=\"Enviar\" />";
						?>
						
				</form>
			</div>
		</div>	
   </body>
</html>	