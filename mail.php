<?php
if(isset($_POST['nome']) && !empty($_POST['nome'])) {

	$nome = addslashes($_POST['nome']);
	$assunto = addslashes($_POST['assunto']);
	$email = addslashes($_POST['email']);
	$msg = addslashes($_POST['msg']);

	$para = "meu-email4@mail.com";
	$assunto_cabecalho = "$assunto";
	$corpo = "Nome: ".$nome." - Assunto: ".$assunto." - E-mail: ".$email." - Mensagem: ".$msg;


		// create email headers
	$cabecalho = "FROM:  $nome <$email>" . "\r\n";
	'Reply-To: '.$email."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	@mail($para, $assunto_cabecalho, $corpo, $cabecalho); 

	?>
	<a href="index.php">Voltar à  homepage</a>
	<?php

	echo "<h2>E-mail enviado com sucesso!</h2>";
	exit;	

}
?>
<h3>Preencha todos os campos!</h3>
<a href="index.php">Go back to homepage</a>