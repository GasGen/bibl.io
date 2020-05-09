<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Author;

class Book extends Model
{   
    protected $table ='books';
    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function author() {
        return $this->belongsTo(Author::class);
    }
}
