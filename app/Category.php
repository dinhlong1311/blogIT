<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $table = 'categories';

  // relationship: article_types table
  public function article_types()
  {
    return $this->hasMany('App\ArticleType', 'category_id', 'id');
  }

  // relationship: articles table
  public function articles()
  {
    return $this->hasManyThrough('App\Article', 'App\ArticleType',
      'category_id', 'article_type_id', 'id');
  }
}
