<?php

    class AnimalCarnivore extends Animal implements AnimalInterface {
        private $forceAttaqueGriffe;
        private $forceAttaqueMorssure;

        public function __construct($jeuVideo, $nom, $force, $distanceObjectif = 100, $forceAttaqueGriffe, $forceAttaqueMorssure)
        {
            parent::__construct($jeuVideo, $nom, $force, $distanceObjectif);
            $this->forceAttaqueMorssure = $forceAttaqueMorssure;
            $this->forceAttaqueGriffe = $forceAttaqueGriffe;
        }

        public function attaquer(){
            $this->force -= 10;
            echo('je lance une attaque<br>');
            return rand($this->forceAttaqueGriffe, $this->forceAttaqueMorssure);
        }
    }