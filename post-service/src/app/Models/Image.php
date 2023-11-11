<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Image extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'images';

    use HasFactory;

    protected $fillable = [
        'path',
        'post_id',
        'timestamps',
    ];

}
