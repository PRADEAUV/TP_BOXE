<?php
Class Challenger
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
       
    }
    public function GetStamina()
    {
        return  $this->stamina;
    }

}

$boxer2=new Challenger("Noob",20500,100,1621);


echo $boxer2->getName(). "\n";
echo $boxer2->getStamina(). "\n";
echo $boxer2->getSpeed(). "\n";
echo $boxer2->getstrength(). "\n";

echo"**************************************\n";

?>