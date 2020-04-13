<?php

require_once('HighWay.php');
require_once ('Vehicle.php');

final class ResidentialWay extends HighWay
{
    private const NB_LANE = 2;
    private const MAX_SPEED = 50;
    private const AUTHORIZED_VEHICLES=['bike', 'skateboard', 'car', 'truck', 'bus'];

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