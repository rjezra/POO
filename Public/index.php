<?php

use Class\Enums\OfficeStatus;
use Class\OfficeReservation;
use Class\Reservation;

require '../vendor/autoload.php';

$reservation = new OfficeReservation();

if (OfficeStatus::APPROVAL_PEDING === $reservation->status) echo 'en attent !!';
