<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
   public function posts()
  {
    // Par défaut Laravel ira chercher les colonnes 
    // - clé distante : 'category_id' dans la table posts
    // - clé locale : 'id' dans la table categories
    // Donc on n'est pas obligé de renseigner les clés
    return $this->hasMany('App\Post'); 
  }
}
