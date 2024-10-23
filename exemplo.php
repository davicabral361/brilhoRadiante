<div class="modal fade" id="exampleModalProfissional" tabindex="-2" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cadastra Profissional</h5>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                
                </div>
                <div class="modal-body">
                <form method="post" action="cadastra-profissional.php" >
                    <label> Nome</label>        
                    <input type="text" name="txtNome">
                        <br><br>
                        <label> Cpf</label>

                        <input type="text" name="txtCpf" placeholder="CPF"><br><br>
                        
                        <label>Email</label>
                        <input type="text" name="txtEmail" placeolder="Email">

                        <br><br>        
                        <label> RG</label>
                        <input type="text" name="txtRg">

                        <input type="submit" value="Cadastrar">
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
                    <label>Nome </label>
                    <input type="text" name="txtNome">
                    <br><br>
                    <label>CPF</label>
                    <input type="text" name="txtCpf">
                    <br><br>
                    <label>Data de nascimento</label>
                    <input type="date" name="txtDtNascto">
                    <br><br>
                    <label>Rg</label>
                    <input type="text" name="txtRg">
                    <br><br>
                    <label> Email</label>
                    <input type="text" name="txtEmail">
                    <br><br>
                    <label>Telefone </label>
                    <input type="text" name="txtTelefone">
                    <br><br>
                    <label>Celular</label>
                    <input type="text" name="txtCelular">
                    <br><br>
                <input type="submit" value="Cadastrar">
               
    
    </form>
                   
                    

                </div>
            </div>
        </div>
    </div>

   