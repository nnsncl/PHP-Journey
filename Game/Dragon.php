<?php

class Dragon extends Player
{
    protected $name = "Dragon";

    public function hit()
    {
        $alea = mt_rand() / mt_getrandmax();

        if ($alea < $this->force) {
            return -1;
        }else{
            return -0.05;
        }
    }

    public function incrementShot(){
        $this->shot++;
    }

    public function getShot():int{
        return $this->shot;
    }

}