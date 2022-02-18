<?php


namespace controller\strategy;

class TotalAttendanceBehavioral extends \controller\ReportStategy
{

    private function getQueryByConst($counterId, $const)
    {
        $paramsObj = new \Yandex\Metrica\Analytics\Models\Params();
        $paramsObj
            ->setMetrics($const)
            ->setStartDate('6daysAgo')      
            ->setEndDate('today')
            ->setIds('ga:' . $counterId );

        $analyticsClient = new \Yandex\Metrica\Analytics\AnalyticsClient( self::$token );
        $data = $analyticsClient->ga()->getGaData($paramsObj);
        $result = $data->getTotalsForAllResults()[$const] ;
        return $result ;
        
    }
    

    public function getReport()
    {
        $result = [];
        //  Количество просмотров
        $result["GA_PAGE_VIEWS"] = round(self::getQueryByConst(self::$counterId, \Yandex\Metrica\Analytics\MetricConst::GA_PAGE_VIEWS ), 2);                          
        //  Количество посетителей
        $result["GA_USERS"] = round(self::getQueryByConst(self::$counterId, \Yandex\Metrica\Analytics\MetricConst::GA_USERS ), 2);                                    
        //  Показатель отказов
        $result["GA_BOUNCE_RATE"] = round(self::getQueryByConst(self::$counterId, \Yandex\Metrica\Analytics\MetricConst::GA_BOUNCE_RATE ), 2);                        
        //  Глубина просмотра
        $result["GA_PAGE_VIEWS_PER_SESSION"] = round(self::getQueryByConst(self::$counterId, \Yandex\Metrica\Analytics\MetricConst::GA_PAGE_VIEWS_PER_SESSION ), 2);  
        //  Количество визитов
        $result["GA_SESSIONS"] = round(self::getQueryByConst(self::$counterId, \Yandex\Metrica\Analytics\MetricConst::GA_SESSIONS ), 2);                              
        //  Длительность визита
        $result["GA_AVG_SESSION_DURATION"] = round(self::getQueryByConst(self::$counterId, \Yandex\Metrica\Analytics\MetricConst::GA_AVG_SESSION_DURATION ), 2);      
        return  $result;
    }
    
}