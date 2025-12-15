<?php
namespace ExerciseN3\Test;

use ExerciseN3\Library;
use ExerciseN3\Book;
use PHPUnit\Framework\TestCase;

class LibraryTest extends TestCase {

    public function testAddBook() {

        $library = new Library();
        $vestidoDeNovia = new Book('Vestido de novia', "Pierre Lemaitre", 9788466338370, 'Thriller', 328);

        $library->addBook($vestidoDeNovia);

        $this->assertEquals(1, $library->getTotalBooks());

    }

    public function testDeleteBook() {
        
        $library = new Library();
        $book1 = new Book('Vestido de novia', 'Pierre Lemaitre', 9788466338370, 'Novela Policial', 328);
        $book2 = new Book('Tres noches', 'Austin Wright', 9788498384864, "Novela Policial", 384);

        $library->addBook($book1);
        $library->addBook($book2);

        $library->deleteBook(9788466338370);

        $this->assertEquals(1, $library->getTotalBooks());

    }

    public function testEditBookGenre() {

        $library = new Library();
        $book = new Book('La mujer en la ventana', 'A.J. Finn', 9788425356629, 'Paranormal', 544);
        $library->addBook($book);

        $library->editBookGenre(9788425356629, 'Novela Policiaca');

        $this->assertEquals('Novela Policiaca', $book->getGenre());
    }

    public function testSearchBookByAuthor() {
        
        $library = new Library();
        $book = new Book('La verdad sobre el caso Harry Quebert', 'Joel Dicker', 9788466332286, "Novela Policiaca", 800);
        $library->addBook($book);

        $bookByAuthor = $library->SearchBookByAuthor('Joel Dicker');

        $this->assertEquals('Joel Dicker', $bookByAuthor->getAuthor());
        
    }



}

?>