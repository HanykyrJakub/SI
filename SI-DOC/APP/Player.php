<?php
/**
 * Player class for Map
 */
    namespace demo\verse1;
    
 class Player extends Place
 {
    /**
     * Player health points
     * 
     * @var int
     */
    private $HP;
    /**
     * Set Player health points
     * 
     * @return int player
     */
    public function getHP(int $HP)
    {
        $this->hp = $HP > 0 ? $HP : 0;
    }
    /**
     * Player Síla
     * 
     * @var int
     * 
     */
    private $strength;
    /**
     * Get player strength
     *
     * @return  int player strength
     */
    public function setStrength(): int
    {
        return $this->strength;
    }

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
     * Set Player health points
     *
     * @param int  $HP  Enemy health points
     * @return void
     */
    public function setHp(int $HP): void
    {
        $this->hp = $HP > 0 ? $HP : 0;
    }
    /**
     * set Player Agility
     * 
     * @param int $Agility
     */
    /**
     * Player Spawner and Constructor
     * 
     * @param float $x X-pozice
     * @param float $y Y-pozice
     */
    function __construct(float $x, float $y, int $hp, int $strength, int $Charisma, int $Intelligence,)  
    {
        parent::__construct($x, $y);
        $this->setHP($hp);
        $this->setStrength($strength);
    }

    
 }
?>