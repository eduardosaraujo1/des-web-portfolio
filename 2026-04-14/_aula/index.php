<?php

require_once "Usuario.php";
require_once "Aluno.php";


$aluno1 = new Aluno("Jorge Cannalonga", "12345", "99999999999", "DSM");
$aluno1->detalhes();
echo "<br>CPF:" . $aluno1->getCPF();
$aluno1->cursando();
echo "<br><br>";

$user1 = new Usuario("Jorge Cannalonga", "12345", "99999999999");
$user1->exibir();
// var_dump($aluno1);
//echo $u;
