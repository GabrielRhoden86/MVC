<?php

namespace App\controller\Pages;

use App\Utils\View;

class Home extends Page
{
  #Retorna o conteúdo da home
  public static function getHome()
  {
    $content = View::render("pages/home",[
      'name'=>'WDEV-Canal',
      'description'=>'Canal do youtube: https://youtube.com.br/wdevoficial',
      'site'=>"www.wdev.com.br",
    ]);
     
    return self::getPage('WDEV-Canal-Home',$content);
  }
}
