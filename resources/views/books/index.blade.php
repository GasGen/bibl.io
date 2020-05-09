@extends('layouts.app')

@section('content')

    <div class="container">
        <table class="table">

            <thead class="table">
                <tr>
                    <td><b>Book</b></td>
                    <td><b>Author</b></td>
                    <td><b>Category</b></td>
                    <td><a href="books/create" class="btn btn-sm btn-outline-info">Add book</a></td>
                </tr>
            </thead>
            <tbody class="table">
                @foreach($books as $book)
                    <tr>
                        <td><a href="/books/{{ $book->id }}">{{ $book->title }}</a></td>
                        <td><a href="/authors/{{ $book->author_id }}">{{ $book->author->name }} {{ $book->author->surname }}</a></td>
                        <td><a href="/books/{{ $book->id }}/edit" class="btn btn-sm btn-outline-secondary">edit</a></td>
                        <td>
                            <form action="books/{{ $book->id }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>

@endsection