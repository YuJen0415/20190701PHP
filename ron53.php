<?php
class Bike
{
    protected $speed = 0;       //private 只有自己用 protect 繼承的可以用
    function upSpeed()
    {
        $this->speed = $this->speed < 1 ? 1 : $this->speed * 1.2;
    }

    function downSpeed()
    {
        $this->speed = $this->speed < 1 ? 0 : $this->speed * 0.7;
    }
    function getSpeed()
    {
        return $this->speed;
    }
}

class Scooter extends Bike
{
    // override
    private $gear;
    function upSpeed()
    {
        parent::upSpeed();
    }
    function upSpeedV2() {
        $this->speed = $this->speed < 1 ? 2 : $this->speed * ($this->gear*2);
    }
    function chGear($gear){$this->$gear = $gear;}
}

class person{
    private $myBike;
    private $myScooter;
    private $myName;

    // 建構子
    function __construct($name)
    {
        $this->myBike = new Bike;
        $this->myScooter = new Scooter;
        $this->myName = $name;
    }
}

$b1 = new Bike;
$b2 = new Bike;
$s1 = new Scooter;

$count1 = 0;
$count2 = 0;

while ($b1->getSpeed() < 10) {
    $b1->upSpeed();
    $count1++;
}

echo $b1->getSpeed() . "<br>";
echo $count1;
