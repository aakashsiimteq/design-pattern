<?php
// Class to pay using Credit Card
class payByCC {

    private $ccNum = '';
    private $ccType = '';
    private $cvvNum = '';
    private $ccExpMonth = '';
    private $ccExpYear = '';

    public function pay($amount = 0) {
        echo "Paying ". $amount. " using Credit Card";
    }

}

// Class to pay using PayPal
class payByPayPal {

    private $payPalEmail = '';

    public function pay($amount = 0) {
        echo "Paying ". $amount. " using PayPal";
    }

}

// This code needs to be repeated every place where ever needed.
$amount  = 5000;
if($amount >= 500) {
    $pay = new payByCC();
    $pay->pay($amount);
} else {
    $pay = new payByPayPal();
    $pay->pay($amount);
}
