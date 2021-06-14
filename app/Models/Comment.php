<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    // protected $fillable = ['nom','comment'];
    public function article()
    {
        return $this->belongsTo(Article::class);//select * from article where Comments.article_id = article.id
    }
    public function user()
    {
        return $this->belongsTo(User::class);//select * from user where Comments.user_id = user.id
    }
}
