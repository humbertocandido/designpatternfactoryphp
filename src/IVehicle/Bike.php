<?php

namespace Src\IVehicle;

class Bike implements IVehicle
{
    public function road()
    {
        $this->getCargo();
        echo "Iniciando o transporte na ciclovia.";
    }

    public function getCargo()
    {
        echo "Pegando a comida<br/>";
    }
}
