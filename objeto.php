<?php

// Uma classe para Jogos

class Jogo
{
    // Inicialização de cada objeto com o método mágico __construct
    public function __construct(
        private string $nome,
        private string $data_de_lancamento,
        private string $genero,
        public array $jogos_da_franquia = [],
    )
    {
        $this->nome = $nome;
        $this->data_de_lancamento = $data_de_lancamento;
        $this->genero = $genero;
    }

    public function vitrine()
    {
        echo "O {$this->nome} foi lançado {$this->data_de_lancamento}, ";
        echo "seu gênero é o {$this->genero}.\n";
    }

    public function addJogoDaFranquia(string $title)
    {
        $this->jogos_da_franquia[] = $title;
    }

    public function shuffle()
    {
        shuffle($this->jogos_da_franquia);
    }
}


// Novo jogo, o FinalFantasy, qual eu não sei
$finalFantasy = new Jogo("Final Fantasy", "2008", "JRPG");
$finalFantasy->vitrine();

// Outro jogo, o God of War
$gow = new Jogo("God of War", "2006", "HackingSlash");
$gow->vitrine();

// Adicionar jogos da franquia

$finalFantasy->addJogoDaFranquia("Final Fantasay VII - Part I");
$finalFantasy->addJogoDaFranquia("Final Fantasay VII - Part II");
$finalFantasy->addJogoDaFranquia("Final Fantasay XVI");

$gow->addJogoDaFranquia("God Of War 2005");
$gow->addJogoDaFranquia("God Of War II");
$gow->addJogoDaFranquia("God Of War III");
$gow->addJogoDaFranquia("God Of War 2018");
$gow->addJogoDaFranquia("God Of War Ragnarok");


// Mostrar os jogos das respectivas franquias
$franquiaFinalFantasy = $finalFantasy->jogos_da_franquia;

echo "\nFranquias, primeiro Final Fantasy depois God of War:\n";

foreach($franquiaFinalFantasy as $jogo){
    echo $jogo . "\n";
}

$franquiaGow = $gow->jogos_da_franquia;
foreach($franquiaGow as $jogo){
    echo $jogo . "\n";
}

echo "\n\n";

echo "Vamos bagunçar um pouco a ordem das arrays\n\n";

// Vamos imprimir os jogos
var_dump($finalFantasy->jogos_da_franquia);
echo "\n\n";

// Vamos mudar a ordem um pouco
$finalFantasy->shuffle();

// Vamos imprimir os jogos de novo
var_dump($finalFantasy->jogos_da_franquia);
echo "\n\n";

var_dump($gow->jogos_da_franquia);
echo "\n\n";

$gow->shuffle();
echo "\n\n";

var_dump($gow->jogos_da_franquia);
