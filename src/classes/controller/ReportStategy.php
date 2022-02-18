<?php 

namespace  controller;

abstract class ReportStategy
{

    static private $startTime   = null;
    static private $endTime     = null;
    static private $token = null;
    static private $counterId = null; 

    /**
     * Save token to using
     */
    
    function __construct($token, $counterId )
    {
        if( is_null(self::$token)){
            self::$token =$token;
        }

        if( is_null(self::$counterId)){
            self::$counterId =$counterId;
        }
    } 


    public function setTime($startTime, $endTime)
    {
        if(is_null(self::$startTime))   self::$startTime    = $startTime; 
        if(is_null(self::$endTime))     self::$endTime      = $endTime; 
    }

    abstract public function getReport();

   
}