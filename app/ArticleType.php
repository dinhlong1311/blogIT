<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleType extends Model
{
  protected $table = 'article_types';

  // relationship: categories table
  public function category()
  {
    return $this->belongsTo('App\Category', 'category_id', 'id');
  }

  // relationship: articles table
  public function articles()
  {
    return $this->hasMany('App\Article', 'article_type_id', 'id');
  }
}
