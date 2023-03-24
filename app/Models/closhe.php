<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class closhe extends Model
{
    use HasFactory;
    protected $fillable=['suiveur','suivi'];

    public function notifications(){
    return $this->hasMany(notification::class,'suivi');
  
    }
}
