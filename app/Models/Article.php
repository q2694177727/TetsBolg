<?php
namespace  App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Article extends Model{
    protected $table = 'article';
    protected $primaryKey   =   'article_id';
    public function article_type()
    {
        return $this->hasOne('App\ArticleType',"article_type_id","article_type_id");
    }
    public function getArticleTypeIdAttribute($value)
    {
        $name   =   DB::table("article_type")->where("article_type_id",$value)->value("article_type_name");
        return $name;
    }
}