@extends('layouts.app')

@section('content')
<div class="container">
        <table class="table">
            <thead class="table">
                <tr>
                    <td><h1 class="mt-2"><b>Reader: {{ $reader->name }} {{ $reader->surname }} </b></h1><br>
                    <b>Birth:</b> {{ $reader->birth }}
                    </td>
                </tr>
            </thead>
            <tbody class="table">
                <tr>
                   <td>
                        <table class="table">
                            <thead class="table table-borderless">
                                <td>reader info</td>
                            </thead>
                            <tbody class="table">
                                <tr>
                                    
                                </tr>
                            </tbody>
                        </table>
                   </td>
                </tr>
                <tr>
                    @csrf
                    <td> <a href="/readers" class="btn btn-sm btn-outline-secondary mr-2">Back</a></td>
                </tr>
            </tbody>
        </table>
        
    
    </div>
@endsection('content')