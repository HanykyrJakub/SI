<?php
/**
 * Interface Mapy pro všechny hráče a místa
 */
interface Map
{
    /**
     * Set the position of place
     * 
     * @param float $x x-pozice
     * @param float $y y-pozice
     * @return void
     */
    public function setPos(float $x, float $y): void;

    /**
     *  X pozice
     * 
     * @return float x pozice
     */
    public function getX(): float;

    /**
     * y-pozice
     * 
     * @return float y-pozice
     * 
     */
    public function getY(): float;
}

?>