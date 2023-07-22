<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blog';
    protected $fillable = [
        'categorie_id',
        'title',
        'description',
        'start_date',
        'end_date',
        'status',
        'thumb',
        'banner',
    ];
}
