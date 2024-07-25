<?php

namespace Farhanisty\Krsan\Waktu;

use PHPUnit\Framework\TestCase;

final class WaktuTest extends TestCase
{
  public function testGetHour()
  {
    $waktu = new Waktu(10, 0);
    $this->assertSame(10, $waktu->getHour());
  }

  public function testGetMinute()
  {
    $waktu = new Waktu(10, 20);
    $this->assertSame(20, $waktu->getMinute());
  }

  public function testMove()
  {
    $waktu = new Waktu(10, 30);
    $waktu->move(30);
    $this->assertSame(11, $waktu->getHour());
    $this->assertSame(0, $waktu->getMinute());
  }

  public function testBuild()
  {
    $waktu = new Waktu(10, 0);
    $waktuBuilder = $waktu->build();

    $this->assertInstanceOf(WaktuBuilder::class, $waktuBuilder);
  }
}
