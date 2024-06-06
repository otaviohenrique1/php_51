<?php

namespace ScreenMatch\Calculos;

use ScreenMatch\Modelo\Avaliavel;

class ConversorNotaEstrela
{
    public function converte(Avaliavel $avaliavel): float
    {
        try {
            //code...
        } catch (\Throwable $th) {
            //throw $th;
        }
        $nota = $avaliavel->media();
        // Realiza conversão
        return round($nota) / 2;
    }
}
