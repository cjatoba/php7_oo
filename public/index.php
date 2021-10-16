<?php

require_once 'Pessoa.php';

$pessoa1 = new Pessoa();
$pessoa2 = new Pessoa();

$pessoa1->nome = "Nome da pessoa 1";
$pessoa1->idade = 30;
$pessoa2->nome = "Nome da pessoa 2";
$pessoa2->idade = 40;

echo "<p>Nome: $pessoa1->nome </p>";
echo "<p>Idade: $pessoa1->idade </p>";
echo '<hr>';
echo "<p>Nome: $pessoa2->nome </p>";
echo "<p>Idade: $pessoa2->idade </p>";

echo '<pre>';
    var_dump($pessoa1);
    var_dump($pessoa2);
echo '</pre>';