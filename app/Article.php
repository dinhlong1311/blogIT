<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
  protected $table = 'articles';

  // relationship: article_types table
  public function article_type()
  {
    return $this->belongsTo('App\ArticleType', 'article_type_id', 'id');
  }

  // relationship: users table
  public function user()
  {
    return $this->belongsTo('App\User', 'user_id', 'id');
  }

  // relationship: tags table
  public function tags()
  {
    return $this->hasMany('App\Tag', 'article_id', 'id');
  }
}
