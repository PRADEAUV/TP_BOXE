<?php
Class Ippo
{
    public $name;
    public $strength;
    public $stamina;
    public $speed;

    public function __construct($name,$stamina,$speed,$strength)
    {
        $this->setName($name);
        $this->setStamina($stamina);
        $this->setstrength($strength);
        $this->setSpeed($speed);
    }

    public function setName($arg)
    {
        if (is_string($arg)) 
        {
              $this->name=$arg;
        }
        else false;
    }

    public function GetName()
    {
        return  $this->name;
    }

    public function setstrength($arg)
    {
        if (is_int($arg)) 
        {
             $this->strength=$arg;
         }
         else false;
    }
    public function Getstrength()
    {
        return  $this->strength;
    }

    public function setSpeed($arg)
    {
        if (is_int($arg))
        {
             $this->speed=$arg;
        }
        else false;
    }
    public function GetSpeed()
    {
        return  $this->speed;
    }

    public function setStamina($arg)
    {
        if (is_int($arg))
        {
             $this->stamina=$arg;
        }
        else false;
    }
    public function GetStamina()
    {
        return  $this->stamina;
    }

}

$boxer1=new Ippo("Ippo",20762,90,1721);


echo $boxer1->getName(). "\n";
echo $boxer1->getStamina(). "\n";
echo $boxer1->getSpeed(). "\n";
echo $boxer1->getstrength(). "\n";
 

echo"**************************************\n";

?>