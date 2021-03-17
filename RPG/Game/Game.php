<?php

class Game
{
    private $player1;
    private $player2;

    /**
     * Game constructor.
     * @param Player $player1
     * @param Player $player2
     *
     * @description on type les arguments avec la classe mère ce qui permet d'injecter les classes des combatants
     */
    public function __construct(Player $player1, Player $player2)
    {
        $this->player1 = $player1;
        $this->player2 = $player2;
    }

    /**
     * @description méthode permettant de lancer le jeu jusqu'à la fin de la bataille
     */
    public function run()
    {
        while ($this->player1->getLife() > 0 and $this->player2->getLife() > 0){
            if(rand(0,1) === 1){
                $damages = round($this->player2->getLife() - $this->player1->getForce(),2);

                $this->player2->setLife($damages);
                $this->player2->incrementShot();
            }else{
                $damages = round($this->player1->getLife() - $this->player2->getForce(),2);

                $this->player1->setLife($damages);
                $this->player1->incrementShot();

            }
        }
    }

    /**
     * @description permet de retourner le nom du gagnant
     * @return string
     */
    public function isWinner(){
        if($this->player1->getLife() > 0 )
            return $this->player1->getName();

        return $this->player2->getName();
    }

}