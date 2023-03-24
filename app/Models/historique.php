<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class historique extends Model
{
    use HasFactory;
    protected $fillable=['historique','user_id'];
    
    public function user(){
        return $this->belongsTo(user::class);
    }
}
