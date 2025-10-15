<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'Title',
        'Author',
        'PublishedYear',
        'Image',
        'Summary',
    ];

    /** @use HasFactory<\Database\Factories\BookFactory> */
    use HasFactory;
}
