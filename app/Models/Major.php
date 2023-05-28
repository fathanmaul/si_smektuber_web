<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Major extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'major';

    protected $fillable = [
        'major_name',
        'major_description',
        'major_logo',
        'picture_1',
        'picture_2',
        'created_at',
        'updated_at'
    ];

    public function detailRegistrations()
    {
        return $this->hasMany(DetailRegistration::class);
    }
}
