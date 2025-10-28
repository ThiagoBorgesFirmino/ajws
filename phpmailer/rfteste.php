<?php
	//require 'global.php';
	error_reporting(E_ALL);
	
	require_once("class.phpmailer.php");
	function printr($value){
		echo "<div style='background-color:#444; padding:5px;margin-bottom:10px;text-align:left;'><pre style='color:#FFF;background-color:#444 !important; border:0 !important;'>";   print_r($value);  echo "</pre></div>";
	}
	
	$request = new stdClass;
	
	$request->to       = "";	
	$request->host     = "";
	$request->username = "";
	$request->password = "";
	$request->port     = 587;
	$request->debug    = 2;
	
	
	if(isset($_REQUEST['enviar'])){
	
		// printr($_REQUEST);
		// die();
		$request = new stdClass;
		
		$request->to = $_REQUEST['to'];		
		$request->host     = $_REQUEST['host'];
		$request->username = $_REQUEST['user'];
		$request->password = $_REQUEST['pass'];
		$request->port     = $_REQUEST['port'];
		$request->debug    = $_REQUEST['debug'];
		
		if($request->to=='' || $request->host=='' || $request->username=='' || $request->password=='' || $request->port==''){
			printr('Há campos em branco. Preencha os campos com dados válidos!');
		}else{
		
			$email = new PHPMailer();
			
			$email->Body = "<p><h2>Teste</h2>Email teste de envio via autenticação PHP Mailer, enviado para {$request->to}</p>";
			$email->AddAddress($request->to);
			
			$email->IsSMTP();            
			//$email->IsMail();            
			$email->SMTPAuth = true;   
			//$email->SMTPSecure = "tls";   
			

			$email->Host        = trim($request->host);
			$email->Username    = trim($request->username);
			$email->Password    = trim($request->password);
			$email->Port        = trim($request->port); 
			
			$email->From        = trim($request->username);
			
			$email->SMTPDebug   = $request->debug;
			
			$from = 'Teste';
			$from = iconv("UTF-8", "ISO-8859-1", $from);
			
			$email->FromName = $from;
			$email->IsHTML(true);  
			
			$subject = iconv("UTF-8", "ISO-8859-1", "Teste Ajung");
			
			$email->Subject = $subject;
			
			
			$result = $email->send(); 
			
			if($result){
				printr("Email Enviado com sucesso!!");
			}else{
				printr("erro ao tentar enviar o e-mail.");
				printr($email->ErrorInfo);
			}
			
		}
		unset($_REQUEST);
	}

?>

<div style="text-align:center;">
	<h2>Teste de envio de email via autenticação.<br />PHP Mailer</h2>
	<form action="" method="POST" name="formTeste">
		
		<table style="margin:0 auto;">
			<tr>
				<td>
					<input type="hidden" name="enviar" value="1" />
					<label>
						Host(ex.: smtp.dominio.com.br)*:
					</label>
				</td><td>
					<input type="text" name="host" value="<?php echo $request->host; ?>"  />
				</td>
			</tr>
			<tr>
				<td>
					<label>
						Usuario*:
					</label>
				</td><td>
					<input type="text" name="user" value="<?php echo $request->username; ?>" />
				</td>
			</tr>
			<tr>
				<td>
					<label>
						Senha*:
					</label>
				</td><td>
					<input type="password" name="pass" value="<?php echo $request->password; ?>" />
				</td>
			</tr>
			<tr>
				<td>
					<label>
						Porta(ex.: 587)*:
					</label>
				</td><td>
					<input type="text" name="port" value="<?php echo $request->port; ?>" />
				</td>
			</tr>
			<tr>
				<td>
					<label>
						Para*:
					</label>
				</td><td>
					<input type="text" name="to" value="<?php echo $request->to; ?>" />
				</td>
			</tr>
			<tr>
				<td>
					<label>
						Debug(0,1,2):
					</label>
				</td><td>
					<input type="text" name="debug" value="1" />
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" value="Enviar" />
				</td>
			</tr>
		</table>
		
	</form>
</div>