<?php

use Class\CoffeeMachine;
use Class\PremiumCoffeeMachine;

require '../vendor/autoload.php';

$coffeeMachine = new PremiumCoffeeMachine(10);
$coffeeMachine->select('vanilla');
