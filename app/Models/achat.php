<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class achat extends Model
{
    use HasFactory;
    protected $fillable=['produit','nombre','axe','operateur','prix','etat','telephone','user_id','annonceur','reference'];
    
  public function user(){

          return $this->belongsTo(user::class);
         
    }
}

