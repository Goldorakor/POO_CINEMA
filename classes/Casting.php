<?php

class Casting {
    private Film $_film;
    private Personnage $_personnage;
    private Acteur $_acteur;

    public function __construct (Film $film,Personnage $personnage, Acteur $acteur) {
        $this->_film = $film;
        $this->_personnage = $personnage;
        $this->_acteur = $acteur;
        $this->_film->addCasting($this); // on appelle la méthode addCasting de la classe Film pour placer cet objet $casting dans le tableau $castings de l'objet $film (qui est lui-même attribut de cet objet $casting)
        $this->_personnage->addCasting($this);
        $this->_acteur->addCasting($this);
    }


    public function getFilm ()
    {
        return $this->_film;
    }

    public function setFilm (Film $film)
    {
        $this->_film = $film;

        return $this;
    }

    public function getPersonnage ()
    {
        return $this->_personnage;
    }

    public function setPersonnage (Personnage $personnage)
    {
        $this->_personnage = $personnage;

        return $this;
    }

    public function getActeur ()
    {
        return $this->_acteur;
    }

    public function setActeur (Acteur $acteur)
    {
        $this->_acteur = $acteur;

        return $this;
    }

    // pas de fonction __toString dans cette classe.

}