<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Meu Site em PHP</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<nav id="navbar">
		<div class="logo">
			<img src="./images/news-logo.png">
		</div>
		<div class="txtMenu">
			<h1>Seja Membro</h1>
			<p>Tornando o mundo mais bem-informado, uma newsletter por vez.</p>
		</div>
	</nav>
	<main class="container">
		<h2>Cadastro</h2>	
		<form action="pages/cadastrar.php" method="post">

			<div class="md-3">
				<label for="primeiroNome">Nome</label>
				<input type="text" name="primeiroNome" id="primeiroNome" maxlength="50" required placeholder="Digite seu primeiro nome" autocomplete="off">
			</div>
			
			<div class="md-3">
				<label for="sobrenome">Sobrenome</label>
				<input type="text" name="sobrenome" id="sobrenome" placeholder="Digite seu sobrenome" autocomplete="off">
			</div>

			
			<div class="md-3">
				<label for="useremail">Email</label>
				<input type="emai" name="useremail" id="useremail" placeholder="Digite seu e-mail" autocomplete="off">
			</div>

			<div>
				<label>Sexo</label>
				<div class="d-flex justify-content-around align-items-center">
					<input type="checkbox" name="sexoM" id="sexo"><label for="sexoM">Masculino</label>
					<input type="checkbox" name="sexoF" id="sexo"><label for="sexoF">Feminino</label>
					<input type="checkbox" name="sexoU" id="sexo"><label for="sexoU">Não informar</label>
				</div>
			</div>

			<div>
				<label>Estado Civil</label>
				<div class="d-flex justify-content-around align-items-center">
					<input type="radio" name="estadoCivil" id="radioButton" value="Solteiro"><label for="estadoCivil">Solteiro</label>
					<input type="radio" name="estadoCivil" id="radioButton" value="Casado"><label for="estadoCivil">Casado</label>
					<input type="radio" name="estadoCivil" id="radioButton" value="Divorciado"><label for="estadoCivil">Divorciado</label>
					<input type="radio" name="estadoCivil" id="radioButton" value="Viúvo"><label for="estadoCivil">Viúvo</label>
				</div>
			</div>

			<div>
				<label>Estado</label>
				<select name="estados">
					<option value="SP">São Paulo</option>
					<option value="MG">Minas Gerais</option>
					<option value="ES">Espírito Santo</option>
					<option value="RJ">Rio de Janeiro</option>
				</select>
			</div>


			<div class="md-3">
				<label>Escolha sua Newsletter:</label>
				<select id="opcoesTemas" name="opcoesTemas">
					<option value="Noticias">Notícias</option>
					<option value="Esportes">Esportes</option>
					<option value="Negocios">Negócios</option>
					<option value="Cultura">Cultura</option>
					<option value="Cronicas">Crônicas</option>
					<option value="Fofoca">Fofoca</option>
					<option value="Gastronomia">Gastronomia</option>
					<option value="Educação">Educação</option>
					<option value="Agro">Agronegócio</option>
				</select>
			</div>

			<div>
				<label>Observação</label>
				<textarea name="obs" cols="65" rows="8"></textarea>
			</div>

			<button type="submit" class="md-3 btn btn-primary">Enviar</button>

			
			<button type="reset" class="md-3 btn btn-danger">Limpar</button>
			
		</form>
	</main>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>	