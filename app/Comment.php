<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Comment extends Model
{

    public function user() {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    public function category()
    {
        // Par défaut Laravel ira chercher les colonnes :
        // - clé distante : 'category_id' dans la table posts
        // - clé local : 'id' dans la table category
        // Donc on ne renseigne pas les colonne de relation
        return $this->belongsTo('App\Category');
    }

    protected $fillable = ['author', 'content', 'post_id'];
    protected $comments = 'comments';

}