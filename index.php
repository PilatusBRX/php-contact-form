<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no,
	 initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Mail</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<section class="contact-form">
		<div class="text">
			<h2>Formulário de contato</h2>
		</div>
		<div class="container">			
			<form action="mail.php" method="POST">
				<input type="text" name="nome" placeholder="Seu nome" required="required">
				<input type="email" name="email" placeholder="Seu e-mail" required="required">
				<input type="text" name="assunto" placeholder="Assunto" required="required">
				<textarea name="msg" placeholder="Mensagem"></textarea>
				<input type="submit" value="Enviar">
			</form>
		</div>		
	</section>
</body>
</html>
