<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolusiHarga extends Model
{
    use HasFactory;
    protected $table = 'harga';
    protected $primaryKey = 'id_hrg';
    protected $guarded = ['id_hrg'];

    protected $fillable = [
        'title_hrg',
        'subtitle_hrg',
        'description_hrg',
    ];
}
