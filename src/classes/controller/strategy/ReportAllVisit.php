<?php


namespace controller\strategy;

class ReportAllVisit extends \controller\ReportStategy
{
    public function getReport()
    {
        $instance = new \Yandex\Metrica\Stat\StatClient( self::$token );

        $paramsModel = new \Yandex\Metrica\Stat\Models\ByTimeParams();
        $paramsModel
            ->setMetrics(\Yandex\Metrica\Stat\MetricConst::S_HITS)
            ->setId( self::$counterId )
            ->setDate1('6daysAgo')
            ->setDate2('today')
            ->setGroup('day');
        $data = $instance->data()->getByTime($paramsModel);
        
        return $data;
    }
}