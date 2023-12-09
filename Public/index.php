<?php
/*
require_once('../Class/Paypal/Payement.php');
require_once('../Class/Stripe/Payement.php');
require_once('../Class/User/User.php');
*/
/*
spl_autoload_register(function ($class) {
    $path = dirname(__DIR__) . '/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($path)) {
        require $path;
    }
});
*/

require '../vendor/autoload.php';

use \Class\Paypal\Payement as PaymentPaypal;
use Class\Stripe\Payement;
use \Colors\RandomColor;


var_dump(RandomColor::one());


$paymentPaypal = new PaymentPaypal();
$paymentStripe = new Payement();

var_dump($paymentPaypal);
