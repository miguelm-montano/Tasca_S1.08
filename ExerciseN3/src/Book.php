<?php 
namespace ExerciseN3;

class Book {

    private int $isbn;

    public function __construct(int $isbn) {

        $this->isbn = $isbn;
        
    }

    public function getIsbn() {
        return $this->isbn;
    }
    
}

?>