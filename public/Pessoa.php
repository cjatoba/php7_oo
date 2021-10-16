<?php

class Pessoa{

    private string $nome;
    private int $idade;

    public function __construct(string $nome, int $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->validaIdade($idade);
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }

    public function getIdade()
    {
        return $this->nome;
    }

    public function setIdade(int $idade)
    {
        $this->idade = $idade;
    }

    private function validaIdade(int $idade)
    {
        if ($this->idade > 0 AND $this->idade < 120) {
            $this->idade = $idade;
        } else {
            echo 'Idade não permitida!';
            exit;
        }
    }

}