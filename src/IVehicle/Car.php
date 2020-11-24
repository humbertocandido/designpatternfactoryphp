<?php

namespace Src\IVehicle;

class Car implements IVehicle
{

    public function road()
    {
        $this->getCargo();
        echo "Iniciando o transporte de passageiros";
    }

    public function getCargo()
    {
        echo "Embarcando os passageiros<br/>";
    }
}
