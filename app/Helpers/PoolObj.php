<?php
namespace App\Helpers;

use App\Models\Master;
use App\Models\Office;
use App\Models\Type;
use App\Models\Backend\Manifacture;
use App\Models\Place;

class PoolObj
{
    public static $pool = [];


    public static function getSome($name)
    {
        $typeObj = new Type();
        $masterObj = new Master();
        $officeObj = new Office();
        $manifactureObj = new Manifacture();
        $placeObj = new Place();
        
        self::$pool['typeObj'] = $typeObj;
        self::$pool['officeObj'] = $officeObj;
        self::$pool['masterObj'] = $masterObj;
        self::$pool['manifactureObj'] = $manifactureObj;
        self::$pool['placeObj'] = $placeObj;

        return self::$pool[$name];
    }

}