<?php

class Usuario{

    private $iddadoscadastrais;
    private $acesso;
    private $cpf_cnpj;
    private $tipocliente;
    private $clientedesde;
    private $statusdocliente;
    private $statusdoacesso;
    private $motivodostatus;
    private $statusdesde;

    public function getIddadoscadastrais(){
        return $this->iddadoscadastrais;
    }

    public function setIddadoscadastrais($value){
         $this->iddadoscadastrais = $value;
    }

    public function getAcesso(){
        return $this->acesso;
    }

    public function setAcesso($value){
         $this->acesso = $value;
    }

    public function getCpf_cnpj(){
        return $this->cpf_cnpj;
    }

    public function setCpf_cnpj($value){
         $this->cpf_cnpj = $value;
    }

    public function getTipocliente(){
        return $this->tipocliente;
    }

    public function setTipocliente($value){
         $this->tipocliente = $value;
    }

    public function getClientedesde(){
        return $this->clientedesde;
    }

    public function setClientedesde($value){
         $this->clientedesde = $value;
    }

    public function getStatusdocliente(){
        return $this->statusdocliente;
    }

    public function setStatusdocliente($value){
         $this->statusdocliente = $value;
    }

    public function getStatusdoacesso(){
        return $this->statusdoacesso;
    }

    public function setStatusdoacesso($value){
         $this->statusdoacesso = $value;
    }

    public function getMotivodostatus(){
        return $this->motivodostatus;
    }

    public function setMotivodostatus($value){
         $this->motivodostatus = $value;
    }

    public function getStatusdesde(){
        return $this->statusdesde;
    }

    public function setStatusdesde($value){
         $this->statusdesde = $value;
    }


    public function loadById($id){

        $sql = new Sql();

        $result = $sql->select("SELECT * FROM db_timsite.dados_cadastrais where iddadoscadastrais = :ID", array(
            ":ID"=>$id
        ));

        if (count($result) > 0){

            $row = $result[0];

            // $this->setIddadoscadastrais($row['iddadoscadastrais']);
            $this->setAcesso($row['acesso']);
            // $this->setCpf_cnpj($row['cpf_cnpj']);
            // $this->setTipocliente($row['tipocliente']);
            // $this->setClientedesde($row['clientedesde']);
            // $this->setStatusdocliente($row['statusdocliente']);
            // $this->setStatusdoacesso($row['statusdoacesso']);
            // $this->setMotivodostatus($row['motivodostatus']);
            // $this->setStatusdesde($row['statusdesde']);
        }


    }

    public function __toString(){

        return json_encode(array(
            // "iddadoscadastrais"=>$this->getIddadoscadastrais(),
            "acesso"=>$this->getAcesso(),
            // "cpf_cnpj"=>$this->getCpf_cnpj(),
            // "tipocliente"=>$this->getTipocliente(),
            // "clientedesde"=>$this->getClientedesde(),
            // "statusdocliente"=>$this->getStatusdocliente(),
            // "statusdoacesso"=>$this->getStatusdoacesso(),
            // "motivodostatus"=>$this->getMotivodostatus(),
            // "statusdesde"=>$this->getStatusdesde()
            
        ));

    }

}
?>