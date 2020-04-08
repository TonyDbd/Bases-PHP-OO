<?php
    abstract class Animal implements AnimalInterface { // abstract sert de model et ne peut être instancier
        public  $nom;
        public $jeuxVideo;
        protected $force;
        private $distanceObjectif;

        public function __construct($jeuVideo, $nom, $force, $distanceObjectif=100)
        {
            $this->jeuVideo = $jeuVideo;
            $this->nom = $nom;
            $this->force = $force;
            $this->distanceObjectif = $distanceObjectif;
        }

        public function courir() {
            $this->force -= 5;
            $this->distanceObjectif-=10;
        }

        public function marcher() {
            $this->force -= 2;
            $this->distanceObjectif-=4;
        }

        public function sauter() {
            $this->force -= 3;
        }

        public function getAllInfo() {
            return $this;
        }

        public function getDistanceObjectif() {
            return $this->distanceObjectif;
        }

        public function getForce() {
            return $this->force;
        }

    }
?>