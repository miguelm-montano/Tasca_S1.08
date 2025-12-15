<?php 
namespace ExerciseN3;

class Book {

    private string $name;
    private string $author;
    private int $isbn;
    private string $genre;

    public function __construct(string $name, string $author, int $isbn, string $genre) {

        $this->name= $name;
        $this->isbn = $isbn;
        $this->genre = $genre;
        $this->author = $author;
        
    }

    public function getIsbn() {
        return $this->isbn;
    }

    public function getGenre() {
        return $this->genre;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function setGenre($newGenre) {
        $this->genre = $newGenre;
    }


}

?>