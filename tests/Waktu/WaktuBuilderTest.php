<?php

namespace Farhanisty\Krsan\Waktu;

use PHPUnit\Framework\TestCase;

class WaktuBuilderTest extends TestCase
{
  public function testGet()
  {
    $waktuBuilder = new WaktuBuilder(new Waktu(10, 0));
    $waktu = $waktuBuilder->get();

    $this->assertSame(10, $waktu->getHour());
    $this->assertSame(0, $waktu->getMinute());
  }

  public function testAddHour()
  {
    $waktuBuilder = new WaktuBuilder(new Waktu(10, 0));
    $waktuBuilder->addHour(2);

    $this->assertSame(12, $waktuBuilder->get()->getHour());
  }

  public function testAddMinute()
  {
    $waktuBuilder = new WaktuBuilder(new Waktu(10, 0));
    $waktuBuilder->addMinute(90);

    $waktu = $waktuBuilder->get();

    $this->assertSame(11, $waktu->getHour());
    $this->assertSame(30, $waktu->getMinute());
  }
}
