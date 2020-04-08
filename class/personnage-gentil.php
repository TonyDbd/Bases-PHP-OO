<?php

    class PersonnageGentil extends Personnage implements PersonnageInterface {

        public function __construct($jeuVideo, $nom, $force, $distanceObjectif = 100)
        {
            parent::__construct($jeuVideo, $nom, $force, $distanceObjectif);
        }

        public function subirAttaque($valeurAttaque) {
            echo('Je subi une attaque de '. $valeurAttaque.'<br>');
            $this->force -= $valeurAttaque;
        }

        public function recevoirSoutien($niveauSoutien){
            $this->force += $niveauSoutien;
        }
    }