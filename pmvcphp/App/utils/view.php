<?php

namespace App\Utils;

class View {
        // RETORNA O CONTEUDO DE UMA VIEW
    private static function getContentView($view)
    {
        $file = __DIR__.'/../../resources/view/'.$view.'.html';
        return file_exists($file) ? file_get_contents($file) : '';
    }

        // RETORNA O CONTEUDO REDENRIZADO DA VIEW
    public static function render($view, $vars = [])
    {
        // CONTEUDO DA VIEW
        $contentView = self::getContentView($view);



        //CHAVES DO ARRAY DE VARIAVEIS
        $keys = array_keys($vars);
        $keys = array_map(function($item) {
            return '{{'.$item.'}}';
        }, $keys);

        //RETORNA O CONTEUDO RENDERIZADO
        return str_replace($keys,array_values($vars),$contentView);
    }
}

?>