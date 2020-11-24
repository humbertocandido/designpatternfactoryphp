<?php

namespace Src\IVehicle;

class Moto implements IVehicle
{

    public function road()
    {
        $this->getCargo();
        echo "Iniciando o transporte do documento";
    }

    public function getCargo()
    {
        echo "Pegando os documentos<br/>";
    }
}
