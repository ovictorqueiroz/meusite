<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Meu Site em PHP</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>
	<nav class="d-flex align-items-center flex-column bg-secondary">
	<h1>Seja Membro</h1>
	<p>Tornando o mundo mais bem-informado, uma newsletter por vez.</p>
	</nav>

	<form action="#" method="post" class="d-flex flex-column">
		<label for="primeiroNome">Nome</label>
		<input type="text" name="primeiroNome" id="primeiroNome" maxlength="50" required>

		<label for="sobrenome">Sobrenome</label>
		<input type="text" name="sobrenome" id="sobrenome" >

		<label for="useremai">Email</label>
		<input type="emai" name="useremail" id="useremail">

		<label>Escolha sua Newsletter:</label>
		<select>
			<option value="noticias">Notícias</option>
			<option value="esportes">Esportes</option>
			<option value="negocios">Negócios</option>
			<option value="cultura">Cultura</option>
			<option value="cronicas">Crônicas</option>
			<option value="gastronomia">Gastronomia</option>
		</select>
		<button type="submit">Enviar</button>
		<button type="reset">Limpar</button>
	</form>

	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>	