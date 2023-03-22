<?php

require_once __DIR__ . "/Actor.php";

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

    // Metodo per stampare solo la lista di Attori (del film selezionato)
    public function getMovieActor()
    {
        foreach ($this->actor as $actor) {
            echo $actor . ", ";
        }
    }
}
