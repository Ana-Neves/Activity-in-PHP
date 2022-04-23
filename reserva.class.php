<?php
class reserva{

    private $nome;
    private $email;
    private $telefone;
    private $rg;
    private $dias;
    private $tipoReserva;


    // Nome
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }



    // email
    public function getEmail()
    {
        return $this->email;
    }

  
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    // telefone 
    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    // rg
    public function getRg()
    {
        return $this->rg;
    }

    public function setRg($rg)
    {
        $this->rg = $rg;

        return $this;
    }


    // dias
    public function getDias()
    {
        return $this->dias;
    }

    public function setDias($dias)
    {
        $this->dias = $dias;

        return $this;
    }

      //reserva 
    public function getTipoReserva()
    {
        return $this->tipoReserva;
    }

    public function setTipoReserva($tipoReserva)
    {
        $this->tipoReserva = $tipoReserva;

        return $this;
    }


    function valorDasReservas(){
        switch ($this->tipoReserva) {
            case 'Suíte Double Master':
                 return 150;
                break;
            case 'Suíte Família':
                return 180;
            case 'Suíte Single': 
                return 100;
            default:
                echo 'escolha invalida';
                break;
        }
    }

    function calcularReserva(){
       return $this->valorDasReservas() * $this->dias;
    }



    function __toString()
    {
        return nl2br(
            "<h1>
            Nome: $this->nome.
             Email: $this->email
             Telefone: $this->telefone
             Dias de estadia: $this->dias
             Tipo de reserva: $this->tipoReserva
             Valor da reserva: {$this->valorDasReservas()}
             Valor total: {$this->calcularReserva()}
             </h1>
            "
        );
    }

  
}

?>