<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class SearchController extends Controller
{
    public function results(Request $request) {
        $results = Book::where('title', 'like', '%' . $request->search . '%')->get();
        
        return view('results.index', [
            'results'=>$results
        ]);
    }
}
