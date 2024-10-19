<?php

class Genre {
    private string $_genre;
    private array $_films; // pluriel car c'est une collection de films pour chaque objet genre.

    public function __construct (string $genre) {
        $this->_genre = $genre;
        $this->_films = []; // initilisation d'un tableau vide qui se remplira d'objets 'films' du genre souhaité !
    }

 

    public function getGenre () : string
    {
        return $this->_genre;
    }

    public function setGenre (string $genre)
    {
        $this->_genre = $genre;

        return $this;
    }

    public function getFilms () : array
    {
        return $this->_films;
    }

    public function setFilms (array $films) : array
    {
        $this->_films = $films;

        return $this;
    }


    public function addFilm (Film $film) : void {
        $this->_films[] = $film; // on place l'objet '$film' dans le tableau $films (de l'objet 'genre' en cours).
    }


    public function afficherFilmsParGenre () {
        $result = "<h3>Films du genre : $this</h3><ul>";
        foreach ($this->_films as $film) {
            $result .= "<li>".$film->getTitre()."</li>"; // <li>$film</li> fonctionne grâce à __toString de la classe Film
        }
        $result .= "</ul>";
        return $result;
    }


    public function __toString () : string {
        return $this->_genre;
    }
    
}