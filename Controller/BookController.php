<?php
class BookController{
    public function books(){
        require_once "View/books.php";
    }
    public function editBook(){
        require_once "View/editBook.php";
    }
    public function postEditBook(){
        //nhan thong tin tu form
        $id = $_POST['id'];
        $bookname = $_POST['bookname'];
        $category = $_POST['category'];
        //insert to table
        $book = new \Model\Book($id, $bookname, $category);
        $book->save();
        header("Location: ?route=books");
    }
    public function deleteBook(){
        $book = new \Model\Book();
        $book = $book->find($_GET["id"]);
        $book->delete();
        header("Location: ?route=books");
    }
}