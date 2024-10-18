<h1>POO Entreprise</h1>


<?php

// require "Entreprise.php";
// require "Employe.php";

spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name .'.php'; // 'classes/' puisque nos fichiers de classe ont été stockés dans le dossier 'classes'
});


$western = new Genre ("western");
$sf = new Genre ("sf");
$policier = new Genre ("policier");

$rea1Rouge = new Realisateur ("Rouge", "Rolf", "masculin", "1980-05-24");
$rea2Bleu = new Realisateur ("Bleu", "Rémi", "masculin", "1998-05-14");
$rea3Vert = new Realisateur ("Vert", "Régine", "féminin", "1992-08-21");

$Acteur1 = new Acteur ("Petit", "Alain", "masculin", "1950-05-24");
$Acteur2 = new Acteur ("Moyen", "Alex", "masculin", "1970-08-20");
$Acteur3 = new Acteur ("Grand", "Anna", "féminin", "1974-12-04");
$Acteur4 = new Acteur ("Géant", "Alan", "masculin", "1978-09-17");
$Acteur5 = new Acteur ("Immense", "Azalée", "féminin", "1984-02-16");
$Acteur6 = new Acteur ("Immense", "Ajax", "masculin", "1995-02-16");

$perso1 = new Personnage ("Hulk"); // SF
$perso2 = new Personnage ("Batman"); // SF
$perso3 = new Personnage ("Catwoman"); // SF
$perso4 = new Personnage ("Commissaire Jean"); // policier
$perso5 = new Personnage ("Buffalo Bill"); // western
$perso6 = new Personnage ("Davy Crockett"); // western
$perso7 = new Personnage ("Geronimo"); // western
$perso8 = new Personnage ("Billy the Kid"); // western
$perso9 = new Personnage ("Jesse James"); // western
$perso10 = new Personnage ("Arsène Lupin"); // policier
$perso11 = new Personnage ("La comtesse"); // policier

$film1 = new Film ("Lupin", "2010-11-20", 120, "un film policier original", $policier, $rea1Rouge);
$film2 = new Film ("Lupin2", "2014-11-10", 122, "un film policier superbe", $policier, $rea1Rouge);
$film3 = new Film ("Meutre au petit matin", "2020-10-23", 128, "un film policier rare", $policier, $rea1Rouge);
$film4 = new Film ("Meutre de la comtesse", "2021-11-02", 126, "un film policier glaçant", $policier, $rea1Rouge);
$film5 = new Film ("La comtesse ressucite", "2022-08-05", 135, "un film policier miraculeux", $sf, $rea1Rouge);

$film6 = new Film ("Hulk, la naissance", "2009-08-02", 127, "un film de sf top", $sf, $rea3Vert);
$film7 = new Film ("Hulk, le retour", "2011-12-02", 160, "un film de sf top", $sf, $rea3Vert);
$film8 = new Film ("Hulk3", "2013-11-04", 110, "un film de sf superbe", $sf, $rea3Vert);
$film9 = new Film ("Hulk4", "2015-08-12", 140, "du grand cinema", $sf, $rea3Vert);
$film10 = new Film ("Hulk5", "2017-05-23", 120, "un film de sf top", $sf, $rea3Vert);

$film11 = new Film ("Le colt d'argent", "1977-11-02", 120, "un western top", $western, $rea2Bleu);
$film12 = new Film ("La chevauchée sauvage", "1982-12-22", 120, "un western top", $western, $rea2Bleu);
$film13 = new Film ("Personne", "2001-11-27", 120, "un grand western", $western, $rea2Bleu);

$casting1 = new Casting ($film1, $perso4, $Acteur2);
$casting2 = new Casting ($film1, $perso10, $Acteur4);

$casting3 = new Casting ($film2, $perso4, $Acteur2);
$casting4 = new Casting ($film2, $perso10, $Acteur4);

$casting5 = new Casting ($film3, $perso4, $Acteur2);
$casting6 = new Casting ($film3, $perso10, $Acteur4);

$casting7 = new Casting ($film4, $perso4, $Acteur2);
$casting8 = new Casting ($film4, $perso10, $Acteur4);
$casting9 = new Casting ($film4, $perso11, $Acteur5);

$casting11 = new Casting ($film5, $perso10, $Acteur4);
$casting12 = new Casting ($film5, $perso11, $Acteur5);


$casting13 = new Casting ($film6, $perso1, $Acteur1);
$casting14 = new Casting ($film6, $perso2, $Acteur3);
$casting15 = new Casting ($film6, $perso3, $Acteur4);

$casting17 = new Casting ($film7, $perso1, $Acteur1);
$casting18 = new Casting ($film7, $perso2, $Acteur3);
$casting19 = new Casting ($film7, $perso3, $Acteur4);

$casting17 = new Casting ($film8, $perso1, $Acteur1);
$casting18 = new Casting ($film8, $perso2, $Acteur3);
$casting19 = new Casting ($film8, $perso3, $Acteur4);

