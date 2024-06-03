<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Commentaire extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_id',
        'contenu',
        'date',
        'article_id'
    ];

    public function article():BelongsTo{
       return $this->belongsTo(Article::class);
    }

    public function users():BelongsTo{
        return $this->belongsTo(User::class);
    }

    
}
