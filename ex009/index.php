<?php
  class Calculator {
    private float $total = 0;
    public function add($number) {
      $this -> total += $number;
    }
    public function sub($number) {
      $this -> total -= $number;
    }
    public function multiply($number) {
      $this -> total *= $number;
    }
    public function divide($number) {
      $this -> total /= $number;
    }
    public function total() {
      return $this -> total;
    }
    public function clear() {
      $this -> total = 0;
    }
  }

  $calc = new Calculator();
  $calc -> add(12);
  $calc -> add(2);
  $calc -> sub(1);
  $calc -> multiply(3);
  $calc -> divide(2);
  $calc -> add(0.5);

  echo '<h1>TOTAL: '.$calc -> total().'</h1>';
  $calc -> clear();
?>