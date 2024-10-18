<?php

class Casting {
    private Film $_film;
    private Personnage $_personnage;
    private Acteur $_acteur;

    public function __construct (Film $film,Personnage $personnage, Acteur $acteur) {
        $this->_film = $film;
        $this->_personnage = $personnage;
        $this->_acteur = $acteur;
        $this->_film->addCasting($this);
        $this->_personnage->addCasting($this);
        $this->_acteur->addCasting($this);
    }


    public function getFilm ()
    {
        return $this->_film;
    }

    public function setFilm ($_film)
    {
        $this->_film = $_film;

        return $this;
    }

    public function getPersonnage ()
    {
        return $this->_personnage;
    }

    public function setPersonnage ($_personnage)
    {
        $this->_personnage = $_personnage;

        return $this;
    }

    public function getActeur ()
    {
        return $this->_acteur;
    }

    public function setActeur ($acteur)
    {
        $this->_acteur = $acteur;

        return $this;
    }

    // pas de fonction __toString dans cette classe.

}