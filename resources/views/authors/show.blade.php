@extends('layouts.app')

@section('content')
<div class="container">

        <form action="#" method="post">
            <table class="table">
                <thead class="table">
                    <tr>
                        <td><h1 class="mt-2"><b>Author: {{ $author->name }} {{ $author->surname }} </b></h1><br>
                        <b>Birth:</b> {{ $author->birth }}, <b>Death:</b> {{ $author->death }}<br>
                        {{ $author->extract }}
                        </td>
                    </tr>
                </thead>
                <tbody class="table">
                    <tr>
                       <td>
                            <table class="table">
                                <thead class="table table-borderless">
                                    <tr>
                                        <td><b>Title</b></td>
                                        <td><b>Category</b></td>
                                    </tr>
                                </thead>
                                <tbody class="table">
                                    @foreach($author->books as $book)
                                    <tr>
                                       <td><a href="/books/{{ $book->id }}">{{ $book->title }}</a></td>
                                       <td>{{ $book->category->name }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                       </td>
                    </tr>
                    <tr>
                        @csrf
                        <td> <a href="/authors" class="btn btn-sm btn-outline-secondary mr-2">Back</a> <button type="submit" class="btn btn-sm btn-success">Add book</button></td>
                    </tr>
                </tbody>
            </table>
        </form>
    
    </div>
@endsection('content')