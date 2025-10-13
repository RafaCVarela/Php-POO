<?php

// A classe pessoa, cada pessoa tem um nome e uma idade, também, uma pessoa é capaz de falar.
class Pessoa
{
    // Atributos
    public string $nome;
    public int $idade;

    // Métodos
    public function falar()
    {
        echo "Meu nome é " . $this->nome . " e eu tenho " . $this->idade . " anos de idade.\n";
    }
}

// Instanciamento de uma nova pessoa
$rafael = new Pessoa();

// Definindo seus atributos
$rafael->nome = 'Rafael Costa Varela';
$rafael->idade = 24;

// Chamando o método, sua ação
$rafael->falar();

// Mesmo processo para um novo objeto
$marcelo = new Pessoa();

$marcelo->nome = 'Marcelo Guimarães Varela Filho';
$marcelo->idade = 27;

$marcelo->falar();
