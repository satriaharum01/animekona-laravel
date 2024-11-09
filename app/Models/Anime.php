<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    use HasFactory;
    protected $table = 'anime';
    protected $primaryKey = 'id';
    protected $fillable = [
        'cover',
        'title',
        'original_title ',
        'description ',
        'type' ,
        'studio' ,
        'date_aired',
        'status' ,
        'genre' ,
        'scores' ,
        'rating' ,
        'duration',
        'quality' ,
        'views'];

}
