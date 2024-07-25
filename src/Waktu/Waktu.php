<?php

namespace Farhanisty\Krsan\Waktu;

class Waktu
{
  public const TOTAL_MINUTE_IN_HOUR = 60;
  private int $hour;
  private int $minute;

  public function __construct(int $hour, int $minute)
  {
    $this->hour = $hour;
    $this->minute = $minute;

    $this->normalize();
  }

  public function getHour(): int
  {
    return $this->hour;
  }

  public function getMinute(): int
  {
    return $this->minute;
  }

  public function move(int $minute): void
  {
    $this->minute += $minute;
    $this->normalize();
  }

  public function normalize(): void
  {
    if ($this->getMinute() > 59) {
      $hour = (int) floor($this->getMinute() / self::TOTAL_MINUTE_IN_HOUR);
      $this->minute = $this->getMinute() % 60;
      $this->hour += $hour;
    }

    if ($this->getHour() > 23) {
      $this->hour = $this->getHour() % 24;
    }
  }

  public function build(): WaktuBuilder
  {
    return new WaktuBuilder(new self($this->getHour(), $this->getMinute()));
  }
}
