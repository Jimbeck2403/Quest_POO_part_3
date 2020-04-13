<?php

require_once('HighWay.php');
require_once('Vehicle.php');

 final class MotorWay extends HighWay
{

    const NB_LANE = 4;
    const MAX_SPEED = 130;
    const AUTHORIZED_VEHICLES=['car', 'truck', 'bus'];

    public function __construct()
    {
        parent::setMaxSpeed(self::MAX_SPEED);
        parent::setNbLane(self::NB_LANE);

    }

    function addVehicle($vehicle)
    {
        if (in_array($vehicle->getType(), self::AUTHORIZED_VEHICLES )) {

            $this->currentVehicles[] = $vehicle;
        }
        else {
            echo 'Unauthorized vehicle';
        }

    }
}