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
    public static function render($view)
    {
        $getContentView = self::getContentView($view);

        return $getContentView;
    }
}
