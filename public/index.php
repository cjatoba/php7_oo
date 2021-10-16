<?php

require_once 'Pessoa.php';

$pessoa1 = new Pessoa('Nome da pessoa 1', 30);
$pessoa2 = new Pessoa('Nome da pessoa 2', 40);

//Destroi o a instância da classe Pesso e chama o método __destruct na classe Pessoa
unset($pessoa2);

echo '<p>Número de pessoas:' . Pessoa::getNumeroDePessoas() . '</p>';