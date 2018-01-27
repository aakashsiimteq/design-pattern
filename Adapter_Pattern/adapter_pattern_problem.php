<?php
class PayPal {

    public function __construct() {
        // Your Code here //
    }

    public function sendPayment($amount) {
        // Paying via Paypal //
        echo "Paying via PayPal: ". $amount;
    }
}

$paypal = new PayPal();
$paypal->sendPayment('2629');
