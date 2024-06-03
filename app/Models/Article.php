<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Article extends Model
{
    use HasFactory;

    protected $fillable=[
        'nom',
        'cathegorie',
        'url_img',
        'statut',
        'desc',
        'localisation',
        'date'


    ];

    public function commentaires():HasMany{
        return $this->hasMany(Commentaire::class);
    }
}
