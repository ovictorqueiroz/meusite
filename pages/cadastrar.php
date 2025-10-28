<?php
echo "<h1> Formulário Enviado com sucesso! </h1> <br>";

$primeiroNome = $_POST['primeiroNome'];
$sobrenome = $_POST['sobrenome'];
$useremail = $_POST['useremail'];
$opcoesTemas = $_POST['opcoesTemas'];
$sexoUsuario ='';

if (isset($_POST['sexoM'])) {
	$sexoUsuario = 'Masculino';
}

if (isset($_POST['sexoF'])) {
	$sexoUsuario = 'Feminino';
}

if (isset($_POST['sexoU'])) {
	$sexoUsuario = "Não Informado"
}


echo "Seu nome: $primeiroNome <br>";
echo "Seu sobrenome: $sobrenome <br>";
echo "Seu seu email: $useremail <br>";
echo "Sexo: $sexoUsuario <br>";
echo "Sua escolha: $opcoesTemas <br>";

echo'<a href="../index.php">Voltar</a>';
?>