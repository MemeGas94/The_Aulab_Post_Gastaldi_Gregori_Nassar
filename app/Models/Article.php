<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\User;
use App\Models\Category;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;
    use Searchable;
    protected $fillable = ['title','subtitle','description','category_id','cover','user_id','is_accepted'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function toSearchableArray(){
        return[
            'id'=>$this->id,
            'title'=>$this->title,
            'subtitle'=>$this->subtitle,
            'category'=>$this->category,

        ];
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
