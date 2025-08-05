<?php

namespace App\Models;
// use App\Models\Article;
// use Database\Factories\ArticleFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;
     protected $fillable = ['title', 'body', 'user_id', 'image'];
     protected $appends = ['author','comments'];
     public function user(){
        return $this->belongsTo(User::class);
     }
     public function comments(){
        return $this->hasMany(Comment::class);
     }
     public function getAuthorAttribute(){
        return $this->user->name;
     }
    //
}
