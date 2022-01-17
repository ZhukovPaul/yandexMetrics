<?

namespace controller\strategy;

class sourceDummary extends \controller\ReportStategy
{
    public function getReport()
    {   
        $result = [];
        $result["TOTALS"]= $this->getReportInTotal();
        $result["TABLES"] = $this->getReportInTable();
        return $result;
    }

    private function getReportInTotal()
    {
         $statClient = new \Yandex\Metrica\Stat\StatClient( self::$token );
        $paramsModel = new \Yandex\Metrica\Stat\Models\ComparisonParams();
        $paramsModel
            ->setMetrics(\Yandex\Metrica\Stat\MetricConst::S_VISITS)
            ->setId(self::$counterId)
            ->setDimensions(\Yandex\Metrica\Stat\DimensionsConst::S_TRAFFIC_SOURCE);
        $data = $statClient->data()->getComparisonSegments($paramsModel);
        
        
        $result = [];
        foreach( $data->getData()->getAll() as $comparisonItem){

            foreach( $comparisonItem->getDimensions()->getAll() as $prop )
                $propName = $prop->getName() ;   
            
            $result[$propName] = $comparisonItem->getMetrics()->getB()[0];
        }
        return $result;
    }

    private function getReportInTable()
    {
        $paramsModel = new \Yandex\Metrica\Stat\Models\TableParams();
        $paramsModel
                    ->setPreset(\Yandex\Metrica\Stat\AvailableValues::PRESET_SOURCES_SUMMARY)
                    ->setId(self::$counterId)
                    ->setDimensions(\Yandex\Metrica\Stat\DimensionsConst::S_TRAFFIC_SOURCE);
        $data = $statClient->data()->getTable($paramsModel);
        $totals = $data->getTotals();

        $result = [];
        foreach( $data->getData()->getAll() as $item){
            $result[] =  $item->getMetrics() ;
        }
        
        return $result;
    }
}

