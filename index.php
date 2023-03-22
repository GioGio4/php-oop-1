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


class Actor
{
    // Variabili istanza (classe actor) provvisorio 
    public $actor1;
    public $actor2;
    public $actor3;

    public function __construct($_actor1, $_actor2, $_actor3)
    {
        $this->actor1 = $_actor1;
        $this->actor2 = $_actor2;
        $this->actor3 = $_actor3;
    }
}

// Definire una classe Movie
class Movie
{
    // Variabili di istanza 
    public $title;
    public $year;
    public $genres;
    // Variabile Attori 
    public $actor;

    //  Funzione construct - Aggiunta Actor che viene ripresa dalla classe Actor
    public function __construct($_title, $_year, $_genres, Actor $_actor)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->genres = $_genres;
        $this->actor = $_actor;
    }

    // Metodo movie Detail -> stampa una stringa con tutti i dati dell'oggetto Movie selezionato
    // Aggiunto un Foreach che va ad iterare l'oggetto Actor e stampa ogni attore  
    public function movieDetail()
    {
        echo "TITOLO: $this->title ANNO: $this->year GENERE:$this->genres ATTORI: ";
        foreach ($this->actor as $actor) {
            echo $actor . ", ";
        }
        echo "<br />";
    }
}

// Oggetti istanziati 
$movie_1 = new Movie("Revenant", "2015", "Drammatico", new Actor("Leonardo DiCaprio", "Tom Hardy", "Domhnall Gleeson"));
$movie_2 = new Movie("Django Unchained", "2012", "Western", new Actor("Jamie Foxx", "Christoph Waltz", "Leonardo DiCaprio"));
$movie_3 = new Movie("Parasite", "2019", "Drammatico", new Actor("Song Kang-ho", "Lee Sun-kyun", "Cho Yeo-jeong"));


//Associa il metodo all'oggetto (In questo caso trasforma in stringa e stampa l'oggetto Movie selezionato )
$movie_1->movieDetail();
$movie_2->movieDetail();
$movie_3->movieDetail();



// var_dump($movie_1);
// var_dump($movie_1);


?>