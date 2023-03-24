<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notification extends Model
{
    use HasFactory;
    protected $fillable=['type','closhe_suivi','content','user_id','statut'];

    public function user(){

          return $this->belongsTo(user::class);
         
    }
}
