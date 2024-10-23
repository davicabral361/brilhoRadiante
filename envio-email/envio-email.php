<?php
$assunto = $_POST['assunto'];
$corpo = "
    Assunto: "  .$_POST['assunto']."
    Nome:"      .$_POST['nome']."
    Email: "    .$_POST['email']."
    Mensagem: " .$_POST['mensagem']."
";

mail('marquedutra1@gmail.com',$assunto,$corpo,'From: contato@abrilpraangola.com ');
print("SEus dados foram enviados com sucesso !");
?>