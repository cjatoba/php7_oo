<?php

require_once '../src/Pessoa.php';
require_once '../src/Endereco.php';
require_once '../src/Funcionario.php';
require_once '../src/Cliente.php';

$endereco = new Endereco('SP', 'Praia Grande', 'Rua 1', '200', 'Boqueirão', '11112-654');

$pessoa1 = new Pessoa('Nome da pessoa 1', 30, $endereco);
$pessoa2 = new Pessoa('Nome da pessoa 2', 40, $endereco);
$pessoa3 = new Pessoa('Nome da pessoa 2', 40, $endereco);

$funcionario1 = new Funcionario('Nome do funcionário', 20, $endereco, 'Desenvolvedor', 25000);

echo '<pre>';
    var_dump($funcionario1);
echo '</pre>';

$cliente1 = new Cliente('Nome do cliente', 50, $endereco, '01/05/1900', 15000);

echo '<pre>';
    var_dump($cliente1);
echo '</pre>';

echo '<p>Número de pessoas:' . Pessoa::getNumeroDePessoas() . '</p>';

echo '<pre>';
    var_dump($pessoa1);
    var_dump($pessoa2);
    var_dump($pessoa3);
echo '</pre>';