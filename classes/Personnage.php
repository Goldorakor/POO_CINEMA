<?php

class Personnage {
    private string $_nomHeros;
    private array $_castings;

// le constructeur de la classe Film
    public function __construct (string $nomHeros) {
        $this->_nomHeros = $nomHeros;
        $this->_castings = []; // tableau vide à la construction
    }


    public function getNomHeros () : string
    {
        return $this->_nomHeros;
    }


    public function setNomHeros (string $_nomHeros)
    {
        $this->_nomHeros = $_nomHeros;

        return $this;
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


    public function afficherListeActeurs () {
        $result = "<h3>Liste des acteurs ayant interprété  ".$this->_nomHeros." au cinéma</h3><ul>"; // $this->prenom héritée de la classe Personne
        foreach ($this->_castings as $casting) {
            $result .= "<li>".$casting->getActeur()->getPrenom()." ".$casting->getActeur()->getNom()." dans le film ".$casting->getFilm()->getTitre()."</li>";
        }
        $result .= "</ul>";
        return $result;
    }


    public function __toString () : string {
        return $this->_nomHeros;
    }
    
}