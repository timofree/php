<?php



namespace ejemplo\Bookstore\Controller;
use ejemplo\Bookstore\View\View;

class BookController
{
 public function show($id)
 {
 $view = new View('app/templates/book');
 $book = ['title' => 'La Tregua', 'author' => 'Mario
Benedetti', 'description' => 'La novela...'];
 $view->render('show.php', ['book' => $book]);
 }
}

