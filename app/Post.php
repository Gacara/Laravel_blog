<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model

    
    /* public function user() {
      return $this->belongsTo('App\User', 'user_id', 'id');
   }*/
 
 /*  public function category()
  {
    // Par défaut Laravel ira chercher les colonnes :
    // - clé distante : 'category_id' dans la table posts
    // - clé local : 'id' dans la table category
    // Donc on ne renseigne pas les colonne de relation
    return $this->belongsTo('App\Category'); 
  }		*/
   


{
    use Sluggable;

   
      protected $fillable = ['image', 'description', 'title', 'soustitre', 'content1', 'content2', 'category_id', 'user_id', 'slug'];
      protected $posts = 'posts';
    //  $slug = str_replace(' ','-',$title);
    
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}

