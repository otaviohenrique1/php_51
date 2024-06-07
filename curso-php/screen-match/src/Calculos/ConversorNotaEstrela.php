<?php

namespace ScreenMatch\Calculos;

// use ArgumentCountError;
// use DivisionByZeroError;
use ScreenMatch\Modelo\Avaliavel;
use Throwable;

class ConversorNotaEstrela
{
    public function converte(Avaliavel $avaliavel): float
    {
        try {
            $nota = $avaliavel->media();
            // Realiza conversão
            return round($nota) / 2;
        } catch (Throwable) {
            return 0;
        }
        // catch (DivisionByZeroError) {
        //     // echo $erro->getMessage() . PHP_EOL;
        //     return 0;
        // } catch (ArgumentCountError $erro) {
        //     echo $erro->getMessage() . PHP_EOL;
        //     return 0;
        // }
    }
}
