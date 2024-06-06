<?php

use ScreenMatch\Calculos\{CalculadoraDeMaratona, ConversorNotaEstrela};
use ScreenMatch\Modelo\Episodio;
use ScreenMatch\Modelo\Filme;
use ScreenMatch\Modelo\Genero;
use ScreenMatch\Modelo\Serie;

require_once './autoload.php';

echo "Bem-vindo(a) ao ScreenMatch\n";

$filme = new Filme(
    'Thor - Ragnarok',
    2021,
    Genero::SuperHeroi,
    180,
);

$filme->avalia(10);
$filme->avalia(10);
$filme->avalia(5);
$filme->avalia(5);

var_dump($filme);

echo $filme->media() . "\n";

echo $filme->anoLancamento . "\n";

$serie = new Serie('Lost', 2007, Genero::Drama, 10, 20, 30);
$episodio = new Episodio($serie, 'Episódio piloto', 1);

echo $serie->anoLancamento . "\n";

$serie->avalia(8);

echo $serie->media() . "\n";

$calculadora = new CalculadoraDeMaratona();
$calculadora->inclui($filme);
$calculadora->inclui($serie);
$duracao = $calculadora->duracao();

echo "Para essa maratona, você precisa de $duracao minutos" . PHP_EOL;

$conversor = new ConversorNotaEstrela();
echo $conversor->converte($serie) . PHP_EOL;
echo $conversor->converte($filme) . PHP_EOL;
