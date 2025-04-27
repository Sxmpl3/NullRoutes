<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostsForo extends Model
{
    protected $table = 'posts_foro';

    protected $fillable = [
        'id',
        'user_id',
        'nombre_post',
        'contenido_post',
        'created_at',
    ];

    public function foro()
    {
        return $this->belongsTo(Foro::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
