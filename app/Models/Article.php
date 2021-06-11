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
'description'
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
}
