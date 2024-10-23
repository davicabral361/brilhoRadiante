<?php

 require_once("model/Conexao.php");

 class Profissional{
    private $nomeProfissional;
    private $cpfProfissional;
    private $rgProfissional;
    private $idProfissional;

    


    public function cadastrar($profissional){
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare("INSERT INTO tbprofissional(nomeProfissional, cpfProfissional,
                                    rgProfissional) VALUES(?, ?, ?)");
        $stmt->bindValue(1, $profissional->getNomeProfissional());
        $stmt->bindValue(2, $profissional->getCpfProfissional());
        $stmt->bindValue(3, $profissional->getRgProfissional());
      
        $stmt->execute();

    }



    public function listar(){
        $conexao = Conexao::conectar();
        $querySelect = "SELECT codProfissional, nomeProfissional,
        cpfProfissional FROM tbprofissional";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
    
    return $lista;
    }



    public function deletar($idProfissional) {
        $conexao = Conexao::conectar();
        $querySelect = "DELETE FROM tbprofissional WHERE idProfissional = $idProfissional";
        $resultado = $conexao->query($querySelect);
        return  $resultado;
    }

    //Paramos aqui ///////////////////////////////////////////////////////////////////////////
    
    
    /**
     * Get the value of nomeProfissional
     */ 
    public function getNomeProfissional()
    {
        return $this->nomeProfissional;
    }

    /**
     * Set the value of nomeProfissional
     *
     * @return  self
     */ 
    public function setNomeProfissional($nomeProfissional)
    {
        $this->nomeProfissional = $nomeProfissional;

        return $this;
    }

    /**
     * Get the value of cpfProfissional
     */ 
    public function getCpfProfissional()
    {
        return $this->cpfProfissional;
    }

    /**
     * Set the value of cpfProfissional
     *
     * @return  self
     */ 
    public function setCpfProfissional($cpfProfissional)
    {
        $this->cpfProfissional = $cpfProfissional;

        return $this;
    }

    /**
     * Get the value of rgProfissional
     */ 
    public function getRgProfissional()
    {
        return $this->rgProfissional;
    }

    /**
     * Set the value of rgProfissional
     *
     * @return  self
     */ 
    public function setRgProfissional($rgProfissional)
    {
        $this->rgProfissional = $rgProfissional;

        return $this;
    }

    /**
     * Get the value of idProfissional
     */ 
    public function getIdProfissional()
    {
        return $this->idProfissional;
    }

    /**
     * Set the value of idProfissional
     *
     * @return  self
     */ 
    public function setIdProfissional($idProfissional)
    {
        $this->idProfissional = $idProfissional;

        return $this;
    }
 }



 

?>