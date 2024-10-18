<?php

class Personne {
    private string $_nom;
    private string $_prenom;
    private string $_sexe;
    private DateTime $_dateNaissance;

    public function __construct (string $nom, string $prenom, string $sexe, string $dateNaissance) {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_sexe = $sexe;
        $this->_dateNaissance = new DateTime ($dateNaissance);
    }



    public function getNom () : string
    {
        return $this->_nom;
    }

    public function setNom (string $nom)
    {
        $this->_nom = $nom;

        return $this;
    }

    public function getPrenom () : string
    {
        return $this->_prenom;
    }

    public function setPrenom (string $prenom)
    {
        $this->_prenom = $prenom;

        return $this;
    }

    public function getSexe () : string
    {
        return $this->_sexe;
    }

    public function setSexe (string $sexe)
    {
        $this->_sexe = $sexe;

        return $this;
    }

    public function getDateNaissance () : DateTime
    {
        return $this->_dateNaissance;
    }

    public function setDateNaissance (string $dateNaissance)
    {
        $this->_dateNaissance = new DateTime ($dateNaissance);

        return $this;
    }

    public function __toString () : string {
        return $this->_prenom." ".$this->_nom;
    }
}