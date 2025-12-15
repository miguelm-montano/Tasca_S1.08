<?php
namespace ExerciseN3\Test;

use ExerciseN3\Library;
use ExerciseN3\Book;
use PHPUnit\Framework\TestCase;

class LibraryTest extends TestCase {

    public function testAddBook() {

        $library = new Library();
        $vestidoDeNovia = new Book('Vestido de novia', "Pierre Lemaitre", 9788466338370, "Novela Policial", 328);

        $library->addBook($vestidoDeNovia);

        $this->assertEquals(1, $library->getTotalBooks());

    }

    public function testDeleteBook() {
        
        $library = new Library();
        $book1 = new Book('Vestido de novia', "Pierre Lemaitre", 9788466338370, "Novela Policial", 328);
        $book2 = new Book('Tres noches', "Austin Wright", 9788498384864, "Novela Policial", 384);

        $library->addBook($book1);
        $library->addBook($book2);

        $library->deleteBook(9788466338370);

        $this->assertEquals(1, $library->getTotalBooks());


    }

}

?>