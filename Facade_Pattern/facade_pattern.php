<?php

  /**
   *
   */
class productOrderFacade
{
  public $productId = '';
  function __construct($productId)
  {
    $this->productId = $productId;
  }
  public function generateOrder()
  {
    if ($this->qtyCheck() > 0) {
      // Add product to cart
      $this->addToCart();

      //Calculate Shipping Charge
      $this->calulateShipping();

      // Calculate Discount
      $this->applyDiscount();

      // Place and confirm order
      $this->placeOrder();
    }else {
      var_dump('Quantity is less than 0');
    }
  }

  public function addToCart()
  {
    # add your code logic...
  }

  public function qtyCheck()
  {
    $qty = '0';
    if ($qty > 0) {
      return true;
    }else {
      return false;
    }
  }
  private function calulateShipping() {
      $shipping = new shippingCharge();
      $shipping->calculateCharge();
  }

  private function applyDiscount() {
      $discount = new discount();
      $discount->applyDiscount();
  }

  private function placeOrder() {
      $order = new order();
      $order->generateOrder();
  }
}

// Note: We should not use direct get values for Database queries to prevent SQL injection
$productID = '1234';

// Just 2 lines of code in all places, instead of a lengthy process everywhere
$order = new productOrderFacade($productID);
$order->generateOrder();
