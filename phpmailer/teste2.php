<?php
	function printr($value){
		echo "<div style='background-color:#444; padding:5px;margin-bottom:10px;text-align:left;'><pre style='color:#FFF;background-color:#444 !important; border:0 !important;'>";   print_r($value);  echo "</pre></div>";
	}
	
	$to       = "nazario@ajung.com.br";
	
	if(isset($_REQUEST['enviar'])){
	
		// printr($_REQUEST);
		// die();
		
		$to = $_REQUEST['to'];	
		
		$mensagem = "Email teste de envio via mail(), enviado para {$to}.";
		
		$headers = "From: site@ajung.com.br";
		
		if( mail($to,"Teste Contato",$mensagem,$headers) ){
			printr("Mensagem enviada com sucesso!");
		}else{
			printr("Erro ao tentar enviar a mensagem :(");			
		}
	}

?>

<div style="text-align:center;">
	<h2>Teste de envio de email via mail()</h2>
	<form action="" method="POST" name="formTeste">
		<input type="hidden" value="1" name="enviar" />
		<table style="margin:0 auto;">
			<tr>
				<td>
					<label>
						Para*:
					</label>
				</td><td>
					<input type="text" name="to" value="<?php echo $to; ?>" />
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