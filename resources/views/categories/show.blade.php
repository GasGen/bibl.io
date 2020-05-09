@extends('layouts.app')

@section('content')
<div class="container">

        <form action="#" method="post">
            <table class="table">
                <thead class="table">
                    <tr>
                        <h1 class="mt-2"><b>Category: {{ $category->name }}</b></h1><br>{{ $category->description }}
                    </tr>
                </thead>
                <tbody class="table">
                    <tr>
                    <table class="table">
                            <thead class="table table-borderless">
                                <tr>
                                    <td><b>Title</b></td>
                                    <td><b>Author</b></td>
                                </tr>
                            </thead>
                            <tbody class="table">
                                @foreach($category->books as $book)
                                <tr>
                                   <td><a href="/books/{{ $book->id }}">{{ $book->title }}</a></td>
                                   <td><a href="/books/{{ $book->id }}">{{ $book->author->name }} {{ $book->author->surname }}</a></a>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </tr>
                    <tr>
                        @csrf
                        <td> <a href="/categories" class="btn btn-sm btn-outline-secondary mr-2">Back</a> <button type="submit" class="btn btn-sm btn-success">Add book</button></td>
                    </tr>
                </tbody>
            </table>
        </form>
    
    </div>
@endsection('content')