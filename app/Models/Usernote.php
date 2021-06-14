<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usernote extends Model
{
    use HasFactory;
    public function article()
    {
        return $this->belongsTo(Article::class);//select * from article where usernote.article_id = article.id
    }
}
