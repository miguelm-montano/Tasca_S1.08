<?php
namespace ExerciseN3;


class Library {
    
    private array $listOfBooks = []; 

    public function addBook($book) {
        $this->listOfBooks[] = $book;

    }

    public function deleteBook($isbn): void {
        for($i = 0; $i < count($this->listOfBooks); $i++) {
            if($this->listOfBooks[$i]->getIsbn() == $isbn) {
                unset($this->listOfBooks[$i]);
            }
        }
    }

    public function getTotalBooks(): int {
        return count($this->listOfBooks);
    }

    public function editBookGenre($isbn, $newGenre): void {
        foreach($this->listOfBooks as $book) {
            if($book->getIsbn() == $isbn) {
                $book->setGenre($newGenre);
            }
        }
    }

    public function SearchBookByAuthor($author) {
        foreach($this->listOfBooks as $book) {
            if($book->getAuthor() == $author) {
                return $book;
            }
        }
        return null; 
    }



}

?>