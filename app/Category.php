<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Book;

class Category extends Model
{
    public function books() {
        return $this->hasMany(Book::class);
    }
}
