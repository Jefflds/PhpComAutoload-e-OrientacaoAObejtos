<?php

include_once __DIR__. "/../vendor/autoload.php";

use App\model\Personagem;
use App\model\Inimigo;

$personagem1 = new Personagem("Herói", 30, "Espada", 100);
$personagem2 = new Personagem("Mago", 25, "Varinha", 80);
$personagem3 = new Personagem("Arqueiro", 28, "Arco", 90);

$inimigo1 = new Inimigo("Orc", 50, "Clava", 120);
$inimigo2 = new Inimigo("Dragão", 100, "Fogo", 150);
$inimigo3 = new Inimigo("Lobisomem", 40, "Presas", 110);

$personagens = [$personagem1, $personagem2, $personagem3];

foreach ($personagens as $indice => $personagem) {
    echo "Personagem " . ($indice + 1) . ": <br> ";
    echo "Nome: " . $personagem->nome . "<br> ";
    echo "Idade: " . $personagem->idade . "<br> ";
    echo "Arma: " . $personagem->arma . "<br>";
    echo "Pontos de Vida: " . $personagem->pontosVida . "<br>";
    echo "<br><br>";
}

$inimigos = [$inimigo1, $inimigo2, $inimigo3];

foreach ($inimigos as $indice => $inimigo) {
    echo "Inimigo " . ($indice + 1) . ": <br> ";
    echo "Nome: " . $inimigo->nome . "<br> ";
    echo "Idade: " . $inimigo->idade . "<br> ";
    echo "Arma: " . $inimigo->arma . "<br>";
    echo "Pontos de Vida: " . $inimigo->pontosVida . "<br>";
    echo "<br><br>";
}