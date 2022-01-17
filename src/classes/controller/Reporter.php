<?php 

namespace controller;

class Reporter extends \ReporterViewer
{
    protected $strategy;
    private $var = Array();

    function __construct(ReportStategy $strategy)
    {
        $this->strategy = $strategy ;
    }

    // Получение списка счетчиков пользователя
    public function execute()
    {
        $result =  $this->strategy->getReport();
         self::showViews(__CLASS__, Array("ID"=>$counterId,"RESULT"=> $result) ); 
    }
 

}