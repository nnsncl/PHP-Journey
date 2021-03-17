<?php

class Light
{
    private $state = 'Off';

    public function turn()
    {
        $this->state === 'Off' ? $this->state = 'On' : $this->state = 'Off';
    }
    
    public function getState(){
        return $this->state;
    }
}