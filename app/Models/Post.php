<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public $timestamps = true;

    public function user() {

      return $this->belongsTo('App\User');
    }


    protected $fillable = [
        'id',
        'author',
        'content',
        'created_at',
        'updated_at',
    ];
}
