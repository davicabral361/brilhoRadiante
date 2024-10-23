
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="delete-paciente.php">
                    <div class="modal fade" id="ModalDelete<?php echo $lista ['idPaciente'] ?>" tabindex="-1" aria-labelledby="ModalDelete<?php echo $lista ['idPaciente'] ?>" aria-hidden="true">
                      <div class="modal-dialog">
                          <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Deletar <?php echo $lista ['idPaciente'] ?></h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                              Deseja mesmo deletar a loja <?php echo $lista ['idPaciente'] ?>?
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                              <button type="submit" name="paciente" id="txtId" value="<?php echo $lista['paciente'] ?>" class="btn btn-outline-danger">Deletar</button>
                          </div>
                          </div>
                        </div>
                      </div>
</form>


</body>
</html>