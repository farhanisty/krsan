<?php

namespace Farhanisty\Krsan\Waktu;

class WaktuBuilder
{
  private Waktu $waktu;

  public function __construct(Waktu $waktu)
  {
    $this->waktu = $waktu;
  }

  public function addMinute(int $minute): self
  {
    $this->waktu->move($minute);
    return $this;
  }

  public function addHour(int $hour): self
  {
    $this->waktu->move($hour * Waktu::TOTAL_MINUTE_IN_HOUR);
    return $this;
  }

  public function get(): Waktu
  {
    return $this->waktu;
  }
}
