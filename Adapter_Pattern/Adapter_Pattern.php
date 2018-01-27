<?php

  // concrete implement of the paytm class
  class Paytm
  {

    function __construct()
    {
      # some constructor code implementation here
    }

    public function sendMoney($amount)
    {
      echo "Paytm transaction amount: ". $amount;
    }
  }

  /**
   * paytm interface
   */
  interface paytmInterface
  {
    public function payMoney($amount);
  }

  /**
   *  paytm Adapter wrapping around the paytm class
   */
  class paytmAdapter implements paytmInterface
  {
    public $paytm;

    function __construct(Paytm $paytm)
    {
      $this->paytm = $paytm;
    }

    public function payMoney($amount)
    {
      $this->paytm->sendMoney($amount);
    }
  }

  $paytms = new paytmAdapter(new Paytm);
  $paytms->payMoney('1200');
