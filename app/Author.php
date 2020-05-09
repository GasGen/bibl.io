<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Book;

class Author extends Model
{
    protected $table ='authors';
    public function books() {
        return $this->hasMany(Book::class);
    }
}
