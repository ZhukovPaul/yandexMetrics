<?php 

namespace controller;


class UsersProperty
{
    static private $token = null;
    
    function __construct($token, $counterId )
    {
        if( is_null(self::$token)){
            self::$token =$token;
        }

    } 

    public function counterList()
    {
        $managementClient = new \Yandex\Metrica\Management\ManagementClient(self::$token);
        $params = new \Yandex\Metrica\Management\Models\CountersParams();
        $params
            ->setType(\Yandex\Metrica\Management\AvailableValues::TYPE_SIMPLE)
            ->setField('goals,mirrors,grants,filters,operations');
        $objectCounters = $managementClient
            ->counters()
            ->getCounters($params)
            ->getCounters();

        $cntObjArray = $objectCounters->getAll();
        $result = Array();
        foreach($cntObjArray as $k=>$counterElement)
        {
            $result[$k]["ID"] = $counterElement->getId();
            $result[$k]["NAME"] = $counterElement->getName();
            $result[$k]["SITE"] = $counterElement->getSite();

        }
        return $result;
    }
}

