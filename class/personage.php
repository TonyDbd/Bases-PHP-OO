<?php
    abstract class Personnage {
        private $nom;
        private $jeuVideo;
        protected $force;
        private $distanceObjectif;

        public function __construct($jeuVideo, $nom, $force, $distanceObjectif=100)
        {
            $this->jeuVideo = $jeuVideo;
            $this->nom = $nom;
            $this->force = $force;
            $this->distanceObjectif = $distanceObjectif;
        }

        public function courir(){
            $this->force -= 2;
            $this->distanceObjectif-=10;
        }

        public function marcher() {
            $this->force -= 1;
            $this->distanceObjectif-=2;
        }

        public function sauter() {
            $this->force -= 1;
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