<?php

include_once("valida-sentinela.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="img/logo-m.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/Clinica.css">
    <link rel="stylesheet" type="text/css" href="./css/main2.css">
    <link rel="stylesheet" type="text/css" href="./css/logincss.css">
    <meta name="viewport" content="width=device-width, initial-scale=12">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=12">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- MDB Bootstrap-->
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->

    <title>Brilho Radiante</title>
    <!--favicon-->
    <link rel="icon" href="img/BB.png"> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>

<body>   
    <div class="menu">
    <input type="checkbox" id="check">
        <label for="check">
            <i class="fas fa-database" style="background-color:#4682B4;" id="btn" style="margin-top: 0%;" ></i>
            <i class="fas fa-times" id="cancel" style="background-color:#4682B4;"></i>
        </label> 
            <div class="sidebar" style="margin-top: -1.5%;" >
                <header>
                    <img class="logoADM" src="img/logoFinal.png" height="60px" width="200px">

                </header>
              

                <a class="nav-item nav-link"
                style="font-size: 20px;" id="modal-logar" button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalProfissional">Profissional</a>
                <a class="nav-item nav-link"
                style="font-size: 20px;" id="modal-logar" button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalPaciente">Paciente</a>
                


                <a href="logout.php">
                    <i class="fas fa-"></i>
                    <span style="margin-left:-10%;">Sair</span>
                </a>
                

              
            </div>
    </div>
            



    <!-- Modal da Escolha do usuário!!!! ( n mexer !!!!) -->


    <div class="modal fade" id="exampleModalProfissional" tabindex="-2" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cadastra Profissional</h5>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                
                </div>
                <div class="modal-body">
                <form  class="form-profissional" method="post" action="cadastra-profissional.php" >
                    <label class="profissional">Nome</label><br>        
                    <input type="text" name="txtNome">
                        <br>
                        <label class="profissional1">Cpf</label><br>

                        <input type="text" name="txtCpf" placeholder="CPF">
                    
                        <br>        
                        <label class="profissional2">RG</label><br>
                        <input type="text" name="txtRg">
                        <br>
                        <br>
                        <input style="background-color: #4682B4;" type="submit" value="Cadastrar">
                        <br>
    
    </form>
                   
                    

                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="exampleModalPaciente" tabindex="-2" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cadastra Paciente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="cadastra-paciente.php">
                    <label  style="margin-left:-32%;"   >Nome </label><br>
                    <input class="paciente" type="text" name="txtNome">
                    <br>
                    <label style="margin-left:-35%;">CPF</label><br>
                    <input class="paciente" type="text" name="txtCpf">
                    <br>
                    <label style="margin-left: -12%;">Data de Nascimento</label><br><!--arrumar-->
                    <input class="paciente" type="date" name="txtDtNascto">
                    <br>
                    <label style="margin-left:-37%;">Rg</label><br>
                    <input class="paciente" type="text" name="txtRg">
                    <br>
                    <label style="margin-left:-33%;"> Email</label><br>
                    <input class="paciente" type="text" name="txtEmail">
                    <br>
                    <label style="margin-left:-28%;">Telefone </label><br>
                    <input class="paciente" type="text" name="txtTelefone">
                    <br>
                    <label style="margin-left:-30%;">Celular</label><br>
                    <input class="paciente" type="text" name="txtCelular">
                    <br>
                <input type="submit" value="Cadastrar">
               
    
    </form>
                   
                    

                </div>
            </div>
        </div>
    </div>

   









        <?php

        require_once("model/Paciente.php");
        require_once("model/Profissional.php");
        require_once("model/Agenda.php");
        try {
            $paciente = new Paciente();
            $profissional = new Profissional();
            $agenda = new Agenda();
            $listapaciente = $paciente->listar();
            $listaprofissional = $profissional->listar();
            $listaagenda = $agenda->listar();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        ?>
        <br><br><br><br><br>
        <div class=alinha>
            <h2 class="Agendamento">Agendamento</h2>
            <br>
            <form action="cadastra-agenda.php" method="post">

                <label style="margin-left:-16% ; " style="position:fixed;">Data:</label><br>
                <input class="int" type="date" name="txtData">
                <br>
                <label  style="margin-left:-16% ;" >Hora:</label><br>
                <input class="int" type="time" name="txtHora"><br>
                <label style="margin-left:-13% ;">Paciente:</label><br>
                <select class="int" name="paciente" action="">
                    <option value="0">Selecione</option>
                    <?php foreach ($listapaciente as $linha) { ?>
                        <option value="<?php echo $linha['codPaciente'] ?>">
                            <?php echo $linha['nomePaciente'] ?>
                        </option>
                    <?php } ?>
                </select>
                <br>

                <label style="margin-left:-10% ;">Profissional:</label><br>
                <select class="int" name="profissional">
                    <option value="0">Selecione</option>
                    <?php foreach ($listaprofissional as $linha) { ?>
                        <option value="<?php echo $linha['codProfissional'] ?>">
                            <?php echo $linha['nomeProfissional'] ?>
                        </option>
                    <?php } ?>
                </select>
                <br>
                <input class="botao" type="submit" value="Cadastrar">
            </form>
        </div>
        <br><br>


        <h1 class="AgendamentosCadastrados">Lista de Consultas</h1>
        <br>
        <center>
            <table border=1px cellpadding=5px>
                <thead>
                    <tr>
                        <td>
                        <th>Id</th>
                        </td>
                        <td>
                        <th>Data</th>
                        </td>
                        <td>
                        <th>Hora</th>
                        </td>
                        <td>
                        <th>Paciente</th>
                        </td>
                        <td>
                        <th>Profissional</th>
                        </td>
                        <td>
                        <th>Editar</th>
                        </td>
                        <td>
                        <th>Excluir</th>
                        </td>
                    </tr>
                </thead>


                <tbody>
                    <?php foreach ($listaagenda as $linha) { ?>
                        <tr>
                            <th>
                            <td><?php echo $linha['idAgenda'] ?></td>
                            </th>
                            <th>
                            <td><?php echo $linha['dataagenda'] ?></td>
                            </th>
                            <th>
                            <td><?php echo $linha['horaagenda'] ?></td>
                            </th>
                            <th>
                            <td><?php echo $linha['nomePaciente'] ?></td>
                            </th>
                            <th>
                            <td><?php echo $linha['nomeProfissional'] ?></td>
                            </th>
                            <th>
                            <td><a href="#" class="editar">Editar</a></td>
                            </th>
                            <th>
                            <td><a href="#" class="editar">Excluir</a></td>
                            </th>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

    </body>


</html>