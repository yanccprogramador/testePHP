<?Php

$msn = "E-mail gerado para envio de relatorio. Emviado no dia: ".date("d/m/Y ")." as: ".date("H:i:s");

     include("phpmailer/class.phpmailer.php"); //Chamamos o include da classe PHPMailer

    //PEGANDO OS DADOS DO FORMULÁRIO

    $nome ="Teste PHP"; //PEGA O E-MAIL DO REMETENTE

    $de =  'yandepaula@gmail.com'; //PEGA O E-MAIL DO REMETENTE

    $para =  'testephpyan@gmail.com'; //PEGA O E-MAIL DO DESTINATÁRIO

    $assunto ="Relario"; //PEGA O ASSUNTO DO E-MAIL


    //PEGA O ARQUIVO

    $arquivo = $_FILES["arq"];

 

    // SEPARA O NOME DO ARQUIVO

    $arquivo_nome = $arquivo['name']; //PASSA NA FUNÇÃO TRATANDO CARACTERES

 

    // SEPARA O CAMINHO DO ARQUIVO

    $arquivo_caminho = $arquivo['tmp_name'];

   

    $mail = new PHPMailer(); //Instanciamos a classe PHPMailer

    $mail->IsMail(true); //Caso queira utilizar o programa de e-mail do seu servidor unix/linux para o envio de e-mail. Caso seja servidor windows o e-mail precisa ser enviado via STMP, então ai invéz de utilizar a função $mail->IsMail() utilizamos $mail->IsSMTP()

    $mail->IsHTML(true); //Ativa o envio de e-mail no formato html, se false desativa

    $mail->From = $de; //E-mail do remente da mensagem

    $mail->FromName = $nome; //Nome do remente da mensagem

    $mail->AddAddress("$para"); //E-mail que a mensagem será enviada

    $mail->Subject = $assunto; //Assunto da mensagem

    $mail->Body = "Olá<br><br>$msn"; //Corpo da mensagem

    $mail->AddAttachment($arquivo_caminho, $arquivo_nome); //ANEXA O ARQUIVO

    if($mail->Send()){ //Envia a mensagem

            echo "E-mail enviado com sucesso!"; //Mensagem do envio realizado com sucesso
			header("location:http://localhost/testePHP/adm.php");

    }else{

            echo"Erro ao enviar e-mail, tente novamente mais tarde!";
			header("location:http://localhost/testePHP/adm.php");
			//Mensagem de erro, caso não seja possível enviar a mensagem
	}


?>