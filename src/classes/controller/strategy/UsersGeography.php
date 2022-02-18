<?


namespace controller\strategy;


class usersGeography  extends \controller\ReportStategy
{

    public function getReport()
    {
        $paramsObj = new \Yandex\Metrica\Analytics\Models\Params();
        $paramsObj
            ->setMetrics(\Yandex\Metrica\Analytics\MetricConst::GA_USERS)
            ->setStartDate('6daysAgo')
            ->setEndDate('today')
            ->setIds('ga:' . self::$counterId )
            ->setDimensions(\Yandex\Metrica\Analytics\DimensionsConst::GA_CITY);

        $analyticsClient = new \Yandex\Metrica\Analytics\AnalyticsClient(self::$token);
        $data = $analyticsClient->ga()->getGaData($paramsObj);
        
        $resultArray = Array();
        
        foreach ($data->getRows() as $k=>$row) {
            $resultArray["TOTALS"][$k]["CURENT"] = current($row);
            $resultArray["TOTALS"][$k]["END"] = end($row);
        } 

        //  конкретная статистика по каждому городу
        $statClient = new \Yandex\Metrica\Stat\StatClient( self::$token );
        $paramsModel = new \Yandex\Metrica\Stat\Models\TableParams();
        $paramsModel
                    ->setPreset(\Yandex\Metrica\Stat\AvailableValues::PRESET_SOURCES_SUMMARY)
                    ->setId(self::$counterId)
                    ->setDimensions(\Yandex\Metrica\Analytics\DimensionsConst::GA_CITY);
        $data = $statClient->data()->getTable($paramsModel);
         

        $arTables = Array(); 
        
        foreach( $data->getData()->getAll() as $item)
            $resultArray["TABLES"][] =  $item->getMetrics() ;
          
        return $resultArray;
    }
}