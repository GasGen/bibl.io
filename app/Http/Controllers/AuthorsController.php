<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class AuthorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authors = Author::all();

        return view('authors.index', [
            'authors'=>$authors
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('authors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $author = new Author();

        $validate = $request->validate([
            'name'=>'required|min:4',
            'surname'=>'required|min:4',
            'country'=>'required|min:4',
            'extract'=>'required|min:4',
            'birth'=>'required'   
        ]);

        $author->name = $validate['name'];
        $author->surname = $validate['surname'];
        $author->country = $validate['country'];
        $author->extract = $validate['extract'];
        $author->birth = $validate['birth'];
        $author->death = $request->get('death');

        $author->save();

        return redirect('/authors');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $author = Author::findOrFail($id);

        return view('authors.show', [
            'author'=>$author
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
        $author = Author::findOrFail($id);

        return view('authors.edit', [
            'author'=>$author
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
        $author = Author::findOrFail($id);
        
        $validate = $request->validate([
            'name'=>'required|min:4',
            'surname'=>'required|min:4',
            'country'=>'required|min:4',
            'extract'=>'required|min:4',
            'birth'=>'required'
        ]);

        $author->name = $validate['name'];
        $author->surname = $validate['surname'];
        $author->country = $validate['country'];
        $author->extract = $validate['extract'];
        $author->birth = $validate['birth'];
        $author->death = $request->get('death');

        $author->save();

        return redirect('/authors');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $author = Author::findOrFail($id);

        $author->delete();

        return redirect('/authors');
    }
}
