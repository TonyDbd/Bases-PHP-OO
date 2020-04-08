<?php
    class JeuxVideo {
        public $personnages;
        public $editor;
        public $animals;

        public function __construct($persos, $animaux){
                $this->personnages = $persos;
                $this->animals = $animaux;
        }
    }
?>