<?php
echo "<h1> Formulário Enviado com sucesso! </h1> <br>";

$primeiroNome = $_POST['primeiroNome'];
$sobrenome = $_POST['sobrenome'];
$useremail = $_POST['useremail'];
$opcoesTemas = $_POST['opcoesTemas'];
$sexoUsuario ='';
$estadoCivil = "";

if (isset($_POST['sexoM'])) {
	$sexoUsuario = 'Masculino';
}

if (isset($_POST['sexoF'])) {
	$sexoUsuario = 'Feminino';
}

if (isset($_POST['sexoU'])) {
	$sexoUsuario = "Não Informado";
}

if (isset($_POST['estadoCivil']) == 'Solteiro') {
	$estadoCivil = "Solteiro";

}if (isset($_POST['estadoCivil']) == 'Casado') {
	$estadoCivil = "Solteiro";

}if (isset($_POST['estadoCivil']) == 'Divorciado') {
	$estadoCivil = "Solteiro";

}if (isset($_POST['estadoCivil']) == 'Viúvo') {
	$estadoCivil = "Solteiro";
}




echo "Seu nome: $primeiroNome <br>";
echo "Seu sobrenome: $sobrenome <br>";
echo "Seu seu email: $useremail <br>";
echo "Sexo: $sexoUsuario <br>";
echo "Estado Civil: $estadoCivil <br>";
echo "Sua escolha: $opcoesTemas <br>";

if (isset($_POST['estados'])) {
	echo "Você é de " . $_POST['estados'] . "<br>";
}

if (isset($_POST['obs'])) {
	echo "Observação: " . $_POST['obs'] . "<br>";
}

echo'<a href="../index.php">Voltar</a>';
?>