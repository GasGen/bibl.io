@extends('layouts.app')

@section('content')
<div class="container">

            <table class="table">
                <thead class="table">
                    <tr>
                        <h1 class="mt-2"><b>Book: {{ $book->title }}</b></h1><br><b>Author:</b> {{ $book->author->name }} {{ $book->author->surname }}<br>
                        <b>Birth:</b> {{$book->author->birth}}, <b>Death:</b> {{ $book->author->death }}<br>
                        {{ $book->description }}
                    </tr>
                </thead>
                <tbody class="table">
                    <tr>
                       <td>Here will be the cover of the book: {{ $book->title }}. Also an extract and comments.</td>
                    </tr>
                    <tr>
                        @csrf
                        <td> <a href="/books" class="btn btn-sm btn-outline-secondary mr-2">Back</a> <a href="/books/{{ $book->id }}/edit" class="btn btn-sm btn-success">Edit book</a></td>
                    </tr>
                </tbody>
            </table>
    
    </div>
@endsection('content')