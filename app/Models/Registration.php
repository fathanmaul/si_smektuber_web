<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Registration extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'registration';

    // protected $fillable = [
    //     'school_year',
    //     'description',
    //     'poster',
    //     'date_start',
    //     'date_end',
    // ];

    public function schoolYear()
    {
        return $this->belongsTo(SchoolYear::class, 'school_year');
    }

}
