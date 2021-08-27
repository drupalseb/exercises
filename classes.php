<?php
class time
{
  public const DEFAULT_TIME_ZONE = "Europe/Warsaw";
  /**
   * @var $currentTime - zmienna przechowująca aktualny czas względem  DEFAULT_TIME_ZONE
   */
  public $currentTime;
  public $futureTime;
  public $timeZoneB;


  public function __construct($timeZone=self::DEFAULT_TIME_ZONE) {
    $this->timeZoneB = $timeZone;
    date_default_timezone_set($this->timeZoneB);
   $this->currentTime = $this->getCurrentTime();
  }
public function __toString () {
    return $this->currentTime;
}
public function setTimeZone(){
    if ($this->timeZoneB != date_default_timezone_get())
      date_default_timezone_set($this->timeZoneB);
}

  public function setFutureTime($days,$pattern = "H:i:s d M Y")
  {
    $this->setTimeZone();
    $this->futureTime = date($pattern, strtotime("+". $days. "days"));
    return $this->futureTime;
  }

  public function getCurrentTime($pattern = "H:i:s d M Y")
  {
    $this->setTimeZone();
    $this->currentTime = date($pattern,time());
    return $this->currentTime;
  }
}
