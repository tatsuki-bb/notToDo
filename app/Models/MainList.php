<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mainlist extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'content',
        'solution'
        
    ];

    public function user() {
        return $this->belongsTo(User::class,'user_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
