<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category_list';

    protected $fillable = [
        'name',
        'status',
        'description',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class, 'category_id', 'id');
    }
    public function postsweek()
    {
        return $this->hasMany(Post::class, 'category_id', 'id');
    }
    public function postsnow()
    {
        return $this->hasMany(Post::class, 'category_id', 'id');
    }
}