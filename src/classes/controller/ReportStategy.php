<?php 

namespace  controller;

abstract class ReportStategy
{

    static private $startTime   = null;
    static private $endTime     = null;
    static private $token = null;
    static private $counterId = null; 

    function __construct($token, $counterId )
    {
        //  сохраняем токен для дальнейшего использования
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

    //abstract public function getReportAllVisit( $counterId );
    //abstract public function totalAttendanceBehavioral($counterId);
}