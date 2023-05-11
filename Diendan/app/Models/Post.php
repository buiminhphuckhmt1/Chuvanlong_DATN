<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'post_list';

    protected $fillable = [
        'title',
        'description',
        'content',
        'view_count',
        'user_id',
        'category_id',
        'status',
        'follow',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function comment()
    {
        return $this->hasMany(Comments::class, 'post_id','id');
    }
}
