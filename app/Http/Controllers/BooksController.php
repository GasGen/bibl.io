<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Author;
use App\Category;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $books = Book::all();


        return view('books.index', [
            'books'=>$books,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $authors = Author::all();
        $categories = Category::all();

        return view('books.create', [
            'authors'=>$authors,
            'categories'=>$categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = new Book();

        $validate = $request->validate([
            'title'=>'required|min:4',
            'author_id'=>'required',
            'description'=>'required|min:30',
            'year'=>'required',
            'category_id'=>'required'
        ]);

        $book->title = $validate['title'];
        $book->author_id = $validate['author_id'];
        $book->description = $validate['description'];
        $book->year = $validate['year'];
        $book->category_id = $validate['category_id'];
        $book->isbn = $request->get('isbn');

        $book->save();

        return redirect('/books');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::findOrFail($id);

        return view('books.show', [
            'book'=>$book
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        $authors = Author::all();
        $categories = Category::all();

        return view('books.edit', [
            'book'=>$book,
            'authors'=>$authors,
            'categories'=>$categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);

        $validate = $request->validate([
            'title'=>'required|min:4',
            'author_id'=>'required',
            'description'=>'required|min:30',
            'year'=>'required',
            'category_id'=>'required'
        ]);

        $book->title = $validate['title'];
        $book->author_id = $validate['author_id'];
        $book->description = $validate['description'];
        $book->year = $validate['year'];
        $book->category_id = $validate['category_id'];
        $book->isbn = $request->get('isb');

        $book->save();

        return redirect('/books');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect('/books');
    }
}
