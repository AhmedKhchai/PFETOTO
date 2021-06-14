<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['titre',
'categorie',
'adresse',
'phone'
,'weekdays'
,'weekends',
'heuresouverture',
'heuresfermeture',
'description',
'image'
,'nom'
,'email'
,'telephoneperso'
,'adresseperso'
,'facebookurl'
,'twitterurl'
,'googleplusurl'
,'googlemapsurl'
,'anneefondation'
,'categorieservice'];


    public function comments()
    {
        return $this->hasMany(Comment::class); //select * from Comments where Comments.article_id = Article.id
    }
    public function usernote()
    {
        return $this->hasMany(Usernote::class); //select *from Questions where Questions.Test_id = Test.id
    }
    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
}
