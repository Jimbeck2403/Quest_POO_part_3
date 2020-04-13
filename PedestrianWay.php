<?php

require_once('HighWay.php');
require_once ('Vehicle.php');

final class PedestrianWay extends HighWay
{
    const NB_LANE = 1;
    const MAX_SPEED = 10;
    const AUTHORIZED_VEHICLES=['bike', 'skateboard'];

    public function __construct()
    {
        parent::setMaxSpeed(self::MAX_SPEED);
        parent::setNbLane(self::NB_LANE);

    }


    function addVehicle($vehicle)
    {
        if (in_array($vehicle->getType(), self::AUTHORIZED_VEHICLES )) {
            $this->currentVehicles[] = $vehicle;
        } else {
            echo 'Unauthorized vehicle';
        }
    }
}
