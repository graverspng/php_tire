<?php

class Train {
    public $brand;
    public $trackGauge;
    private $mileage;

    public function __construct($brand, $trackGauge){
        $this->brand = $brand;
        $this->trackGauge = $trackGauge;
    }

    public function __destruct(){
        echo "$this->brand is dead at mileage $this->trackGauge ";
    }
    public function increaseMileage($amount){
        $this->brand += $amount;
    }
    public static function makeNoice(){
        echo " Beep, beep!";
    }
}

