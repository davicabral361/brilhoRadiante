<?php
header("Location: form-agenda.php");
require_once("model/Paciente.php");

$paciente = new Paciente();

$nome = $_POST['txtNome'];
$paciente = new Paciente();


$paciente->setNomePaciente($nome);
$paciente->setDtNasctoPaciente($_POST['txtDtNascto']);
$paciente->setEmailPaciente($_POST['txtEmail']);
$paciente->setTelefonePaciente($_POST['txtTelefone']);
$paciente->setCelularPaciente($_POST['txtCelular']);
$paciente->setRgPaciente($_POST['txtRg']);
$paciente->setCpfPaciente($_POST['txtCpf']);


$paciente->cadastrar($paciente);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <a href="index.php">Terminar seção</a>
</body>
</html>