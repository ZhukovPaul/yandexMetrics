<?php

namespace  controller;

abstract class ReporterViewer
{
    static private $pathTemp = "/temp/"; 
    static private $pathJS = "/js/"; 
    
     /** Подключение шаблона граффика  
     * 
     * @param string $tempName 
     * @param string[] $date
     * @return string[]
     * 
     */
    static function showViews($tempName, $arResult)
    {
        $tempFile = $_SERVER["DOCUMENT_ROOT"].self::$pathTemp.$tempName.".php";
         
        if(file_exists($tempFile))
            include $tempFile ;
        else
            print "Template from {$tempName} not exists on server. Please create him"; 

        // $JsFile = $_SERVER["DOCUMENT_ROOT"].self::$pathJS."functions.js";
        //if(file_exists($JsFile)) include_once $JsFile ; 
    }
}