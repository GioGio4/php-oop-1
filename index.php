<!---------------------------------------------------------------------------------------------------------- 
Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
 - è definita una classe 'Movie'
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti 'Movie' e stampati a schermo i valori delle relative proprietà

Bonus 1:
Modificare la classe Movie in modo che accetti piú di un genere.
Bonus 2:
Creare un layout completo per stampare a schermo una lista di movies.
Facciamo attenzione all'organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice
- creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
- mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/
- organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.
----------------------------------------------------------------------------------------------------------->

<?php

// Definire una classe Movie
class Movie
{
    // Variabili di istanza 
    public $title;
    public $year;
    public $genres;

    //  Funzione construct 
    public function __construct($_title, $_year, $_genres)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->genres = $_genres;
    }

    // Metodo movie Detail -> stampa una stringa con tutti i dati dell'oggetto Movie selezionato 
    public function movieDetail()
    {
        echo "TITOLO: $this->title ANNO: $this->year GENERE:$this->genres<br />";
    }
}

// Oggetti istanziati 
$movie_1 = new Movie("Revenant", "2015", "Drammatico");
$movie_2 = new Movie("Django Unchained", "2012", "Western");
$movie_3 = new Movie("Parasite", "2019", "Drammatico");

//Associa il metodo all'oggetto (In questo caso trasforma in stringa e stampa l'oggetto Movie selezionato )
$movie_1->movieDetail();
$movie_2->movieDetail();
$movie_3->movieDetail();


// var_dump($movie_1);
// var_dump($movie_1);
// var_dump($movie_1);


?>