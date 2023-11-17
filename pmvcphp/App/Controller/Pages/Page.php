<?php

namespace App\Controller\Pages;

use \App\Utils\View;

class Page{

    //RENDERIZA O TOPO DA PÁGINA
    private static function getHeader(){
        return View::render('pages/header');
    }

    //RENDERIZA O RODAPÉ DA PÁGINA
    private static function getFooter(){
        return View::render('pages/footer');
    }

    // RETORNA A HOME DA VIEW
    public static function getPage($title,$content){
        return View::render('pages/page', [
            'title' => $title,
            'header' => self::getHeader(),
            'content' => $content,
            'footer' => self::getFooter()
        ]);
    }
}

?>