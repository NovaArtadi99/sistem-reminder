<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

    use HasFactory;
    protected $table = 'contact';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    // Specify the fillable fields for mass assigment
    protected $fillable = [
        'name',
        'telepon',
        'email',
        'alamat',
        // Add other fields as needed
    ];
}
