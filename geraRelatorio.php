<?php
include("mpdf/mpdf.php");
$host = "localhost";
$bd = "mydb";
$userdb = "root";
$senhadb = "";


$part1="<html> 
<meta charset='utf-8'/>
 <hq>Acme Corp</h1><br/>
 obs:os produtos em negrito se encontram em falta ou quantidades pequenas</br> 
<table class=\"bordered\" border='3'>
 <thead>
   <tr> <td>Nome</td><td>Quantidade</td><td>Preco de compra</td><td>Preco de venda</td></tr>
 </thead><tbody>";
$part=""; 
 //faz conexão com bd e executa query
			$sql="select * from produto order by qtd";
            $conexao = mysqli_connect($host,$userdb,$senhadb,$bd);
            $resultado=mysqli_query($conexao,$sql);

            while ( $linha = mysqli_fetch_assoc($resultado) ) { 
				if($linha['qtd']<20){
				$part.="	<tr>
						
						<td><b>".$linha["nome"]."</b></td>
						<td><b>".$linha["qtd"]."</b></td>
						<td><b>".$linha["pc"]."</b></td>
						<td><b>".$linha["pv"]."</b></td>
						
					</tr> ";
					
				}else{
				   $part.="	<tr>
						
						<td>".$linha["nome"]."</td>
						<td>".$linha["qtd"]."</td>
						<td>".$linha["pc"]."</td>
						<td>".$linha["pv"]."</td>
						
					</tr> ";
				}	
			}
	$html=$part1.$part."</tbody>	
	</table>
	Gerado no dia".date("d/m/Y")."as ".date("H:i:s")."
	</html>";			
	$mpdf=new mPDF(); 
	$mpdf->SetDisplayMode('fullpage');
	$css = file_get_contents("css/materialize.min.css");
	$mpdf->WriteHTML($css,1);
	$mpdf->WriteHTML($html);
	$mpdf->Output("relatorio_produtos_".date('d/m/Y').".pdf",'D');
	
	
	header("location:http://localhost/testePHP/adm.php");
	
?>