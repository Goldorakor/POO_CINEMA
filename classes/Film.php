<?php

class Film {
    private string $_titre;
    private DateTime $_dateSortie;
    private int $_duree;
    private string $_synopsis;
    private Genre $_genre;
    private Realisateur $_realisateur;
    private array $_castings;

// le constructeur de la classe Film
    public function __construct (string $titre, string $dateSortie, int $duree, string $synopsis, Genre $genre, Realisateur $realisateur) {
        $this->_titre = $titre;
        $this->_dateSortie = new DateTime ($dateSortie);
        $this->_duree = $duree;
        $this->_synopsis = $synopsis;
        $this->_genre = $genre;
        $this->_genre->addFilm($this); // à chaque objet film créé, le construct comprend qu'il doiy ranger cet objet, dans le tableau _films de la classe Genre.
        $this->_realisateur = $realisateur;
        $this->_realisateur->addFilm($this); // même principe que pour le cas genre - même logique.
        $this->_castings = []; // tableau vide à la construction
    }
    

    public function getTitre () : string
    {
        return $this->_titre;
    }

    public function setTitre (string $titre)
    {
        $this->_titre = $titre;

        return $this;
    }

    public function getDateSortie () : DateTime
    {
        return $this->_dateSortie;
    }

    public function setDateSortie (string $dateSortie) 
    {
        $this->_dateSortie = new DateTime ($dateSortie);

        return $this;
    }

    public function getDuree () : int
    {
        return $this->_duree;
    }

    public function setDuree (int $duree)
    {
        $this->_duree = $duree;

        return $this;
    }

    public function getSynopsis () : string
    {
        return $this->_synopsis;
    }

    public function setSynopsis (string $synopsis)
    {
        $this->_synopsis = $synopsis;

        return $this;
    }

    public function getGenre () : Genre
    {
        return $this->_genre;
    }

    public function setGenre (string $genre)
    {
        $this->_genre = new Genre ($genre);

        return $this;
    }

    
    public function getFilm () : Realisateur
    {
        return $this->_realisateur;
    }
    
    public function setFilm (string $realisateur)
    {
        $this->_realisateur = new Realisateur ($realisateur);
        
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



    public function afficherCasting () {
        $result = "<h3>Casting du film ".$this->_titre."</h3><ul>"; // $this->prenom héritée de la classe Personne
        foreach ($this->_castings as $casting) {
            $result .= "<li>".$casting->getPersonnage()->getNomHeros()." a été interprété par ".$casting->getActeur()->getPrenom()." ".$casting->getActeur()->getNom()."</li>";
        }
        $result .= "</ul>";
    }



    public function __toString () : string {
        return $this->_titre;
    }


}