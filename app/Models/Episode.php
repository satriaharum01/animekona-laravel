<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;
    protected $table = 'episodes';
    protected $primaryKey = 'id';
    protected $fillable = [
        'anime_id',
        'episode_number',
        'title',
        'url '
    ];

    public function find_anime()
    {
        return $this->belongsTo('App\Models\Anime', 'anime_id', 'id')->withDefault([
            'title' => null
        ]);
    }
}
