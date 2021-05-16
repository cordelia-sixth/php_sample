<?php
// Menuクラス

class Menu {
  private $name;       // 商品名
  private $price;      // 価格

  public function __construct($name, $price) {
    $this->name = $name;
    $this->price = $price;
  }

  public function getName() {
    return $this->name;
  }

  public function getTaxInPrice() {
    return floor($this->price * 1.1);
  }

  public function getOrderCount() {
    return $this->orderCount;
  }

  public function getTotalPrice($orderCount) {
    return $this->getTaxInPrice() * $orderCount;
  }
}
?>
