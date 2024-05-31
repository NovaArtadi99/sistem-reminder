<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;
    protected $table = 'home';
    protected $primaryKey = 'id_home';
    protected $guarded = ['id_home'];

    // Specify the fillable fields for mass assigment
    protected $fillable = [
        'title_home',
        'subtitle_home',
        'description_home',
        'image_home',
        // Add other fields as needed
    ];
}
