<h1>POO Entreprise</h1>


<?php

// require "Entreprise.php";
// require "Employe.php";

spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name .'.php'; // 'classes/' puisque nos fichiers de classe ont été stockés dans le dossier 'classes'
});

// je crée 3 objets 'genre' de la classe Genre - classe qui n'embarque aucune autre classe.
$western = new Genre ("western");
$sf = new Genre ("sf");
$policier = new Genre ("policier");

// les deux classes suivantes : classe Realisateur et classe Acteur sont des classes héritées de la classe Personne : c'est elles qui peuvent générer des instances, et non la classe Personne.

// je crée 3 objets 'realisateur' de la classe Realisateur - classe qui n'embarque aucune autre classe.
$rea1Rouge = new Realisateur ("Rouge", "Rolf", "masculin", "1980-05-24"); // il réalise des films 'policier' et un seul film classé sf
$rea2Bleu = new Realisateur ("Bleu", "Rémi", "masculin", "1998-05-14"); // il réalise les westerns
$rea3Vert = new Realisateur ("Vert", "Régine", "féminin", "1992-08-21"); // il réalise les flms de la série Hulk, classés en sf

// je crée 8 objets 'acteur' de la classe Acteur - classe qui n'embarque aucune autre classe.
$acteur1 = new Acteur ("Petit", "Alain", "masculin", "1950-05-24");
$acteur2 = new Acteur ("Moyen", "Alex", "masculin", "1970-08-20");
$acteur3 = new Acteur ("Grand", "Anna", "féminin", "1974-12-04");
$acteur4 = new Acteur ("Géant", "Alan", "masculin", "1978-09-17");
$acteur5 = new Acteur ("Immense", "Azalée", "féminin", "1984-02-16");
$acteur6 = new Acteur ("Immense", "Ajax", "masculin", "1995-02-16");
$acteur6 = new Acteur ("Mini", "Amerlock", "masculin", "2010-02-16"); // joue Capitaine America uniquement dans un film
$acteur7 = new Acteur ("Micro", "Anneliese-Strong", "féminin", "2010-02-16"); // femme qui joue le rôle de Hul à la mort de $Acteur1 en plein film ! 
$acteur8 = new Acteur ("Minusse", "Komtesse", "féminin", "2020-04-17"); // enfant qui joue la comtesse jeune dans le film $film4

// je crée 13 objets 'personnage' de la classe Personnage - classe qui n'embarque aucune autre classe.
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
$perso12 = new Personnage ("Captain America"); // SF
$perso13 = new Personnage ("Comtesse jeune"); // policier

// les classes suivantes embarquent d'autres classes pour leur création : elles ont besoin que les classes précédentes (au moins certaines des classes précédentes) existent pour pouvoir être créer.

// je crée 13 objets 'film' de la classe Film - classe qui embarque la classe Genre et la classe Realisateur.
// films de $rea1Rouge
$film1 = new Film ("Lupin", "2010-11-20", 120, "un film policier original", $policier, $rea1Rouge);
$film2 = new Film ("Lupin2", "2014-11-10", 122, "un film policier superbe", $policier, $rea1Rouge);
$film3 = new Film ("Meutre au petit matin", "2020-10-23", 128, "un film policier rare", $policier, $rea1Rouge);
$film4 = new Film ("Meutre de la comtesse", "2021-11-02", 126, "un film policier glaçant", $policier, $rea1Rouge);
$film5 = new Film ("La comtesse ressucite", "2022-08-05", 135, "un film policier mais surtout de la sf !", $sf, $rea1Rouge);
// films de $rea3Vert
$film6 = new Film ("Hulk, la naissance", "2009-08-02", 127, "un film de sf top", $sf, $rea3Vert);
$film7 = new Film ("Hulk, le retour", "2011-12-02", 160, "un film de sf top", $sf, $rea3Vert);
$film8 = new Film ("Hulk en Amérique", "2013-11-04", 110, "un film de sf superbe", $sf, $rea3Vert);
$film9 = new Film ("Hulk4", "2015-08-12", 140, "du grand cinema", $sf, $rea3Vert); // mort de l'acteur qui jouait Hulk en plein film
$film10 = new Film ("Hulk5", "2017-05-23", 120, "un film de sf top", $sf, $rea3Vert);
// films de $rea2Bleu
$film11 = new Film ("Le colt d'argent", "1977-11-02", 120, "un western top", $western, $rea2Bleu);
$film12 = new Film ("La chevauchée sauvage", "1982-12-22", 120, "un western top", $western, $rea2Bleu);
$film13 = new Film ("Personne", "2001-11-27", 120, "un grand western", $western, $rea2Bleu);

// je crée 13 objets 'film' de la classe Film - classe qui embarque la classe Genre et la classe Realisateur.

//casting de $film1
$casting1 = new Casting ($film1, $perso4, $acteur2);
$casting2 = new Casting ($film1, $perso10, $acteur4);
//casting de $film2
$casting3 = new Casting ($film2, $perso4, $acteur2);
$casting4 = new Casting ($film2, $perso10, $acteur4);
//casting de $film3
$casting5 = new Casting ($film3, $perso4, $acteur2);
$casting6 = new Casting ($film3, $perso10, $acteur4);
//casting de $film4
$casting7 = new Casting ($film4, $perso4, $acteur2);
$casting8 = new Casting ($film4, $perso10, $acteur4);
$casting9 = new Casting ($film4, $perso11, $acteur5);
$casting10 = new Casting ($film4, $perso13, $acteur8);
//casting de $film5
$casting11 = new Casting ($film5, $perso4, $acteur2);
$casting12 = new Casting ($film5, $perso10, $acteur4);
$casting13 = new Casting ($film5, $perso11, $acteur5);
//casting de $film6
$casting14 = new Casting ($film6, $perso1, $acteur1);
$casting15 = new Casting ($film6, $perso2, $acteur3);
$casting16 = new Casting ($film6, $perso3, $acteur4);
//casting de $film7
$casting17 = new Casting ($film7, $perso1, $acteur1);
$casting18 = new Casting ($film7, $perso2, $acteur3);
$casting19 = new Casting ($film7, $perso3, $acteur4);
//casting de $film8
$casting20 = new Casting ($film8, $perso1, $acteur1); // joue Hulk
$casting20 = new Casting ($film8, $perso2, $acteur3);
$casting21 = new Casting ($film8, $perso3, $acteur4);
$casting22 = new Casting ($film8, $perso12, $acteur6);
//casting de $film9
$casting17 = new Casting ($film9, $perso1, $acteur1); // joue Hulk
$casting17 = new Casting ($film9, $perso1, $acteur7); // joue Hulk
$casting18 = new Casting ($film9, $perso2, $acteur3);
$casting19 = new Casting ($film9, $perso3, $acteur4);
//casting de $film10
$casting17 = new Casting ($film10, $perso1, $acteur7); // joue Hulk
$casting18 = new Casting ($film10, $perso2, $acteur3);
$casting19 = new Casting ($film10, $perso3, $acteur4);
//casting de $film11
$casting17 = new Casting ($film11, $perso5, $acteur1);
$casting18 = new Casting ($film11, $perso6, $acteur2);
$casting18 = new Casting ($film11, $perso7, $acteur3);
$casting18 = new Casting ($film11, $perso8, $acteur4); // $acteur4 joue deux rôles : Billy the Kid et Jesse James
$casting19 = new Casting ($film11, $perso9, $acteur4);
//casting de $film12
$casting17 = new Casting ($film12, $perso5, $acteur1);
$casting18 = new Casting ($film12, $perso6, $acteur3); // $acteur3 joue deux rôles
$casting18 = new Casting ($film12, $perso7, $acteur3);
$casting18 = new Casting ($film12, $perso8, $acteur4); // $acteur4 joue deux rôles : Billy the Kid et Jesse James
$casting19 = new Casting ($film12, $perso9, $acteur4);
//casting de $film13
$casting17 = new Casting ($film13, $perso5, $acteur1);
$casting18 = new Casting ($film13, $perso6, $acteur3);
$casting18 = new Casting ($film13, $perso7, $acteur3);
$casting18 = new Casting ($film13, $perso8, $acteur4); // $acteur4 joue uniquement le rôle de Billy the Kid
$casting19 = new Casting ($film13, $perso9, $acteur5);



echo "<h2>on teste la méthode afficherFilmographie () de la classe 'Acteur'</h2>";

echo $acteur1->afficherFilmographie ();

echo $acteur2->afficherFilmographie ();

echo $acteur3->afficherFilmographie ();

echo $acteur4->afficherFilmographie ();

echo $acteur5->afficherFilmographie ();

echo $acteur6->afficherFilmographie ();

echo $acteur7->afficherFilmographie ();

echo $acteur8->afficherFilmographie ();



echo "<h2>on teste la méthode afficherCasting () de la classe 'Film'</h2>";

echo $film1->afficherCasting ();

echo $film2->afficherCasting ();

echo $film3->afficherCasting ();

echo $film4->afficherCasting ();

echo $film5->afficherCasting ();

echo $film6->afficherCasting ();

echo $film7->afficherCasting ();

echo $film8->afficherCasting ();

echo $film9->afficherCasting ();

echo $film10->afficherCasting ();

echo $film11->afficherCasting ();

echo $film12->afficherCasting ();

echo $film13->afficherCasting ();



echo "<h2>on teste la méthode afficherFilmsParGenre () de la classe 'Genre'</h2>";

echo $western->afficherFilmsParGenre ();

echo $sf->afficherFilmsParGenre ();

echo $policier->afficherFilmsParGenre ();



echo "<h2>on teste la méthode afficherListeActeurs () de la classe 'Personnage'</h2>";

echo $perso1->afficherListeActeurs ();

echo $perso2->afficherListeActeurs ();

echo $perso3->afficherListeActeurs ();

echo $perso4->afficherListeActeurs ();

echo $perso5->afficherListeActeurs ();

echo $perso6->afficherListeActeurs ();

echo $perso7->afficherListeActeurs ();

echo $perso8->afficherListeActeurs ();

echo $perso9->afficherListeActeurs ();

echo $perso10->afficherListeActeurs ();

echo $perso11->afficherListeActeurs ();

echo $perso12->afficherListeActeurs ();

echo $perso13->afficherListeActeurs ();



echo "<h2>on teste la méthode afficherFilmsParRealisateur () de la classe 'Realisateur'</h2>";

echo $rea1Rouge->afficherFilmsParRealisateur ();

echo $rea2Bleu->afficherFilmsParRealisateur ();

echo $rea3Vert->afficherFilmsParRealisateur ();