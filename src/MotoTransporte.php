<?php

namespace Src;

use Src\IVehicle\IVehicle;
use Src\IVehicle\Moto;

class MotoTransporte extends Transporte
{
    public function criandoTransporte(): IVehicle
    {
        return new Moto();
    }
}
