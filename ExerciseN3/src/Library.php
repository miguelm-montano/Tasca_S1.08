<?php
namespace ExerciseN3;


class Library {
    
    private array $listOfBooks = []; 

    public function addBook($book) {
        $this->listOfBooks[] = $book;

    }

    public function deleteBook($isbn) {
        for($i = 0; $i < count($this->listOfBooks); $i++) {
            if($this->listOfBooks[$i]->getIsbn() === $isbn) {
                unset($this->listOfBooks[$i]);
            }
        }
    }

    public function getTotalBooks(): int {
        return count($this->listOfBooks);
    }

}

?>