<?php

class Realisateur extends Personne {
    private array $_films;

    public function __construct (string $nom, string $prenom, string $sexe, string $dateNaissance) {
        parent::__construct($nom, $prenom, $sexe, $dateNaissance);
        $this->_films = [];
    }

    public function addFilm (Film $film) : void {
        $this->_films[] = $film; // on place l'objet $film de la classe Film dans le tableau $films (de l'objet 'genre' en cours).
    }

    public function afficherFilmsParRealisateur () {
        $result = "<h3>Films du réalisateur ".$this->getPrenom()." ".$this->getNom()."</h3><ul>"; //  Films du réalisateur $this fonctionne aussi
        foreach ($this->_films as $film) {
            $result .= "<li>".$film->getTitre()."</li>"; // <li>$film</li> fonctionne grâce à __toString de la classe Film
        }
        $result .= "</ul>";
        return $result;
    }

}

// je ne construis pas les getters et les setters, la fonction __toString car ils sont hérités de la classe Personne.