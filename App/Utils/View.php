<?php

namespace App\Utils;

class View
{
    #Retorna conteúdo da Pag
    private static function getContentView($view)

    {
        $file = __DIR__."/../../resources/view/" . $view . ".html";

        return file_exists($file) ? file_get_contents($file) : "Página Fora";
    }

    #Renderização da Pág
    public static function render($view, $vars=[])
    {
        $getContentView = self::getContentView($view);

       $keys =  array_keys($vars);
      
    #Mapeando variáveis
      $keys = array_map(function($item){

        return '{{'.$item.'}}';

    }, $keys);

        return str_replace($keys,array_values($vars),$getContentView);
    }
}
