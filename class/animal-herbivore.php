<?php

    class AnimalHerbivore extends Animal implements AnimalInterface {
        private $soutien;
        private $esquive;

        public function __construct($jeuVideo, $nom, $force, $distanceObjectif = 100, $soutien, $esquive)
        {
            parent::__construct($jeuVideo, $nom, $force, $distanceObjectif);
            $this->soutien = $soutien;
            $this->esquive = $esquive;
        }

        public function subirAttaque($valeurAttaque) {
            echo('Je subi une attaque de '. $valeurAttaque.'<br>');
            $this->force -= $valeurAttaque;
        }

        public function soutien($valeurSoutien) {
            echo('Je soutien mon compagnon '. $valeurSoutien.'<br>');
            $this->force -= $valeurSoutien;
            return 5;
        }

        public function esquive(){
            $this->force -= 5;
            echo('je lance une esquive <br>');
        }

        public function action($action){
            return rand($this->soutien, $this->esquive);
        }
    }