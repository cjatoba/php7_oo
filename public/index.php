<?php

require_once 'Pessoa.php';

$pessoa1 = new Pessoa('Nome da pessoa 1', 30);
$pessoa2 = new Pessoa('Nome da pessoa 2', 40);

$pessoa1->setNome('Novo nome da pessoa 1');
$pessoa1->setIdade(50);

$pessoa2->setNome('Novo nome da pessoa 2');
$pessoa2->setIdade(70);

echo "<p>Nome: {$pessoa1->getNome()} </p>";
echo "<p>Idade: {$pessoa1->getIdade()} </p>";

echo "<p>Nome: {$pessoa2->getNome()} </p>";
echo "<p>Idade: {$pessoa2->getIdade()} </p>";

echo '<pre>';
    var_dump($pessoa1);
    var_dump($pessoa2);
echo '</pre>';