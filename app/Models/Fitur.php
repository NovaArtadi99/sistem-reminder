<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fitur extends Model
{
    use HasFactory;
    protected $table = 'fiturr';
    protected $primaryKey = 'id_fitur';
    protected $guarded = ['id_fitur'];

    // Specify the fillable fields for mass assigment
    protected $fillable = [
        'fitur_title',
        'fitur_subtitle',
        'fitur_description',
        // Add other fields as needed
    ];
}
