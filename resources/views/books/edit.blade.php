@extends('layouts.app')

@section('content')
    <div class="container">

        <form action="/books/{{ $book->id }}" method="post">
            @method('PUT')
            <table class="table">
                <thead class="table">
                    <tr>
                        <td><b>Edit Book</b></td>
                    </tr>
                    @if($errors->all())
                        <tr>
                            <td>
                                <div class="alert alert-danger">

                                    @foreach($errors->all() as $error)
                                        <ul>
                                            <li>{{ $error }}</li>
                                        </ul>
                                    @endforeach
                                </div>
                            </td>
                        </tr>
                    @endif
                </thead>
                <tbody class="table">
                    <tr>
                        <td><input type="number" name="isbn" id="isbn" class="form-control" placeholder="ISBN"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="title" id="title" class="form-control" placeholder="Book title"></td>
                    </tr>
                    <tr>
                        <td>
                            <select name="author_id" id="author_id" class="form-control">
                                <option class="form-group" selected>Select author</option>
                                @foreach($authors as $author)
                                    <option value="{{ $author->id }}">{{ $author->name }} {{ $author->surname }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><textarea name="description" id="description" class="form-control" placeholder="Book description"></textarea></td>
                    </tr>
                    <tr>
                        <td>
                            <select name="category_id" id="category_id" class="form-control">
                                <option class="form-group" selected>Select category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="number" name="year" id="year" class="form-control" placeholder="year of publication"></td>
                    </tr>
                    <tr>
                        @csrf
                        <td> <a href="/books" class="btn btn-sm btn-outline-secondary mr-2">Back</a><button type="submit" class="btn btn-sm btn-success">Edit book</button></td>
                    </tr>
                </tbody>
            </table>
        </form>
    
    </div>
@endsection