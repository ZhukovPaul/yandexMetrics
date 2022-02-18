<?php

namespace  controller;

abstract class ReporterViewer
{
    static private $pathTemp = "/temp/"; 
    static private $pathJS = "/js/"; 
    
     /** 
      * Connection a graphic's template 
     */
    static function showViews(string $tempName,Array $result)
    {
        $tempFile = $_SERVER["DOCUMENT_ROOT"].self::$pathTemp.$tempName.".php";
         
        if(file_exists($tempFile)){
            include $tempFile ;
        }else{
            print "Template from {$tempName} not exists on server. Please create him"; 

        }

    
    }
}