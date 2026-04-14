<?php

//HERANÇA

require_once "Usuario.php";
require_once "interface.php";

class Aluno extends Usuario implements Regras
{
    public $curso;

    public function __construct($m, $n, $c, $_curso)
    {
        parent::__construct($m, $n, $c);
        $this->curso = $_curso;
    }
    public function detalhes()
    {
        echo "<br>" . $this->matricula . " - Aluno: " . $this->nome;
    }
    public function cursando()
    {
        echo "<br>Cursando: " . $this->curso;
    }
    public function tipoCurso()
    {
        echo "<br>Curso EAD";
    }
    public function periodo()
    {
        echo "<br> Período: Vespertino";
    }
}
