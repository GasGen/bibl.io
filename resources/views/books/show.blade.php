@extends('layouts.app')

@section('content')
<div class="container">

        <form action="#" method="post">
            <table class="table">
                <thead class="table">
                    <tr>
                        <h1 class="mt-2"><b>Book: {{ $book->title }}</b></h1><br><b>Author:</b> {{ $book->author->name }} {{ $book->author->surname }}<br>{{ $book->description }}
                    </tr>
                </thead>
                <tbody class="table">
                    <tr>
                       <td>Here will be the cover of the book: {{ $book->title }}. Also an extract and comments.</td>
                    </tr>
                    <tr>
                        @csrf
                        <td> <a href="/books/{{$book->id}}/edit" class="btn btn-sm btn-outline-secondary mr-2">Back</a> <button type="submit" class="btn btn-sm btn-success">Edit book</button></td>
                    </tr>
                </tbody>
            </table>
        </form>
    
    </div>
@endsection('content')