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

require_once __DIR__ . "/Models/Movie.php";
require_once __DIR__ . "/Models/Actor.php";

// Oggetti istanziati 
$movie_1 = new Movie("Revenant", "2015", "Drammatico", new Actor("Leonardo DiCaprio", "Tom Hardy", "Domhnall Gleeson"));
$movie_2 = new Movie("Django Unchained", "2012", "Western", new Actor("Jamie Foxx", "Christoph Waltz", "Leonardo DiCaprio"));
$movie_3 = new Movie("Parasite", "2019", "Drammatico", new Actor("Song Kang-ho", "Lee Sun-kyun", "Cho Yeo-jeong"));
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP-OOP</title>
  <!-- TAILWIND -->
  <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="dark:bg-slate-600">
  <main class="container mx-auto h-screen">
    <div class="h-full flex justify-center items-center">
      <table class="table-fixed bg-white dark:bg-slate-800 mt-3">
        <thead>
          <tr>
            <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-center">
              TITOLO</th>
            <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-center">
              ANNO DI USCITA</th>
            <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-center">
              GENERE</th>
            <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-center">
              ATTORI</th>
          </tr>
        </thead>
        <tbody>
          <tr class="text-center">
            <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
              <?= $movie_1->title ?></td>
            <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
              <?= $movie_1->year ?></td>
            <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
              <?= $movie_1->genres ?></td>
            <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
              <?php $movie_1->getMovieActor() ?></td>
          </tr>
          <tr class="text-center">
            <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
              <?= $movie_2->title ?></td>
            <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
              <?= $movie_2->year ?></td>
            <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
              <?= $movie_2->genres ?></td>
            <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
              <?php $movie_2->getMovieActor() ?></td>
          </tr>
          <tr class="text-center">
            <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
              <?= $movie_3->title ?></td>
            <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
              <?= $movie_3->year ?></td>
            <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
              <?= $movie_3->genres ?></td>
            <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
              <?php $movie_3->getMovieActor() ?></td>
          </tr>
        </tbody>
      </table>
    </div>

  </main>
</body>

</html>