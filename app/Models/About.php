<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $table = 'about';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    // Specify the fillable fields for mass assigment
    protected $fillable = [
        'title',
        'description',
        'buttom1',
        'buttom2',
        'name',
        'list',
        'list2',
        'list3',
        'list4',
        'list5',
        'list6',
        // Add other fields as needed
    ];
}


