<?php
require 'config/autoload.php';
use ejemplo\Bootstrap\Request;
use ejemplo\Bootstrap\Config;
use ejemplo\Bootstrap\Database;
use ejemplo\Bookstore\Controller\PageController;
use ejemplo\Bookstore\Controller\BookController;

$request = new Request();
echo $request->getUrl();
//echo phpinfo();
echo "<hr>";

$config = Config::getInstance();
echo $config->get('db')['dbname'];
echo "<hr>";

$pdo = Database::getInstance();
$books = $pdo->query('SELECT * from libro')->fetchAll();
var_dump($books);

$pagina = new PageController();
 echo "<br>";
$pagina->index();

 echo "<br>";
$libro = new BookController();
$libro->show(1);

