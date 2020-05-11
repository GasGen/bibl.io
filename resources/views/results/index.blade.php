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
                @foreach($results as $result)
                    <tr>
                        <td><a href="/books/{{ $result->id }}">{{ $result->title }}</a></td>
                        <td><a href="/authors/{{ $result->author_id }}">{{ $result->author->name }} {{ $result->author->surname }}</a></td>
                        <td><a href="/books/{{ $result->id }}/edit" class="btn btn-sm btn-outline-secondary">edit</a></td>
                        <td>
                            <form action="books/{{ $result->id }}" method="POST">
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