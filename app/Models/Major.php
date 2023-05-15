<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    use HasFactory;

    protected $table = 'major';

    protected $fillable = [
        'major_name',
        'major_fillable',
        'major_logo',
        'picture_1',
        'picture_2',
        'created_at',
        'updated_at'
    ];
}
