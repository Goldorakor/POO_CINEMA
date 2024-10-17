<?php

class CompteBancaire {
    // on déclare nos attributs pour caractériser un compte bancaire lambda
    private string $_libelle;
    private float $_solde;
    private string $_devise;
    private Titulaire $_titulaire;

    // on construit notre fonction __construct
    public function __construct (string $libelle, float $solde, string $devise, Titulaire $titulaire) {
        $this->_libelle = $libelle;
        $this->_solde = $solde;
        $this->_devise = $devise;
        $this->_titulaire = $titulaire;
        $this->_titulaire->addCompteBancaire($this);
    }
