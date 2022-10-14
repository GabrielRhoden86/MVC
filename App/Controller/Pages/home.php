<?php

namespace App\controller\Pages;

use App\Utils\View;

class Home
{
  #Retorna o conteúdo da home
  public static function getHome()
  {
    return  View::render("pages/home");
  }
}
