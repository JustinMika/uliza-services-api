<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class conversation extends Model
{
    use HasFactory;
    protected $fillable=['part_one','part_two','cle'];
    public function messages(){
        return $this->hasMany(message::class);
    }

}
