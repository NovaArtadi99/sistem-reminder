<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    use HasFactory;
    protected $table = 'fitur_reminder';
    protected $primaryKey = 'id_reminder';
    protected $guarded = ['id_reminder'];

    protected $fillable = [
        'title_reminder',
        'subtitle_reminder',
        'description_reminder',
        'list1',
        'list2',
        'list3',
        'list4',
        'reminder_image',
        'register',
    ];
}
