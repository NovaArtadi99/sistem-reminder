<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FiturOptimalkan extends Model
{
    use HasFactory;
    protected $table = 'fitur';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    // Specify the fillable fields for mass assigment
    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'register',
        // Add other fields as needed
    ];
}
