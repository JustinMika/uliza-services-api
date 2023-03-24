<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable=['category','category_id'];

    public function sous_categorie(){
        return $this->hasMany(Category::class,'category_id');
    }

    public function annonces(){
        return $this->hasmany(Annonce::class)->limit(100);
    }
    public function sous_catannonces(){
        return $this->hasmany(Annonce::class);
    }
    // public function annoncespaginate(){
    //     return $this->hasmany(Annonce::class)->paginate(20);
    // }
}
