<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Post extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'posts';

    use HasFactory;

    protected $fillable = [
        'user_id',
        'content',
        'timestamps'
    ];

    public function images() {
        return $this->embedsMany(Image::class);
    }

}
