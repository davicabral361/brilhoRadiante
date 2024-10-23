
<?php
    header("Location: form-agenda.php");
    require_once("Paciente.php");

     $id = $_POST['txtId'];

    $paciente = new Paciente();
    $paciente->deletar($id);

?> 

