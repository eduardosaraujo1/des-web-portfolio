<?php

class Usuario
{

    function __construct(
        public $matricula,
        public $nome,
        private $cpf
    ) {}

    function setCPF($cpf): void
    {
        $this->cpf = $cpf;
    }
    function getCPF()
    {
        return $this->cpf;
    }

    public function exibir()
    {
        echo "Nome: " . $this->nome
            . "<br>Matricula: " . $this->matricula
            . "<br>CPF: " . $this->cpf;
    }
}
