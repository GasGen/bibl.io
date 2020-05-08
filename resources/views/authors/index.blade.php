@extends('layouts.app')

@section('content')

    <div class="container">
        <table class="table">

            <thead class="table">
                <tr>
                    <td><b>Author</b></td>
                    <td>&nbsp</td>
                    <td><a href="/authors/create" class="btn btn-sm btn-outline-info">Add author</a></td>
                </tr>
            </thead>
            <tbody class="table">
                @foreach($authors as $author)
                    <tr>
                        <td><a href="/authors/{{ $author->id }}">{{ $author->name }} {{ $author->surname }}</a></td>
                        <td><a href="authors/{{ $author->id }}/edit" class="btn btn-sm btn-outline-secondary">edit</a></td>
                        <td>
                            <form action="authors/{{ $author->id }}" method="POST">
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