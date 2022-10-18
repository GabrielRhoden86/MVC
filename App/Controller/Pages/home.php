<?php

namespace App\controller\Pages;

use App\Utils\View;
use App\Model\Entity\Organization;


class Home extends Page
{
  #Retorna o conteúdo da home
  public static function getHome()
  {
   
    $objOrganization = new Organization;
    
    $content = View::render("pages/home",[
      'name'=>$objOrganization->name,
      'description'=>$objOrganization->description,
      'site'=>$objOrganization->site,
    ]);
     
    return self::getPage('WDEV-Canal-Home',$content);
  }
}

