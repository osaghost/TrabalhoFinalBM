<?php

namespace Source\App\Controller\Pages;

use \Source\App\Utils\View;

class Page{
    /**
     * MÉTODO REESPONSAVEL POR RENDERIZAR O TOPO DA PAGINA
     * @return string
     */
    private static function getHeader(){
        return View::render('pages/header');
    }
    private static function getFooter(){
        return View::render('pages/footer');
    }

    /** 
    *  @return string;
    */
    
    public static function getPage($title,$content){
        return  View::render('pages/page',[
            'title' => $title,
            'header' => self::getHeader(),
            'content' => $content,
            'footer' => self::getFooter(),
        ]);
        //View::render('pages/home');
    }

}