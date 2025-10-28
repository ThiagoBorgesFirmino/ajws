<?php
// Check for empty fields
error_reporting(E_ALL);


if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	$_SESSION["erro"] = "Digite todos os campos corretamente.";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
$tel = $_POST['telefone'];

$message = mb_convert_encoding($message, 'ISO-8859-1', 'UTF-8');
	
// Create the email and send the message
$to = 'thiago@ajung.com.br'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Contato pelo Site - AJung";

//$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nMessage:\n$message";

$email_body = "
<div style='background-color:rgba(0,0,0,0.7);padding:5px 0px;'>
	<center>
		<table border='0' cellpadding='0' cellspacing='0' style='width:450px'>
			<tr>
				<td style='width:180px;'><img src='http://ajung.com.br/img/logo.png' style='width:150px;'/></td>
				<td valign='middle'><h1 style='color:#FFF; padding:0;margin:0;'>Contato pelo site</h1></td>
			</tr>
		</table>
	</center>		
</div>
<br/>
<center>
	<table border='0' cellpadding='0' cellspacing='0' style='width:450px'>
		<tr>
			<td style='width:85px;padding:0;margin:0'><h3>Nome:</h3></td>
			<td style='vertical-align:top;padding:0;margin:0;'><p>{$name}</p></td>
		</tr>
		<tr>
			<td style='width:85px;padding:0;margin:0;'><h3>E-mail:</h3></td>
			<td  style='vertical-align:top;padding:0;margin:0;'><p>{$email_address}</p></td>
		</tr>
		<tr>
			<td style='width:85px;padding:0;margin:0;'><h3>Telefone:</h3></td>
			<td  style='vertical-align:top;padding:0;margin:0;'><p>{$tel}</p></td>
		</tr>
	</table>
	<div style='width:450px;'>
		<h3 style='padding:0;margin:0;text-align:left'>Mensagem</h3>
		<p style='text-align:left;padding-top:5px;margin:0;'>{$message}</p>
	</div>
</center>
";



$headers = "From: thiago@ajung.com.br\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: {$email_address}";	
if(mail($to,$email_subject,$email_body,$headers)){
	$_SESSION["sucesso"] = "Mensagem enviada com sucesso!";
	return true;
}else{
	$_SESSION["erro"] = "Ocorreu um erro ao tentar enviar mensagem.";
}
return false;			
?>