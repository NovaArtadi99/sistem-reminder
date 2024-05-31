<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AksesGadget extends Model
{
    use HasFactory;
    protected $table = 'gadget';
    protected $primaryKey = 'id_akses';
    protected $guarded = ['id_akses'];

    // Specify the fillable fields for mass assigment
    protected $fillable = [
        'title_akses',
        'subtitle_akses',
        'description_akses',
        'teks1',
        'teks2',
        'image_akses',
        'register_akses',
        // Add other fields as needed
    ];
}
