<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Reader;

class Commentary extends Model
{
    public function reader() {
        return $this->belongsTo(Reader::class);
    }
}
