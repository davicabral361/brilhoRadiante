<?php

require_once("model/Profissional.php");

$nome = $_POST['txtNome'];

$profissional = new Profissional();

$cpf = $_POST['txtCpf'];

$profissional->setNomeprofissional($nome);


if(empty($cpf)) {
   
    include("./form-agenda.php");

}else{
    $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
    if (strlen($cpf) != 11) {
        include("./form-agenda.php");
       

    }else if ($cpf == '00000000000' || 
    $cpf == '11111111111' || 
    $cpf == '22222222222' || 
    $cpf == '33333333333' || 
    $cpf == '44444444444' || 
    $cpf == '55555555555' || 
    $cpf == '66666666666' || 
    $cpf == '77777777777' || 
    $cpf == '88888888888' || 
    $cpf == '99999999999') {
        include("./form-agenda.php");
      
 // Calcula os digitos verificadores para verificar se o
 // CPF é válido
 
 } else{
  
    for ($t = 9; $t < 11; $t++) {
			
        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $cpf[$c] * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf[$c] != $d){
            include("./form-agenda.php");
               }
    }
    // precisa emiliminar possível máscara
   
    $profissional->setRgprofissional($_POST['txtRg']);
    $profissional->setCpfProfissional($cpf);    
    $profissional->cadastrar($profissional);
    
    include("./form-agenda.php");
     }
}

?>