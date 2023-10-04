<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komen extends Model
{
    use HasFactory;
    protected $table = 'komens';
    protected $fillable = ['user_id', 'post_id', 
    'parent_id', 'comment'
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function post() {
        return $this->belongsTo(Posting::class, 'post_id', 'id');
    }

    public function replies()
    {
        return $this->hasMany(Komen::class, 'parent_id');
    }
}
