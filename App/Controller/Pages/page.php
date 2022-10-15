<?php

namespace App\controller\Pages;

use App\Utils\View;

class Page
{
private static function getHeader(){
  return View::render('pages/header');
}

private static function getFooter(){
  return View::render('pages/footer');
}

  #Retorna o conteúdo da home
  public static function getPage($title,$content)
  {
    return  View::render("pages/page",[
      'title'=>$title,
      'header'=>self::getHeader(),
      'content'=>$content,
      'footer'=>self::getFooter()
    ]);
  }
}
