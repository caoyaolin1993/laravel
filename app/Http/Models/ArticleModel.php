<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleModel extends Model
{
  //  要指定模型关联的表名,否则将采取默认的article_model
  protected $table = 'articles';




  // 可以在模型中封装自定义的方法
  public function getRandow()
  {
    return rand(100, 9999);
  }
}
