@extends('layouts.app')

@section('content')
    <div class="container">

        <form action="/categories" method="post">
            <table class="table">
                <thead class="table">
                    <tr>
                        <td><b>Add new Category</b></td>
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
                        <td><input type="text" name="name" id="name" class="form-control" placeholder="Category name"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="description" id="description" class="form-control" placeholder="Category description"></td>
                    </tr>
                    <tr>
                        @csrf
                        <td> <a href="/categories" class="btn btn-sm btn-outline-secondary mr-2">Back</a><button type="submit" class="btn btn-sm btn-success">Add category</button></td>
                    </tr>
                </tbody>
            </table>
        </form>
    
    </div>
@endsection