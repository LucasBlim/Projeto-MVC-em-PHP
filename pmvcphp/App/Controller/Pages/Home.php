<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Organization;

class Home extends Page{
    
        // RETORNA A VIEW DA HOME
    public static function getHome(){

        //ORGANIZAÇÃO
        $obOrganization = new Organization;
        
        //VIEW DA HOME
        $content = View::render('pages/home', [
            'name'          => $obOrganization->name,
            'description'   => $obOrganization->description,
            'site'          => $obOrganization->site
        ]);

        //RETORNA A VIEW DA PÁGINA
        return parent:: getPage('LUCAS - JOB - HOME', $content);
    }
}

?>