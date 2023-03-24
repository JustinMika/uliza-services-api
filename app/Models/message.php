<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    use HasFactory;
    protected $fillable=["send",'rec','content','statut','conversation_cle'];

    public function user(){
        $this->belongsTo(user::class);
    }
    public function conversation(){
        $this->belongsTo(conversation::class);
    }
}
