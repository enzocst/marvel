<?php
 require("PHPMailer/src/PHPMailer.php");
 require("PHPMailer/src/SMTP.php");
 require("PHPMailer/src/Exception.php");
 
 $nome = $_POST["nome"];
 $email = $_POST["email"];
 $mensagem = $_POST["mensagem"];
 $assunto = $_POST["assunto"];
 
 enviarEmail($nome,$email,$mensagem, $assunto);

 function enviarEmail($nome,$email,$mensagem, $assunto){
	 
	  $Mailer = new PHPMailer\PHPMailer\PHPMailer();
	 
	  //Define que será usado SMTP
	  $Mailer->IsSMTP();
	 
	  //Enviar e-mail em HTML
	  $Mailer->isHTML(true);
	 
	  //Aceitar carasteres especiais
	  $Mailer->CharSet = 'UTF-8';
	 
	  //Configurações
	  $Mailer->SMTPAuth = true;
	  $Mailer->SMTPSecure = 'tls';
	 
	  //nome do servidor
	  $Mailer->Host = 'smtp.gmail.com';
	  //Porta de saida de e-mail
	  $Mailer->Port = 587;
	 
	  //Dados do e-mail de saida - autenticação
	  $Mailer->Username = 'd4ylightd3m0nsam@gmail.com';
	  $Mailer->Password = '123samuca456';
	  	 
	  //E-mail remetente (deve ser o mesmo de quem fez a autenticação)
	  $Mailer->From = 'd4ylightd3m0nsam@gmail.com';
	 
	  //Nome do Remetente
	  $Mailer->FromName = "SCM";
	 
	  //Assunto da mensagem
	  $Mailer->Subject = "$assunto";
	  
	 //Corpo da Mensagem
	  $Mailer->Body = "<html>Nome $nome<br><br>Email: $email <br><br>Mensagem: $mensagem<br><br>    
		 Atenciosamente</html>";
	 
	  //Corpo da mensagem em texto
	  $Mailer->AltBody = 'conteudo do E-mail em texto';
	 
	  //Destinatario
	  $emaild = "sistemadecontroledemanutencao@gmail.com";
	  $Mailer->AddAddress($emaild);
	 
	 if($Mailer->Send()){
	   header("Location: contatomarvel.php?msg=1");
 
		//echo "javascript:window.location='contato.php';</script>";
	  }else{
		   header("Location: contatomarvel.php?msg=0");
	   //echo $Mailer->ErrorInfo;
	  }   
 }
 ?>