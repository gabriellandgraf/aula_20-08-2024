<?php

class Funcionario {

    // atributos
    public $nome='Gabriel';
    public $telefone='40028922';
    public $numFilhos=2;

    //funções e métodos
    function resumirCardfunc () {
        return "$this->nome e ele possui $this->numFilhos filhos ";
    }

    function modificarNumfilhos ($numFilhos) {
        return $this->numFilhos = $numFilhos;
    }
}

$y= new Funcionario();
//echo $y->modificarNumfilhos() . PHP_EOL;
$y->modificarNumfilhos(3) . PHP_EOL;

echo $y->resumirCardfunc();


?>