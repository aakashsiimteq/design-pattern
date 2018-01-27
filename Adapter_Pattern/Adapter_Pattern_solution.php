<?php

// Concrete Implementation of PayPal Class
class PayPal {

    public function __construct() {
        // Your Code here //
    }

    public function sendPayment($amount) {
        // Paying via Paypal //
        echo "Paying via PayPal: ". $amount;
    }
}

//Simple interface for each adapter we created

 interface PaypalInterface
 {
   public function pay($amount);
 }

class paypalAdapter implements PaypalInterface
{
  public $paypal;
  function __construct(Paypal $paypal)
  {
    $this->paypal = $paypal;
  }

  public function pay($amount)
  {
    $this->paypal->sendPayment($amount);
  }
}

$paypal = new paypalAdapter(new PayPal());
$paypal->pay('2629');
