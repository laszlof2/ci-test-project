<?php

class NumbersTest extends PHPUnit_Framework_TestCase {
  
  public function testGetOne() {
    $num = new \NocWorx\Stuff\Numbers();
    $this->assertEquals(1, $num->getOne());
  }

  public function testGetTwo() {
    $num = new \NocWorx\Stuff\Numbers();
    $this->assertEquals(2, $num->getTwo());
  }

  public function testGetThree() {
    $num = new \NocWorx\Stuff\Numbers();
    $this->assertEquals(3, $num->getThree());
  }

  public function testGetFour() {
    $num = new \NocWorx\Stuff\Numbers();
    $this->assertEquals(4, $num->getFour());
  }

  public function testGetFive() {
    $num = new \NocWorx\Stuff\Numbers();
    $this->assertEquals(5, $num->getFive());
  }

  public function testGetSix() {
    $num = new \NocWorx\Stuff\Numbers();
    $this->assertEquals(6, $num->getSix());
  }

  public function testGetSeven() {
    $num = new \NocWorx\Stuff\Numbers();
    $this->assertEquals(7, $num->getSeven());
  }

  public function testGetEight() {
    $num = new \NocWorx\Stuff\Numbers();
    $this->assertEquals(8, $num->getEight());
  }

  public function testGetNine() {
    $num = new \NocWorx\Stuff\Numbers();
    $this->assertEquals(9, $num->getNine());
  }

  public function testGetTen() {
    $num = new \NocWorx\Stuff\Numbers();
    $this->assertEquals(10, $num->getTen());
  }
}
