<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    use HasFactory;
    protected $fillable=['id','nom','prix','stock','localisation','detail','category_id','user_id','image'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function archives(){
        return $this->hasMany(archive::class);
    }
    public function images(){
        return $this->hasMany(image::class);
    }
    
}
