<?php

namespace demo\verse1;
/**
 * Abstract class Place
 */
    abstract class Place implements Map
{
    /**
    * x place position
    * 
    * @var float
    */
    protected $x;

    /**
    * y place position
    * 
    * @var float
    * 
    */
    protected $y;

    /**
    * place constructor
    * 
    * @param float $x x-position
    * @param float $y y-position
    */
    public function __construct(float $x, float $y)
    {
    $this->setPos($x, $y);
    }

    /**
     * Set 2D-position of Place
     * @param float $x x-position
     * @param float $y y-position
     * @return void
     */
    public function setPos(float $x, float $y): void
    {
    $this->x =$x;
    $this->y =$y;
    }

    /**
    * getX Funkce
    * @return float x-position
    *  
    */
    public function getX(): float
    {
    return $this->x;
    }
    /**
    * GetY funkce
    * @return float y-position
    * 
    */
    public function getY(): float
    {
    return $this->y;
    }
    /**
    * Výpočet Vzdálenosti k Place
    * 
    * @param Map $map
    * @return float distance
    * 
    */
    public function getDistance(Map $map): float
    {
        return sqrt(
            pow(
                abs($this->getX() - $map->getX()),
                2
            ) + pow(
                abs($this->getY() - $map->getY()),
                2
            )
        );
    }
}
?>