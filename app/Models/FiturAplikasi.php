<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FiturAplikasi extends Model
{
    use HasFactory;
    protected $table = 'fitur_aplikasi';
    protected $primaryKey = 'id_fitur';
    protected $guarded = ['id_fitur'];

    protected $fillable = [
        'fitur_app_no',
        'fitur_app_title',
        'fitur_app_description',
        'fitur_app_image',
    ];
}
