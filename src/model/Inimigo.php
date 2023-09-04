<?php
namespace App\model;

class Inimigo {
    public $nome;
    public $idade;
    public $arma;
    public $pontosVida;
    
    public function __construct($nome, $idade, $arma, $pontosVida) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->arma = $arma;
        $this->pontosVida = $pontosVida;
    }
}
