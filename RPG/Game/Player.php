<?php

abstract class Player
{
    /**
     * @var float
     */
    protected $force;

    /**
     * @var float
     */
    protected $life;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var int
     */
    protected $shot =0 ;

    /**
     * @return string
     */
    public function getName():string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getForce():float
    {
        return $this->force;
    }

    /**
     * @param float $force
     */
    public function setForce(float $force)
    {
        $this->force = $force;
    }

    /**
     * @return float
     */
    public function getLife():float
    {
        return $this->life;
    }

    /**
     * @param float $life
     */
    public function setLife(float $life)
    {
        $this->life = $life;
    }

    abstract public function hit();
    abstract public function incrementShot();
    abstract public function getShot():int;

}