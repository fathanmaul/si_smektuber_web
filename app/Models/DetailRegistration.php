<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Registration;
use App\Models\User;
use App\Models\Major;

class DetailRegistration extends Model
{
    use HasFactory;

    protected $table = "detail_registration";
    protected $fillable = [
        'user_id',
        'registration_id',
        'nisn',
        'full_name',
        'place_birth',
        'date_birth',
        'address',
        'phone',
        'father_name',
        'mother_name',
        'guardian_name',
        'school_origin',
        'graduation_year',
        'major_id_1',
        'major_id_2',
        'major_accepted'
    ];
   // Relasi dengan model Registration
//     public function registration()
//    {
//        return $this->belongsTo(Registration::class);
//    }
//     public function user()
//    {
//        return $this->belongsTo(User::class);
//    }
//     public function major1()
//     {
//         return $this->belongsTo(Major::class, 'major_id_1');
//     }

//     public function major2()
//     {
//         return $this->belongsTo(Major::class, 'major_id_2');
//     }
}
