<?php

class Knight extends Player
{
    protected $name = "Knight";

    public function hit()
    {
        $alea = mt_rand() / mt_getrandmax();

        if ($alea < $this->force) {
            return -1;
        }
    }

    public function incrementShot(){
        $this->shot++;
    }

    public function getShot():int{
        return $this->shot;
    }

}