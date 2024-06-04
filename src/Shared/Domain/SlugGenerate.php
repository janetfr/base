<?php


namespace MyCoon\Shared\Domain;


use MyCoon\Shared\Application\SlugManager;

class SlugGenerate implements SlugManager
{
    public function replace($cadena)
    {
        $cadena = \Normalizer::normalize($cadena, \Normalizer::FORM_D);
        $cadena = preg_replace('/[\\x80-\\xFF]+/', '', $cadena);
        $cadena = str_replace('  ', ' ', $cadena);
        $cadena = str_replace(' ', '-', $cadena);
        $cadena = preg_replace('/[^A-Za-z0-9\-]/', '', $cadena);
        $cadena = str_replace('-', '_', $cadena);
        return $cadena = strtoupper($cadena);
    }

}