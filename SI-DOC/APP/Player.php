<?php

/**
 * Player class for Map
 */

 class Player extends Place
 {

    /**
     * Player health points
     * 
     * @var int
     */
    private $HP;

    /**
     * Player Síla
     * 
     * @var int
     * 
     */
    private $strength;

    /**
     * Player Charisma
     * 
     * @var int
     * 
     * 
     */
    private $Charisma;

    /**
     * 
     * Player´s Intelligence
     * 
     * @var int
     * 
     * 
     */
    private $Intelligence;

    /**
     * Player Spawner and Constructor
     * 
     * @param float $x X-pozice
     * @param float $y Y-pozice
     */
    public function __construct(float $x, float $y, int $hp, int $strength, int $Charisma, int $Intelligence,)  
    {
        parent::__construct($x, $y);
        $this->setHP($HP);
        $this->setStrenght($strength);
    }

    
 }
?>