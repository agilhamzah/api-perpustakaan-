<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookM extends Model
{
    use HasFactory;

    protected $table = 'books';
    protected $fillable = [
        'name_book', 'summary', 'publisher', 'pages', 'qty', 'date_release'
    ];
}
