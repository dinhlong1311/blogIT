<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
  protected $table = 'tags';

  // relationship: articles table
  public function article()
  {
    return $this->belongsTo('App\Article', 'article_id', 'id');
  }
}
