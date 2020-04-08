<?php

    require_once 'include_interfaces.php';
    require_once 'include_class.php';
    

    $editeur = new Editeur();
    $editeur->nom = 'Natsu';

    $persoGentil = new PersonnageGentil('Dofus', 'Sadida', 10000, 1000);
    $persoMechant = new PersonnageMechant('Dofus', 'Cra', 200, 20, 10, 20);
    $personnages = [$persoGentil, $persoMechant];
    $animalHerbivore = new AnimalHerbivore('Dofus', 'Noomba', 10000, 1000, 5, 5);
    $animalCarnivore = new AnimalCarnivore('Dofus', 'Gaara', 200, 20, 10, 20, 5, 5);
    $animaux = [$animalHerbivore, $animalCarnivore];

    $jeuxVideo = new JeuxVideo($personnages, $animaux);

    $editeur->jeuxVideo = [$jeuxVideo];
    // $jeuxVideo = startGame();

    while ($persoMechant->getForce() > 0 && $persoMechant->getDistanceObjectif()>0 &&
    $persoGentil->getForce() > 0 && $persoGentil->getDistanceObjectif() >0 && $animalCarnivore->getForce() > 0 && $animalCarnivore->getDistanceObjectif() > 0 && $animalHerbivore->getForce() > 0 && $animalHerbivore->getDistanceObjectif() > 0)
    {
        $attaque = $persoMechant->attaquer();
        $attaque = $animalCarnivore->attaquer();

        $persoGentil->subirAttaque($attaque);
        // $animalHerbivore->action($attaque);
        if($soutien = $animalHerbivore->soutien(5)) {
            $persoGentil->recevoirSoutien($soutien);;
        } else {
            $animalHerbivore->subirAttaque($attaque);
        }

        // $soutien = $animalHerbivore->soutien(5);
        // $persoGentil->recevoirSoutien($soutien);

        var_dump($persoGentil);
        var_dump($animalHerbivore);
        var_dump($persoMechant);
        var_dump($animalCarnivore);

        if($persoGentil->getForce() <= 0) {
            echo('Le personnage gentil est mort !!<br> ');
        }
        if($animalHerbivore->getForce() <= 0) {
            echo('L\'animal du gentil est mort !!<br> ');
        }

        if($persoMechant->getForce() <= 0) {
            echo('Le personnage méchant est mort !!<br> ');
        }
        if($animalCarnivore->getForce() <= 0) {
            echo('L\'animal du méchant est mort !!<br> ');
        }
    }

    // var_dump($animalHerbivore);
    // var_dump($persoGentil);
    // $soutien = $animalHerbivore->soutien(5);
    // $persoGentil->recevoirSoutien($soutien);
    // var_dump($animalHerbivore);
    // var_dump($persoGentil);
?>