<?php

class Pessoa{

    private string $nome;
    private int $idade;
    private Endereco $endereco;
    static int $numeroDePessoas = 0;

    public function __construct(string $nome, int $idade, Endereco $endereco)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->validaIdade($idade);
        $this->endereco = $endereco;
        self::$numeroDePessoas++;
    }

    public function __destruct()
    {
        self::$numeroDePessoas--;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getIdade(): int
    {
        return $this->idade;
    }

    public function setIdade(int $idade): void
    {
        $this->idade = $idade;
    }

    public static function getNumeroDePessoas(): int {
        return self::$numeroDePessoas;
    }

    private function validaIdade(int $idade): void
    {
        if ($this->idade > 0 AND $this->idade < 120) {
            $this->idade = $idade;
        } else {
            echo 'Idade não permitida!';
            exit;
        }
    }

}