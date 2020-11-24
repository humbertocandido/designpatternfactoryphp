<?php

namespace Src;

use Src\IVehicle\Bike;
use Src\IVehicle\IVehicle;

class BikeTransporte extends Transporte
{
    public function criandoTransporte(): IVehicle
    {
        return new Bike();
    }
}
