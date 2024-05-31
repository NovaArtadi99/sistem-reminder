<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestimoniModel extends Model
{
    use HasFactory;
    protected $primaryKey = 'testimoni_id';
    protected $table = 'testimoni';
    protected $guarded = ['testimoni_id'];
}
