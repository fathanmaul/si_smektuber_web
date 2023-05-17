<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetailRegistration extends Model
{
    use HasFactory;

    protected $table = "detail_registration";

   // Relasi dengan model Registration
   public function registration()
   {
       return $this->belongsTo(Registration::class);
   }
//    public function User(){
//     return $this->
//    }
}
