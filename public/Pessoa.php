<?php

class Pessoa{

    private string $nome;
    private int $idade;
    static int $numeroDePessoas = 0;

    public function __construct(string $nome, int $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->validaIdade($idade);
        //o self é utilizado para fazer referencia a um atributo static
        self::$numeroDePessoas++;
    }

    //Chamado quando se utiliza o unset em um objeto desta classe
    public function __destruct()
    {
        self::$numeroDePessoas--;
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

    public static function getNumeroDePessoas() {
        return self::$numeroDePessoas;
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