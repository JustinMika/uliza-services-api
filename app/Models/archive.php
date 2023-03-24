<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class archive extends Model
{
    use HasFactory;
    protected $fillable=['user_id','Annonce_id'];
    
    public function user(){
       return $this->belongsTo(user::class);
    }
    public function annonces(){
        return $this->belongsTo(Annonce::class);
     }


}
