<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class signaler extends Model
{
    use HasFactory;
    protected $fillable=['user_id','demande'];

    public function user(){
        return $this->belongsTo(user::class);
    }
}
