<?php

require_once 'Pessoa.php';
require_once 'Endereco.php';

$endereco = new Endereco('SP', 'Praia Grande', 'Rua 1', '200', 'Boqueirão', '11112-654');

$pessoa1 = new Pessoa('Nome da pessoa 1', 30, $endereco);
$pessoa2 = new Pessoa('Nome da pessoa 2', 40, $endereco);
$pessoa3 = new Pessoa('Nome da pessoa 2', 40, $endereco);

echo '<p>Número de pessoas:' . Pessoa::getNumeroDePessoas() . '</p>';

echo '<pre>';
    var_dump($pessoa1);
    var_dump($pessoa2);
    var_dump($pessoa3);
echo '</pre>';