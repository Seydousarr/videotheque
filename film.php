<?php

include("./controller/FilmController.php");

$filmController = new Film\FilmController();
$film=$filmController->displayOneFilm($_GET);
include("./templates/header.html");
// ... 
/* //au click dasn index.php  <a href="film.php?id=<?= $value["id_movie"] ?>" class="card-link">Plus d'Info</a>
class ="card-link">plsu d'info</a>
je dois avoir une variable $_GET["id_movie"] :: je souhaite ouvrir cette page et afficher l'id_movie du film selectionné */

var_dump($film);



include("./templates/footer.html");