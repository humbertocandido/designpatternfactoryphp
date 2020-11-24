<?php

namespace Src;

use Src\IVehicle\Car;
use Src\IVehicle\IVehicle;

class CarTransporte extends Transporte
{

    public function criandoTransporte(): IVehicle
    {
        return new Car();
    }
}
