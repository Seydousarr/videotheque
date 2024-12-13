<?php
namespace Film;
include("./repository/FilmRepository.php");


class FilmController extends FilmRepository {
    private $id;
    private $title;
    private $year;

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getTitle(){
        return $this->title;
    }
    public function setTitle($title){
        $this->title = $title;
    }
    public function getYear(){
        return $this->year;
    }
    
    public function setYear($year){
        $this->year = $year;
    }
    
    public function displayIndex(){
        $listFilms = $this->getRandomFilms();
        // je filtre, je trie, je controlle les données fournies par le repository
            /* var_dump($listFilms); */
            foreach ($listFilms as $key => $value) {
                if (!file_exists("./assets/img/posters/" . $value["id_movie"] . ".jpg")) {
                    $listFilms[$key]['urlposter'] = "assets/img/posters/default.jpg";
                }else {
                    $listFilms[$key]['urlposter'] = "assets/img/posters/" . $value["id_movie"] . ".jpg";
                }
                
            }
        return $listFilms;
        
    }

    public function displayOneFilm($get){
        //possibilité de controle des données fournies par le repository
        if(empty($get)){
            return["error" => "désolé petit"];
        }else{
            //controle id_movie qui n'existe pas dans ma table
            if($this->getFilmbyId($get['id_movie'])){
                return $this->getFilmbyId($get['id_movie']);
            }else{
                return["error" => "désolé petit malin"];
            }
            
        }
        
    }
}
class info {
    public function displayInfoFilm() {
        return "info";
    }
}