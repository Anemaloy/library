<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['name', 'author', 'year'];

    //Получение всех книг
    public static function getAllBooks () {
        $books = Book::all();
        return $books;
    }

    public static function addNewBook($data) {
        $name = $data['name'];
        $author = $data['author'];
        $year = $data['year'];
        Book::create([
            'name' => $name,
            'author' => $author,
            'year' => $year,
        ]);  
        $books = Book::all();
        return $books;
    }

    public static function getBookForEdit($id) {
        $book = Book::find($id);
        return $book;
    }

    public static function updateBookData($data, $id) {
        $book = Book::find($id);
        $book->name = $data['name'];
        $book->author = $data['author'];
        $book->year = $data['year'];
        $book->save();
        $books = Book::all();
        return $books;
    }
    

    


}
