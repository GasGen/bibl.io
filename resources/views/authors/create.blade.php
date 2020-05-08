@extends('layouts.app')

@section('content')
    <div class="container">

        <form action="/authors" method="post">
            <table class="table">
                <thead class="table">
                    <tr>
                        <td><b>Add an author</b></td>
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
                        <td><input type="text" name="name" id="name" class="form-control" placeholder="Name"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="surname" id="surname" class="form-control" placeholder="Surname"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="country" id="country" class="form-control" placeholder="country"></td>
                    </tr>
                    <tr>
                        <td><textarea name="extract" id="extract" class="form-control" placeholder="extract"></textarea></td>
                    </tr>
                    <tr>
                        <td><input type="date" name="birth" id="birth" class="form-control" placeholder="birth"></td>
                    </tr>
                    <tr>
                        <td><input type="date" name="death" id="death" class="form-control" placeholder="death"></td>
                    </tr>
                    <tr>
                        @csrf
                        <td> <a href="/authors" class="btn btn-sm btn-outline-secondary mr-2">Back</a><button type="submit" class="btn btn-sm btn-success">Add author</button></td>
                    </tr>
                </tbody>
            </table>
        </form>
    
    </div>
@endsection