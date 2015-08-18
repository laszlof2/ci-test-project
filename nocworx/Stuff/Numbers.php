<?php

namespace NocWorx\Stuff;

class Numbers {
  private $_one = 1;
  private $_two = 2;
  private $_three = 3;
  private $_four = 4;
  private $_five = 5;
  private $_six = 6;
  private $_seven = 7;
  private $_eight = 8;
  private $_nine = 9;
  private $_ten = 11;

  public function getOne() {
    return $this->_one;
  }
  public function getTwo() {
    return $this->_two;
  }
  public function getThree() {
    return $this->_three;
  }
  public function getFour() {
    return $this->_four;
  }
  public function getFive() {
    return $this->_five;
  }
  public function getSix() {
    return $this->_six;
  }
  public function getSeven() {
    return $this->_seven;
  }
  public function getEight() {
    return $this->_eight;
  }
  public function getNine() {
    return $this->_nine;
  }
  public function getTen() {
    return $this->_ten;
  }
  public function set($key, $num) {
    $key = "_".$key;
    $this->{$key} = $num;
  }
}
