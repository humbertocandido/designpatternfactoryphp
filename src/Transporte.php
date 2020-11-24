<?php

namespace Src;

use Src\IVehicle\IVehicle;

abstract class Transporte
{

    public function iniciandoTransporte()
    {
        $transporte = $this->criandoTransporte();
        $transporte->road();
    }

    protected abstract function criandoTransporte(): IVehicle;
}
