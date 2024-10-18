<?php

class Acteur extends Personne {
    private array $_castings;

    public function __construct (string $nom, string $prenom, string $sexe, string $dateNaissance) {
        parent::__construct ($nom, $prenom, $sexe, $dateNaissance);
        $this->_castings = []; // tableau vide à la construction
    }


    public function getCastings () : array
    {
        return $this->_castings;
    }
    
    public function setCastings ($castings)
    {
        $this->_castings = $castings;
        
        return $this;
    }

    public function addCasting (Casting $casting) {
        $this->_castings[] = $casting; // on remplit le tableau _castings avec un objet '$casting'
    }


    public function afficherFilmographie () {
        $result = "<h3>Filmographie de ".$this->prenom." ".$this->nom."</h3><ul>"; // $this->prenom héritée de la classe Personne
        foreach ($this->_castings as $casting) {
            $result .= "<li>".$casting->getFilm ()->getTitre ()."</li>";
        }
        $result .= "</ul>";
    }


}

// je ne construis pas les getters et les setters, la fonction __toString car ils sont hérités de la classe Personne.